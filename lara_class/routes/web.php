<?php

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
// Route::get('page/{name?}/{id?}', function ($name="Name",$id="34") {
//     // return view('welcome');
//     return "<h1>$name</h1>"." "."<h1>$id</h1>";
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/',"PostController");
Route::get('/about',"TestingController@about");
Route::get('/gallary',"TestingController@gallary");
Route::get('/register',"TestingController@register");
Route::get('/users',"UsersController@all_users");
Route::resource('post',"PostController");
Route::resource('Messages',"MessageController");
Route::get('profile', 'UsersController@profile');
Route::post('profile', 'UsersController@update_avatar');
Route::resource('coment',"CommentController");
Route::get('/comment/gk','CommentController@index');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

