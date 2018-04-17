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


Route::group(['prefix' => 'v1/','middleware' => ['cors']], function () {

    Route::group(['namespace' =>'\Auth'], function () {
        Route::post('auth/login', 'LoginController@login');
    });
    
    Route::get('/post','PostsController@index');
    Route::get('/post/{id}','PostsController@show');
    
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::post('/post','PostsController@store');
        Route::put('/post/{id}','PostsController@update');
        Route::delete('/post/{id}','PostsController@destroy');
   });
});



