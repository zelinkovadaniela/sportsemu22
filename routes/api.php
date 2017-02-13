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

$api = app('Dingo\Api\Routing\Router');

Route::get('/', function() {
    return view('welcome');
});

$api->version('v1', function($api){
    $api->get('profile', 'App\Http\Controllers\ApiController@profile');
      $api->post('profile', 'App\Http\Controllers\ApiController@profile_post');
    $api->get('listings', 'App\Http\Controllers\ApiController@listings');
    $api->get('bookings', 'App\Http\Controllers\ApiController@bookings');
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


