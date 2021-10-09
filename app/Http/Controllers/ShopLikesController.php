<?php

namespace App\Http\Controllers;

use App\Models\ShopLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopLikesController extends Controller
{
    protected $shopLike;
    const SHOP_LIKE_VALIDATE_RULE = [
        'userId' => 'required|integer',
        'shopId' => 'required|integer',
    ];

    public function __construct(ShopLike $shopLike)
    {
        $this->shopLike = $shopLike;
    }

    public function create(Request $request) :array
    {
        $validator = Validator::make($request->input(), self::SHOP_LIKE_VALIDATE_RULE);
        $shopLike = $validator->validated();
        $this->shopLike->insertShopLike($this->myFunction->changeArrayKeySnake($shopLike));
        return ['msg' => '登録処理が完了しました'];
    }
}
