<?php

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

use App\Http\Resources\User as UserResource;
use App\User;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function () {
    return UserResource::collection(User::all());
});

Route::get('/user/{id}', function($id) { 
    return UserResource::make(User::find($id));
});

Route::post('/user', function(Request $request) {
    return UserResource::make( User::create( $request->all() ));
} );

