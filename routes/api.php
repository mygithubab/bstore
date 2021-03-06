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

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('cors')->group(function (){

// } );
Route::get('/shelves', 'ShelfController@index');
Route::get('/shelves/{shelf}', 'ShelfController@show');
Route::put('/shelves/{shelf}', 'ShelfController@update');
Route::post('/shelves', 'ShelfController@store');
Route::delete('/shelves/{shelf}', 'ShelfController@destroy');

Route::get('/books', 'BookController@index');
Route::get('/books/{book}', 'BookController@show');
Route::get('/search', 'BookController@search');
Route::put('/books/{book}', 'BookController@update');
Route::post('/books', 'BookController@store');
Route::delete('/books/{book}', 'BookController@destroy');


Route::post('/register', 'Auth\RegisterController@register');
// Route::post('/login', 'SessionsController@store');
Route::post('login', 'Auth\LoginController@login');


