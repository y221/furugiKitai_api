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
     * @param array $user カラム名 => 値のハッシュ
     * @return bool 登録が成功したか否か
     */
    public function insertUser(array $user) :bool
    {
        return $this->fill($user)->save();
    }

    /**
     *  ユーザー情報更新
     * @param int $id
     * @param array $user カラム名 => 値のハッシュ
     * @return bool 登録が成功したか否か
     */
    public function updateUser(int $id, array $user) :bool
    {
        return $this->find($id)->fill($user)->save();
    }

    public function snsCredential() {
        return $this->hasOne('App\Models\SnsCredential');
    }
}
