<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('farmer', 'FarmerController@index');
Route::get('farmer/{id}', 'FarmerController@show');
Route::post('farmer', 'FarmerController@store');
Route::get('farm', 'FarmController@index');
Route::get('farm/{id}', 'FarmController@show');
Route::post('farm', 'FarmController@store');
Route::get('agricultural', 'AgriculturalController@index');
Route::get('agricultural/{id}', 'AgriculturalController@show');
Route::post('agricultural', 'AgriculturalController@store');
Route::get('parnership-agricultural', 'ParnershipAgriculturalController@index');
Route::get('agricultural/{agricultural_id}/parnership', 'ParnershipAgriculturalController@per_agricultural');
Route::get('parnership-agricultural/{id}', 'ParnershipAgriculturalController@show');
Route::post('parnership-agricultural', 'ParnershipAgriculturalController@store');
