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
     * 単一ユーザーの情報を返す
     *
     * @param int $id usersテーブルのid
     * @return array
     */
    public function show(int $id)
    {   
        $user = $this->user->getUser($id);

        if (is_null($user)) {
            return response()->json(
                ['message' => 'User Not Found'], 404
            );
        }

        return $user;
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