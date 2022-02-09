<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prefecture;
use App\Models\Gender;

class Shop extends Model
{
    private $prefectureIds = [];
    private $areaIds = [];
    private $page = 1;
    private $limit = 5;
    private $orderby = 'id';
    private $order = 'ASC';

    protected $guarded = [];

    /**
     * 条件設定
     * 
     * @param array $conditions
     * @return void
     */
    public function setConditions(array $conditions) :void
    {
        // 都道府県ID設定
        if (isset($conditions['prefectureIds'])) {
            $this->prefectureIds = $conditions['prefectureIds'];
        }
        // 都道府県ID設定
        if (isset($conditions['areaIds'])) {
            $this->areaIds = $conditions['areaIds'];
        }
        // ページ設定
        if (isset($conditions['page'])) {
            $this->page = $conditions['page'];
        }
        // 制限
        if (isset($conditions['limit'])) {
            $this->limit = $conditions['limit'];
        }
        // ソートカラム
        if (isset($conditions['orderby'])) {
            $this->orderby = $conditions['orderby'];
        }
        // ソート
        if (isset($conditions['order'])) {
            $this->order = $conditions['order'];
        }
    }

    /**
     * 緯度経度設定
     * 
     * @param array $location {
     *   lat: string,
     *   lng: string
     * }
     * @return void
     */
    public function setLocation(array $location) :void
    {
        $this->latitude = $location['lat'];
        $this->longitude = $location['lng'];
    }

    /**
     * 画像URL設定
     * 
     * @param mixed $imageUrl
     * @return void
     */
    public function setImageUrl(string $imageUrl) :void
    {
        $this->image_url = $imageUrl;
    }

    /**
     * ショップ取得
     *
     * @return object
     */
    public function getShops() :object
    {
        $offset = $this->limit * ($this->page - 1);
        $query = $this->newQuery();
        $query->with(['prefecture', 'gender']);
        if (!empty($this->prefectureIds)) {
            $query->whereIn('prefecture_id', $this->prefectureIds);
        }
        if (!empty($this->areaIds)) {
            $query->whereIn('area_id', $this->areaIds);
        }
        $query->where('active', 1);
        $query->offset($offset)->limit($this->limit)->orderby($this->orderby, $this->order);
        return $query->get();
    }

    /**
     * 都道府県データをリレーション
     * 
     * @return object
     */
    public function prefecture() :object
    {
        return $this->belongsTo(Prefecture::class);
    }

    /**
     * 性別データをリレーション
     * 
     * @return object
     */
    public function gender() :object
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * 対象条件の店舗全店舗取得
     *
     * @return int
     */
    public function getShopsAll() :object
    {
        $query = $this->newQuery();
        if (!empty($this->prefectureIds)) {
            $query->whereIn('prefecture_id', $this->prefectureIds);
        }
        if (!empty($this->areaIds)) {
            $query->whereIn('area_id', $this->areaIds);
        }
        return $query->get();
    }

    /**
     * 住所を作成
     * 
     * @return string
     */
    public function makeAddress() : string
    {
        $prefecture = $this->prefecture->prefecture ?? '';
        $city = $this->city ?? '';
        $address = $this->address ?? '';
        $building = $this->building ?? '';
        return "{$prefecture}{$city}{$address}{$building}";
    }

    /**
     * 住所が変更されているかのチェック
     * 
     * @param Shop $savedShop
     * 
     * @return bool
     */
    public function isAddressChanged(Shop $savedShop) : bool
    {
        // どれか1つでも異なる場合はtrue
        return $this->city !== $savedShop->city
            || $this->address !== $savedShop->address
            || $this->building !== $savedShop->building;
    }

}

