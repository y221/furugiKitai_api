<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Gender;
use App\Library\MyFunction;
use App\Infrastructure\Aws\S3;
use App\Infrastructure\Google\Geocode;
use App\Http\Resources\ShopResource;
use App\Http\Resources\ShopsResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;

class ShopsController extends Controller
{
    protected $shop;
    protected $myFunction;

    const SHOP_VALIDATE_RULE = [
        'name' => 'required|max:50',
        'prefectureId' => 'required|integer',
        'genderId' => 'required|integer',
        'city' => 'required|max:50',
        'address' => 'required|max:50',
        'building' => 'required|max:50',
        'access' => 'max:50',
        'phoneNumber' => 'max:50',
        'instagramUrl' => 'max:50',
        'holiday' => 'max:50',
        'businessHour' => 'max:200',
    ];
    /**
     * DI
     *
     * @param Shop $shop
     * @param MyFunction $myFunction
     * @return void
     */
    public function __construct(Shop $shop, MyFunction $myFunction)
    {
        $this->shop = $shop;
        $this->myFunction = $myFunction;
    }
    /**
     * 一覧取得
     *
     * @param Request $request
     * @return JsonResource
     */
    public function index(Request $request) :JsonResource
    {
        $this->shop->setConditions($request);
        return new ShopsResource($this->shop);
    }

    /**
     * 登録
     *
     * @param Request $request
     * @return jsonResponse
     */
    public function create(Request $request) :jsonResponse
    {
        // バリデーション
        $validator = Validator::make($request->input(), self::SHOP_VALIDATE_RULE);
        if ($validator->fails()) {
            return new JsonResponse(['errors' => $validator->errors()]);
        }
        $shop = $validator->validated();

        // 都道府県データ取得
        $prefecture = Prefecture::find($shop['prefectureId']);

        // 住所データ
        $address = $this->shop->makeAddress($prefecture->prefecture, $shop);
        $geocode = new Geocode;
        $location = $geocode->fetchLocation($address);
        $shop['latitude'] = $location['lat'] ?? null;
        $shop['longitude'] = $location['lng'] ?? null;

        // 画像データ
        $s3 = new S3($request);
        $shop['imageUrl'] = $s3->uploadImage('mainImage', 'shop_images');

        // 登録処理
        $this->shop->insertShop($this->myFunction->changeArrayKeySnake($shop));
        return new JsonResponse(['msg' => '登録処理が完了しました']);
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
     * 更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return array
     */
    public function update(Request $request, int $id) :JsonResponse
    {
        // バリデーション
        $validator = Validator::make($request->input(), self::SHOP_VALIDATE_RULE);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $shop = $validator->validated();

        // 登録済データ取得
        $savedShop = $this->shop->getShop($id)->toArray();

        // 住所変更チェック
        if ($this->shop->isAddressChanged($shop, $savedShop)) {
            // 都道府県データ取得
            $prefecture = Prefecture::find($shop['prefectureId']);
            $address = $this->shop->makeAddress($prefecture->prefecture, $shop);
            $geocode = new Geocode;
            $location = $geocode->fetchLocation($address);
            $shop['latitude'] = $location['lat'] ?? null;
            $shop['longitude'] = $location['lng'] ?? null;
        }

        // S3から取得
        $s3 = new S3($request);
        $shop['image_url'] = $s3->uploadImage('mainImage', 'shop_images', $savedShop['image_url']);

        // 更新
        $this->shop->updateShop($id, $this->myFunction->changeArrayKeySnake($shop));
        return new JsonResponse(['msg' => '更新処理が完了しました']);
    }
}
