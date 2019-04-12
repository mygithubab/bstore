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

Route::get('/shelves', 'ShelfController@index');
Route::get('/shelves/{shelf}', 'ShelfController@show');
Route::put('/shelves/{shelf}', 'ShelfController@update');
Route::post('/shelves', 'ShelfController@store');
Route::delete('/shelves/{shelf}', 'ShelfController@destroy');
