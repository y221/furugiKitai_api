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
Route::get('users/{id}', 'UsersController@show');
Route::get('regions', 'RegionsController@index');
Route::get('genders', 'GendersController@index');
Route::get('prefectures', 'PrefecturesController@index');
Route::get('areas', 'AreasController@index');
Route::middleware('auth:sanctum')->group(function(){
    Route::put('shops/{id}', 'ShopsController@update');
    Route::post('shops', 'ShopsController@create');
    Route::post('contacts', 'ContactsController@create');
    Route::post('users/{id}', 'UsersController@update');
});
