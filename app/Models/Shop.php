<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gender;

class Shop extends Model
{
    private $prefectureIds = [];
    private $page = 1;
    private $limit = 1;
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
     * @param array $location
     * @return void
     */
    public function setLocation(array $location) :void
    {
        $this->latitude = $location['lat'] ?? null;
        $this->longitude = $location['lng'] ?? null;
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
        $query->select('shops.*', 'prefectures.prefecture', 'genders.gender');
        $query->leftJoin('prefectures', 'shops.prefecture_id', '=', 'prefectures.id');
        $query->leftJoin('genders', 'shops.gender_id', '=', 'genders.id');
        if (!empty($this->prefectureIds)) {
            $query->whereIn('prefecture_id', $this->prefectureIds);
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

