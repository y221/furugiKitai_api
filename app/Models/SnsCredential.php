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

    public function insertLineCredential()
    {
        $this->provider = "line";
        return $this->save();
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
