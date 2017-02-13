<?php
use Illuminate\Http\Request;
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

// ManageListings Routes
Route::post('imageupload/{listing_id}', 'ImageUploadController@upload')->name('imageupload.upload');
Route::resource('imageupload', 'ImageUploadController');

Route::resource('managelistings', 'ManageListingsController', ['only' => [
    'index', 'create', 'store', 'edit', 'update', 'show', 'destroy'
]]);

// Payment Routes
Route::get('/checkout', 'PaymentController@index' );
// Listing Routes
Route::get('listings',['as' => 'listings', 'uses' => 'SearchResultsController@index'] );
Route::get('listings/{slug}',['as' => 'listings.slug', 'uses' => 'SearchResultsController@showBySlug']);
Route::get('search', ['as' => 'search', 'uses' => 'SearchResultsController@search']);
// Booking Routes
Route::resource('/booking', 'BookingController', ['only' => [
    'index', 'create', 'store', 'edit', 'update', 'show', 'destroy'
]]);
//Route::get('/booking/booked', 'BookingController@booked' );
//Route::get('/booking#{id}', 'BookingController@index' );
// Profile Routes
Route::resource('profile', 'UserController' );
Route::post('profile', 'UserController@update_avatar' );
Route::put('profile', 'UserController@update' );
// Test Route
Route::get('/test', function () {
    return view('tests.test');
});
// Test Profile Route
Route::get('/test2', function () {
    return view('tests.test2');
});
Route::get('/test3', function () {
    return view('tests.test3');
});
// Route::get('profile/{name}', ['as' => 'profile.name', 'uses' => 'UserController@index'] );

// Route::post('profile/update', 'UserController@update');


// Route::get('images/{filename}', function ($filename)
// {
//     $path = storage_path() . '/app/avatars/' . $filename;

//     if(!File::exists($path)) abort(404);

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });
    //   $file = request()->file('avatar')->store('local');

    // $ext = $file->guessClientExtension();

    // $file->StoreAs('avatars/' . auth()->id(). "avatar.($ext)");

    // return back();
// });
Route::post('checkout/payment', 'CheckoutController@pay' );
Route::resource('/checkout', 'CheckoutController', ['only' => [
    'index', 'create', 'store', 'edit', 'update', 'show', 'destroy'
]]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::auth();
