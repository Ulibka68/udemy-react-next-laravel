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

// заготовка от Laravel
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


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

/*
Route::get('userall','UserController@index');
Route::get('users1/{id}','UserController@show');
Route::post('users1','UserController@store');
Route::put('users1/{id}','UserController@update');
Route::delete('users1/{id}','UserController@destroy');

Все эти вызовы  заменяет один вызов apiResource
*/

Route::apiResource('users1', 'UserController');
