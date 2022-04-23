<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\SnsCredential;
use App\Models\ShopLike;
use App\Infrastructure\Aws\S3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{   
    protected $user;
    protected $snsCredential;
    protected $s3;

    const USER_VALIDATE_RULE = [
        'icon' => '',
        'name' => 'required|max:50',
        'favorite' => 'max:50',
        'profile' => 'max:100',
        'instagram' => 'max:100',
    ];

    /**
     * DI
     *
     * @param User $user
     * @param SnsCredential $snsCredential
     * @param S3 $s3
     * @return void
     */
    public function __construct(User $user, SnsCredential $snsCredential, S3 $s3)
    {
        $this->user = $user;
        $this->snsCredential = $snsCredential;
        $this->s3 = $s3;
    }

    /**
     * 単一ユーザーの情報を返す
     *
     * @param int $id usersテーブルのid
     * @return array
     */
    public function show(int $id) :UserResource
    {   
        $user = $this->user->find($id);

        if (is_null($user)) {
            return response()->json(
                ['message' => 'User Not Found'], 404
            );
        }

        return new UserResource($user);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return array
     */
    public function update(Request $request, int $id) :UserResource
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
        $input = $validator->validated();

        // 更新前のユーザーアイコン取得
        $user = $this->user->find($request->input('id'));
        $existingImage = $user->icon;

        // 画像ファイルをS3にアップロード
        $image = $request->file('icon') ?? $request->input('icon');
        $uploadedS3Path = $this->s3->uploadImage($image, 'user_images', $existingImage);
        $input["icon"] = $uploadedS3Path;

        // DB更新
        $user->fill($input)->save();

        return new UserResource($user);
    }

    /**
     * 詳細取得
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function shopLike(Request $request) :JsonResponse
    {
        $params = $request->all();
        $shopLike = ShopLike::where('shop_id', $params['shopId'])->where('user_id', Auth::id());
        return new JsonResponse(['isUserShopLikeOn' => $shopLike->exists()]);
    }
}
