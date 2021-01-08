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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/createtags', 'ApiController@createTags');
Route::post('/autocomplete', 'ApiController@autocomplete');

Route::middleware('auth:api')->group(function (){
    Route::post('/messagesend', 'BuddyController@sendMessage')->name('messagesend');
});
