<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $shopData = $request->shopData;
        $validator = Validator::make($shopData, [
            'name' => 'required|max:50',
            'prefecture' => 'integer',
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
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 400);
        }
        $shop = new Shop;
        $shop->name = $shopData['name'];
        $shop->prefecture_id = $shopData['prefecture'] ?? '';
        $shop->city = $shopData['city'] ?? '';
        $shop->address = $shopData['address'] ?? '';
        $shop->building = $shopData['building'] ?? '';
        $shop->access = $shopData['access'] ?? '';
        $shop->phone_number = $shopData['phoneNumber'] ?? '';
        $shop->instagram_url = $shopData['instagram'] ?? '';
        $shop->holiday = $shopData['holiday'] ?? '';
        $shop->business_hour = $shopData['businessHour'] ?? '';
        $shop->image_url = '';//$shopData['imageUrl'];
        $shop->created_at = date('Y-m-d H:i:s');
        $shop->created_user_id = 0;
        $result = $shop->save();

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
