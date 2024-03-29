<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SnsCredential;
use App\Infrastructure\Aws\S3;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;


class LoginController extends Controller
{
    protected $user;
    protected $snsCredential;
    protected $s3;

    const USER_VALIDATE_RULE = [
        'icon' => '',
        'name' => 'required|max:50',
        // 'password' => 'required|max:255',
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
    public function __construct(User $user, SnsCredential $snsCredential, S3 $s3)
    {
        $this->user = $user;
        $this->snsCredential = $snsCredential;
        $this->s3 = $s3;
    }

    /**
     * 認証の試行を処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) :UserResource
    {
        // uidで検索し、既にサービス登録済みであれば既存のユーザー情報をリターン
        $uid = $request->input('uid');
        $snsCredential = $this->snsCredential->getSnsCredential($uid);
        if (isset($snsCredential)) {
            $existingUser = $this->user->find($snsCredential->user_id);
            if (empty($existingUser)) {
                return ['errors' => 'エラー'];
            }
            $credentials = [
                'id' => $existingUser->id,
                'password' => 'secret'
            ];

            if (!Auth::attempt($credentials, true)) {
                return ['errors' => 'エラー'];
            }
            
            $request->session()->regenerate();
    
            return new UserResource($existingUser);
        }

        // バリデーション
        $validator = Validator::make($request->input(), self::USER_VALIDATE_RULE);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $user = $validator->validated();

        // 画像ファイルをS3にアップロードし、ユーザー登録用の連想配列に詰める
        $image = file_get_contents($user["icon"]);
        $filePath = 'user_images/'.time();
        $this->s3->uploadImage($image, $filePath);

        $user["icon"] = $filePath;

        // 登録
        DB::transaction(function () use ($user, $uid){
            $this->user->insertUser($user);
            $this->snsCredential->insertLineCredential([
                "user_id" => $this->user->id, 
                "uid" => $uid
            ]);
        });

        // ログイン
        $credentials = [
            'id' => $this->user->id,
            'password' => 'secret'
        ];
        if (!Auth::attempt($credentials, true)) {
            throw new Exception('ログインに失敗しました。');
        }
        
        $request->session()->regenerate();

        // 登録したユーザー情報を返却する
        return new UserResource($this->user);
    }

    /**
     * @param \Illuminate\Http\Request  $request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return new JsonResponse([
            'message' => 'ログアウトしました'
        ]);
    }
}
