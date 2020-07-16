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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'Sampah'], function () {

    Route::group(['prefix' => 'sampah'], function () {
        Route::get('', 'SampahController@index');
        Route::post('input-sampah','SampahController@store');
        Route::delete('{sampah:id}/delete', 'SampahController@destroy');
    });

    Route::group(['prefix' => 'kategori'], function () {
        Route::get('', 'KategoriSampahController@index');
    });
});
