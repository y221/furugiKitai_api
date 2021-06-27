<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Prefecture;
use App\Library\MyFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ShopsController extends Controller
{
    protected $shop;
    protected $prefecture;
    protected $myFunction;

    /**
     * DI
     *
     * @param Shop $shop
     * @param MyFunction $myFunction
     * @return void
     */
    public function __construct(Shop $shop, Prefecture $prefecture, MyFunction $myFunction)
    {
        $this->shop = $shop;
        $this->prefecture = $prefecture;
        $this->myFunction = $myFunction;
    }
    /**
     * 一覧取得
     *
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $id = $request->id ?? 0;
        $page = $request->page ?? 0;
        $limit = $request->limit ?? 0;
        $orderby = $request->orderby ?? 'id';
        $order = $request->order ?? 'ASC';
        $shops = $this->shop->getShops((int)$id, (int)$page, (int)$limit, $orderby, $order);
        $prefectures = array_column($this->prefecture->getPrefectures()->toArray(), 'prefecture', 'id');
        $shops = $this->myFunction->changeArrayKeyCamel($shops->toArray());
        $count = $this->shop->getShopsCount();
        foreach ($shops as $index => $shop) {
            $shops[$index]['prefecture'] = $prefectures[$shop['prefectureId']];
            $shops[$index]['imageUrl'] = empty($shop['imageUrl']) ? '' : Storage::disk('s3')->url($shop['imageUrl']);
        }
        return [
            'shops' => $shops,
            'count' => $count,
        ];
    }

    /**
     * 登録
     *
     * @param Request $request
     * @return array
     */
    public function create(Request $request)
    {
        $shop = [
            'name' => $request->input('name'),
            'prefecture' => $request->input('prefecture'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'access' => $request->input('access'),
            'phoneNumber' => $request->input('phoneNumber'),
            'instagram' => $request->input('instagram'),
            'holiday' => $request->input('holiday'),
            'businessHour' => $request->input('businessHour'),
        ];
        $validator = $this->setValidator($shop);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $image = $request->file('mainImage') ?? '';
        $shop['imageUrl'] = Storage::disk('s3')->put('shop_images', $image, 'public');
        $result = $this->shop->insertShop($shop);
    }

    private function setValidator($shop)
    {
        return Validator::make($shop, [
            'name' => 'required|max:50',
            'prefecture' => 'required|integer',
            'city' => 'max:50',
            'address' => 'max:50',
            'building' => 'max:50',
            'access' => 'max:50',
            'phoneNumber' => 'max:50',
            'instagram' => 'max:50',
            'holiday' => 'max:50',
            'businessHour' => 'max:200',
            'imageUrl' => 'max:100'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
