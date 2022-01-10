<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{   
    protected $fillable = [
        'icon',
        'name',
        'favorite',
        'profile',
        'instagram'
    ];

    /**
     *  ユーザーをidで取得
     *
     * @param integer $id
     * @return User
     */
    public function getUser(int $id)
    {
        return $this->find($id);
    }

    /**
     *  ユーザー新規登録
     *
     * @return bool 登録が成功したか否か
     */
    public function insertUser(string $icon, string $name)
    {   
        $this->icon = $icon;
        $this->name = $name;

        return $this->save();
    }

    /**
     *  ユーザー情報更新
     *
     * @return bool 登録が成功したか否か
     */
    public function updateUser(string $icon, string $name, ?string $favorite, ?string $profile, ?string $instagram)
    {   
        // 空のインスタンスで更新処理しようとしている場合はエラー
        if (is_null($this->id)) {
            return false;
        }

        // 値を詰めて更新
        $this->icon = $icon;
        $this->name = $name;
        $this->favorite = $favorite;
        $this->profile = $profile;
        $this->instagram = $instagram;

        return $this->save();
    }

    public function snsCredential() {
        return $this->hasOne('App\Models\SnsCredential');
    }
}
