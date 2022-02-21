<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Http\Requests\ShopLike\ToggleRequest;
use Illuminate\Http\JsonResponse;

class ShopLikesController extends Controller
{
    protected $shop;

    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    public function toggle(ToggleRequest $request): JsonResponse
    {
        $shopLike = $request->makeShopLike();

        $count = 0;
        DB::beginTransaction();
        try {
            // 登録チェック
            if ($shopLike
                ->where('shop_id', $shopLike->shop_id)
                ->where('user_id', $shopLike->user_id)
                ->get()
                ->isEmpty()
            ) {
                // 登録
                $shopLike->save();
            } else {
                // 削除
                $shopLike
                ->where('shop_id', $shopLike->shop_id)
                ->where('user_id', $shopLike->user_id)
                ->first()
                ->forceDelete();
            }
            ;
            $count = $shopLike->where('shop_id', $shopLike->shop_id)->count();
            $this->shop->find($shopLike->shop_id)->fill(['like_count' => $count])->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return new JsonResponse(['errors' => '登録時にエラーが発生しました。']);
        }
        return new JsonResponse(['count' => $count]);
        
    }
}
