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
Route::get('/', function () {
    return response()->json("welcome");
});
// Route::resource('/',"PostController");
// Route::get('/postses',"PostController@index");
// Route::post('/login',"LoginController");
// Route::post('/register',"RegisterController@created");

// Route::get('/about',"TestingController@about");
// Route::get('/gallary',"TestingController@gallary");
// Route::get('/register',"TestingController@register");
// Route::get('/users',"UsersController@all_users");
// Route::resource('post',"PostController");
// Route::resource('Messages',"MessageController");
// Route::get('profile', 'UsersController@profile');
// Route::post('profile', 'UsersController@update_avatar');
// Route::resource('coment',"CommentController");
// Route::get('/comment/gk','CommentController@index');
// Auth::routes();
// Route::get('/dashboard', 'DashboardController@index');