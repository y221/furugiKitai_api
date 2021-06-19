<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Library\MyFunction;

class ShopsController extends Controller
{
    protected $shop;
    protected $myFunction;

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
     * @return array
     */
    public function index(Request $request)
    {
        $page = $request->page ?? 0;
        $limit = $request->limit ?? 0;
        $shops = $this->shop->getShops((int)$page, (int)$limit);
        return $this->myFunction->changeArrayKeyCamel($shops->toArray());
    }

    /**
     * 登録
     *
     * @param Request $request
     * @return array
     */
    public function create(Request $request)
    {
        $shop = $request->shopData;
        $validator = $this->setValidator($shop);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
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
