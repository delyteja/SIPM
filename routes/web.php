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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function()
{
	return App\Chat::where('id',1)->first();
});
Auth::routes();

Route::get('/profile','UserController@profile');
Route::post('/updateprofile','UserController@update'); 

Route::get('/home', 'HomeController@index');
Route::prefix('admin')->group(function()
{
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');


});
// secara konsep muncul ketika hit tombol

Route::get('/createusaha','PostinganController@create');
Route::any('/submitpostingan','PostinganController@store');

