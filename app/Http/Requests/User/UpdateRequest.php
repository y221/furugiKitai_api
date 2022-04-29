<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Userの作成リクエスト
 */
class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'icon' => '',
            'name' => 'required|max:50',
            'favorite' => 'max:50',
            'profile' => 'max:100',
            'instagram' => 'max:100',
        ];
    }

    /**
     * バリデーション済みの値が入ったユーザーオブジェクトを返す
     *
     * @param int $id ユーザーのID
     * @return App\Http\Requests\User 
     */
    public function makeUser(int $id): User
    {
        return User::find($id)->fill($this->validated());
    }
}