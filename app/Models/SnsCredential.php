<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnsCredential extends Model
{
    use HasFactory;

    /**
     * uidから取得
     *
     * @param string $uid
     * @return object
     */
    public function getSnsCredential($uid)
    {
        return $this->where('uid', $uid)->first();
    }

    /**
     *  SNS認証情報の新規登録
     *
     * @return bool 登録が成功したか否か
     */
    public function insertLineCredential(string $user_id, string $uid)
    {   
        $this->user_id = $user_id;
        $this->uid = $uid;
        $this->provider = "line";

        return $this->save();
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
