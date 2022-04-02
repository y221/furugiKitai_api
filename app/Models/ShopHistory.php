<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class ShopHistory extends Model
{
    protected $fillable = [
        'shop_id',
        'name',
        'prefecture_id',
        'area_id',
        'city',
        'address',
        'building',
        'access',
        'latitude',
        'longitude',
        'phone_number',
        'instagram_url',
        'holiday',
        'business_hour',
        'image_url',
        'created_user_id',
        'updated_user_id'
    ];
}
