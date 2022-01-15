<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnsCredential extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider',
        'uid'
    ];

    /**
     * uidから取得
     *
     * @param string $uid
     * @return SnsCredential
     */
    public function getSnsCredential($uid)
    {
        return $this->where('uid', $uid)->first();
    }

    /**
     *  SNS認証情報の新規登録
     * @param array $snsCred カラム名 => 値のハッシュ
     * @return bool 登録が成功したか否か
     */
    public function insertLineCredential(array $snsCred) :bool
    {   
        $this->provider = "line";
        return $this->fill($snsCred)->save();
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
