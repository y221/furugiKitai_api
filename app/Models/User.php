<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{   
    /**
     *  ユーザーをidで取得
     *
     * @param integer $id
     * @return object
     */
    public function getUser(int $id)
    {
        return $this->find($id);
    }

    public function insertUser()
    {
        return $this->save();
    }

    public function snsCredential() {
        return $this->hasOne('App\Models\SnsCredential');
    }
}
