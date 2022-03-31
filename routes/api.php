<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('shops', 'ShopsController@index');
Route::get('shops/{id}', 'ShopsController@show');
Route::get('shops/edit/{id}', 'ShopsController@edit');
Route::get('users/{id}', 'UsersController@show');
Route::get('regions', 'RegionsController@index');
Route::get('genders', 'GendersController@index');
Route::get('prefectures', 'PrefecturesController@index');
Route::get('areas', 'AreasController@index');

// 検索条件作成用データ
Route::get('conditions/prefectures', 'ConditionsController@prefectures');
Route::get('conditions/areas', 'ConditionsController@areas');

Route::middleware('auth:sanctum')->group(function(){
    Route::put('shops/{id}', 'ShopsController@update');
    Route::post('shops', 'ShopsController@create');
    Route::post('shop/likes', 'ShopLikesController@toggle');
    Route::post('shops', 'ShopsController@create');
    Route::post('contacts', 'ContactsController@create');
    Route::post('users/{id}', 'UsersController@update');
    Route::get('users/shop/like', 'UsersController@shopLike');
});
