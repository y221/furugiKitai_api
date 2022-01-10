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

    public function snsCredential() {
        return $this->hasOne('App\Models\SnsCredential');
    }
}
