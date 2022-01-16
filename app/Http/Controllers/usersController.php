<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SnsCredential;
use Exception;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{   
    protected $user;
    protected $snsCredential;

    const USER_VALIDATE_RULE = [
        'icon' => '',
        'name' => 'required|max:50',
        'favorite' => 'max:50',
        'profile' => 'max:100',
        'instagram' => 'max:10',
    ];

    /**
     * DI
     *
     * @param User $user
     * @param SnsCredential $snsCredential
     * @return void
     */
    public function __construct(User $user, SnsCredential $snsCredential)
    {
        $this->user = $user;
        $this->snsCredential = $snsCredential;
    }

    /**
     * Oauth認証後のパラメータをフロントから受け取ってサービスに新規登録
     *
     * @param Request $request
     * @return array
     */
    public function create(Request $request)
    {
        // uidで検索し、既にサービス登録済みであれば既存のユーザー情報をリターン
        $uid = $request->input('uid');
        $snsCredential = $this->snsCredential->getSnsCredential($uid);

        if (isset($snsCredential)) {
            $existingUser = $this->user->getUser($snsCredential->user_id);
            return $existingUser;
        }

        // バリデーション
        $validator = Validator::make($request->input(), self::USER_VALIDATE_RULE);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $user = $validator->validated();

        // 画像ファイルをS3にアップロード
        try {
            $image = file_get_contents($user["icon"]);
            
            $fileName = time();
            Storage::disk('s3')->put('user_images/'.$fileName, $image, 'public');
            $s3Path = Storage::disk('s3')->url('user_images/'.$fileName);

            // ユーザー登録用のハッシュに詰める
            $user["icon"] = $s3Path;

        } catch(Exception $ex) {
            return ['errors' => "icon画像が取得できませんでした"];
        }

        // DBに登録
        $this->user->insertUser($user);

        $this->snsCredential->insertLineCredential([
            "user_id" => $this->user->id, 
            "uid" => $uid
        ]);

        // 登録したユーザー情報を返却する
        return $this->user;
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return array
     */
    public function update(Request $request, int $id)
    {
        // リクエストに含まれるuidで検索し、更新予定のユーザーに紐づいていなければエラー
        $uid = $request->input('uid');
        $snsCredential = $this->snsCredential->getSnsCredential($uid);

        if (is_null($snsCredential) || $id != $snsCredential->user_id) {
            return ['errors' => 'ユーザーが存在しません'];
        }

        // バリデーション
        $validator = Validator::make($request->input(), self::USER_VALIDATE_RULE);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $user = $validator->validated();

        // 画像ファイルをS3にアップロード
        try {
            $image = file_get_contents($user['icon']);
            
            $fileName = time();
            Storage::disk('s3')->put('user_images/'.$fileName, $image, 'public');
            $s3Path = Storage::disk('s3')->url('user_images/'.$fileName);
            
            // ユーザー更新用のハッシュに詰める
            $user["icon"] = $s3Path;

        } catch(Exception $ex) {
            return ['errors' => "icon画像が取得できませんでした"];
        }

        // DB更新
        $this->user->updateUser($id, $user);

        return $user;
    }
}
