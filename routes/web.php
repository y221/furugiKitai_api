<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('shops', 'ShopsController@index');
Route::get('shops/{id}', 'ShopsController@show');
Route::put('shops/{id}', 'ShopsController@update');
Route::post('shops', 'ShopsController@create');
Route::get('regions', 'RegionsController@index');
Route::get('prefectures', 'PrefecturesController@index');
Route::get('genders', 'GendersController@index');
Route::post('contacts', 'ContactsController@create');
Route::post('users', 'UsersController@create');
// Route::put('users/{id}', 'UsersController@update');