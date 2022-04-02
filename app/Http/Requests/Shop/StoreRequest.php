<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;
use App\Library\MyFunction;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

/**
 * Shopの作成リクエスト
 */
class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'prefectureId' => 'required|integer',
            'genderId' => 'required|integer',
            'city' => 'required|max:50',
            'address' => 'required|max:50',
            'building' => 'max:50',
            'access' => 'max:50',
            'phoneNumber' => 'max:50',
            'instagramUrl' => 'max:50',
            'holiday' => 'max:50',
            'businessHour' => 'max:200',
        ];
    }

    public function makeShop(): Shop
    {
        // バリデーションした値で埋めた Shop を取得
        $shop = MyFunction::changeArrayKeySnake($this->validated());
        $shop['created_user_id'] = Auth::id();
        $shop['updated_user_id'] = Auth::id();
        return new Shop($shop);
    }
}