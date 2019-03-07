<?php

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

Route::prefix('liveimage')->group(function () {
    Route::post('/store', 'ApiController@store')->name('store');
    Route::get('/', 'ApiController@index')->name('index');
});