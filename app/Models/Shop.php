<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * ショップ取得
     *
     * @param array $prefectureIds
     * @param int $page
     * @param int $limit
     * @param string $orderby
     * @param string $order
     * @return object
     */
    public function getShops(array $prefectureIds, int $page, int $limit, string $orderby = 'id', string $order = 'ASC')
    {
        $offset = $limit * ($page - 1);
        $query = $this->newQuery();
        $query->select('shops.*', 'prefectures.prefecture', 'genders.gender');
        $query->leftJoin('prefectures', 'shops.prefecture_id', '=', 'prefectures.id');
        $query->leftJoin('genders', 'shops.gender_id', '=', 'genders.id');
        if (!empty($prefectureIds)) $query->whereIn('prefecture_id', $prefectureIds);
        $query->where('active', 1);
        $query->offset($offset)->limit($limit)->orderby($orderby, $order);
        return $query->get();
    }

    /**
     * ショップをidで取得
     *
     * @param integer $id
     * @return object
     */
    public function getShop(int $id)
    {
        return $this->find($id);
    }

    /**
     * 店舗数カウント
     *
     * @param array $prefectureIds
     * @return int
     */
    public function getShopsCount(array $prefectureIds) :int
    {
        $query = $this->newQuery();
        if (!empty($prefectureIds)) $query->whereIn('prefecture_id', $prefectureIds);
        return $query->count();
    }

    public function insertShop(array $shop)
    {
        $this->name = $shop['name'];
        $this->prefecture_id = $shop['prefectureId'];
        $this->gender_id = $shop['genderId'];
        $this->city = $shop['city'];
        $this->address = $shop['address'];
        $this->building = $shop['building'];
        $this->latitude = $shop['latitude'];
        $this->longitude = $shop['longitude'];
        $this->access = $shop['access'];
        $this->phone_number = $shop['phoneNumber'];
        $this->instagram_url = $shop['instagramUrl'];
        $this->holiday = $shop['holiday'];
        $this->business_hour = $shop['businessHour'];
        $this->image_url = $shop['imageUrl'];
        $this->created_user_id = 0;
        return $this->save();
    }

    public function updateShop(int $id, array $request) {
        $this->where('id', $id)->update([
            'name' => $request['name'],
            'prefecture_id' => $request['prefectureId'],
            'gender_id' => $request['genderId'],
            'city' => $request['city'],
            'address' => $request['address'],
            'building' => $request['building'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'access' => $request['access'],
            'phone_number' => $request['phoneNumber'],
            'instagram_url' => $request['instagramUrl'],
            'holiday' => $request['holiday'],
            'business_hour' => $request['businessHour'],
            'image_url' => $request['imageUrl'],
            'updated_user_id' => 0,
        ]);
        
    }

}
