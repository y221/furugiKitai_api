<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];
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
    public function getShop(int $id) :object
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

    /**
     * 登録
     *
     * @param array $shop
     * @return void
     */
    public function insertShop(array $shop) :void
    {
        $this->fill($shop)->save();
    }

    /**
     * 更新
     *
     * @param integer $id
     * @param array $shop
     * @return void
     */
    public function updateShop(int $id, array $shop) :void
    {
        $this->find($id)->fill($shop)->save();
    }

}
