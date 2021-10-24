<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SnsCredential;
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
     * @param User $shop
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
        // uidで検索し、既にサービス登録済みであればそのままリターン
        $uid = $request->input('uid');
        $snsCredential = $this->snsCredential->getSnsCredential($uid);

        if (isset($snsCredential)) {
            return ['errors' => "既にサービス登録済みです"];
        }

        // バリデーション
        $validator = Validator::make($request->input(), self::USER_VALIDATE_RULE);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $user = $validator->validated();

        // 画像ファイルをS3にアップロード
        $fileName = time();
        $image = file_get_contents($user["icon"]);

        Storage::disk('s3')->put('user_images/'.$fileName, $image, 'public');
        $s3Path = Storage::disk('s3')->url('user_images/'.$fileName);

        // userモデルに詰めて登録
        $this->user->icon = $s3Path;
        $this->user->name = $user["name"];
        $this->user->insertUser();

        // userに紐づくsns_credentialsを登録する
        $this->snsCredential->uid = $uid;
        $this->snsCredential->user_id = $this->user->id;
        $this->snsCredential->insertLineCredential();

        // 登録したユーザー情報を返却する
        return $this->user;
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return array
     */
    public function update(Request $request)
    {
        // バリデーション
        // $validator = Validator::make($request->input(), self::USER_VALIDATE_RULE);
        // if ($validator->fails()) {
        //     return ['errors' => $validator->errors()];
        // }
        // $user = $validator->validated();
        return "";
    }
}
