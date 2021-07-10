<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * ショップ取得
     *
     * @param int $id
     * @param int $page
     * @param int $limit
     * @param string $orderby
     * @param string $order
     * @return void
     */
    public function getShops(int $id, int $page = 1, int $limit = 5, string $orderby = 'id', string $order = 'ASC')
    {
        $offset = !empty($page) && !empty($limit) ? $limit * ($page - 1) : 0;
        return $this
            ->ofValues('id', $id)
            ->offset($offset)
            ->limit($limit)
            ->orderby($orderby, $order)
            ->get();
    }

    public function getShopsCount()
    {
        return $this->count();
    }

    public function scopeOfValues($query, $key, $value)
    {
        if (!empty($value)) {
            return $query->where($key, $value);
        }
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
