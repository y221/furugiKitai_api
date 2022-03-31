<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Gender;
use App\Infrastructure\Aws\S3;
use App\Infrastructure\Google\Geocode;
use App\Http\Resources\ShopResource;
use App\Http\Resources\ShopsResource;
use App\Http\Resources\PrefecturesResource;
use App\Http\Resources\GendersResource;
use App\Http\Requests\Shop\CreateRequest;
use App\Http\Requests\Shop\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;

class ShopsController extends Controller
{
    protected $shop;

    /**
     * DI
     *
     * @param Shop $shop
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    /**
     * 一覧取得
     *
     * @param Request $request
     * @return JsonResource
     */
    public function index(Request $request) :JsonResource
    {
        $this->shop->setConditions($request->all());
        return new ShopsResource($this->shop);
    }

    /**
     * 登録
     *
     * @param CreateRequest $request
     * @return ShopResource
     */
    public function create(CreateRequest $request) :ShopResource
    {
        // バリデーションしてモデルのオブジェクト返す
        $shop = $request->makeShop();

        // 住所データ設定
        $geocode = new Geocode;
        $shop->setLocation($geocode->fetchLocation($shop->makeAddress()));

        // 画像データ
        $s3 = new S3();
        $image = $request->file('mainImage') ?? $request->input('mainImage');
        $shop->setImageUrl($s3->uploadImage($image, 'shop_images'));

        // 登録
        $shop->save();
        return new ShopResource($shop);
    }

    /**
     * 詳細取得
     *
     * @param  int  $id
     * @return JsonResource
     */
    public function show(int $id) :JsonResource
    {
        $shop = Shop::find($id);
        return new ShopResource($shop);
    }

    /**
     * 編集
     * @param int $id
     * 
     * @return JsonResource
     */
    public function edit(int $id, Prefecture $prefecture, Gender $gender) :JsonResource
    {
        $shop = Shop::find($id);

        return new JsonResource([
            'shop' => new ShopResource($shop),
            'prefectures' => new PrefecturesResource($prefecture),
            'genders' => new GendersResource($gender)
        ]);
    }

    /**
     * 更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ShopResource
     */
    public function update(UpdateRequest $request, int $id) :ShopResource
    {
        
        // バリデーションしてモデルのオブジェクト返す
        $shop = $request->makeShop($id);

        // 登録済データ取得
        $savedShop = Shop::find($id);

        // 住所変更チェック
        if ($shop->isAddressChanged($savedShop)) {
            // 住所データ設定
            $geocode = new Geocode;
            $shop->setLocation($geocode->fetchLocation($shop->makeAddress()));
        }

        // 画像データ
        $s3 = new S3();
        $image = $request->file('mainImage') ?? $request->input('mainImage');
        $shop->setImageUrl($s3->uploadImage($image, 'shop_images', $savedShop->image_url));

        // 登録
        $shop->save();
        return new ShopResource($shop);
    }
}
