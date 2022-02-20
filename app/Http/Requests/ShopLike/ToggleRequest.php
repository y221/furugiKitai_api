<?php

namespace App\Http\Requests\ShopLike;

use Illuminate\Foundation\Http\FormRequest;
use App\Library\MyFunction;
use App\Models\ShopLike;
use Illuminate\Support\Facades\Auth;

/**
 * ShopLikeの作成リクエスト
 */
class ToggleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'shopId' => 'required|integer',
        ];
    }

    public function makeShopLike(): ShopLike
    {
        // バリデーションした値で埋めた ShopLike を取得
        $validated = MyFunction::changeArrayKeySnake($this->validated());
        $shopLike = new ShopLike($validated);
        // ユーザIDはここで設定しておく
        return $shopLike->fill(['user_id' => Auth::id()]);
    }
}