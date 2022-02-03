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
     * @param Request $request
     * @return void
     */
    public function setConditions(Request $request) :void
    {
        // 都道府県ID設定
        if (isset($request->prefectureIds)) {
            $this->prefectureIds = $request->prefectureIds;
        }
        // ページ設定
        if (isset($request->page)) {
            $this->page = $request->page;
        }
        // 制限
        if (isset($request->limit)) {
            $this->limit = $request->limit;
        }
        // ソートカラム
        if (isset($request->orderby)) {
            $this->orderby = $request->orderby;
        }
        // ソート
        if (isset($request->order)) {
            $this->order = $request->order;
        }
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

    /**
     * 住所を作成
     * 
     * @param string $prefecture
     * @param array $shop
     * 
     * @return string
     */
    public function makeAddress(string $prefecture, array $shop) : string
    {
        // shopは任意項目のため
        $building = $shop['building'] ?? '';
        return "{$prefecture}{$shop['city']}{$shop['address']}{$building}";
    }

    /**
     * 住所が変更されているかのチェック
     * 
     * @param array $postShop
     * @param array $savedShop
     * 
     * @return bool
     */
    public function isAddressChanged(array $postShop, array $savedShop) : bool
    {
        // どれか1つでも異なる場合はtrue
        return $postShop['city'] !== $savedShop['city']
            || $postShop['address'] !== $savedShop['address']
            || $postShop['building'] !== $savedShop['building'];
    }

}
