<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'icon',
        'name',
        'password',
        'favorite',
        'profile',
        'instagram'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     *  ユーザー新規登録
     * @param array $user カラム名 => 値のハッシュ
     * @return bool 登録が成功したか否か
     */
    public function insertUser(array $user) :bool
    {
        $user['password'] = Hash::make('secret');
        return $this->fill($user)->save();
    }

    public function snsCredential() {
        return $this->hasOne('App\Models\SnsCredential');
    }
}
