<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * ショップ取得
     *
     * @param int $page
     * @param int $limit
     * @param string $orderby
     * @param string $order
     * @return void
     */
    public function getShops(int $page, int $limit, string $orderby, string $order)
    {
        $offset = $limit * ($page - 1);
        return $this->offset($offset)->limit($limit)->orderby($orderby, $order)->get();
    }

    public function getShopsCount()
    {
        return $this->count();
    }

    public function insertShop(array $shop)
    {
        $this->name = $shop['name'];
        $this->prefecture_id = $shop['prefecture'] ?? '';
        $this->city = $shop['city'] ?? '';
        $this->address = $shop['address'] ?? '';
        $this->building = $shop['building'] ?? '';
        $this->access = $shop['access'] ?? '';
        $this->phone_number = $shop['phoneNumber'] ?? '';
        $this->instagram_url = $shop['instagram'] ?? '';
        $this->holiday = $shop['holiday'] ?? '';
        $this->business_hour = $shop['businessHour'] ?? '';
        $this->image_url = $shop['imageUrl'] ?? '';
        $this->created_at = date('Y-m-d H:i:s');
        $this->created_user_id = 0;
        return $this->save();
    }

}
