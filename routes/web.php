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
    return view('index');
});

//Route::get('/', 'UserController@true_index');
Route::get('test', function()
{
	return App\Chat::where('id',1)->first();
});
Auth::routes();
// <<<<<<< aebbb64d3c2f3b138dc567416b5d54b50f2f5d2d
Route::get('/index', 'UserController@index');  // dasboard user
Route::get('createpostingan','PostinganController@create');
Route::post('/submitpostingan','PostinganController@store');  // DIGANTI
Route::get('/postingan/{id}','PostinganController@edit');
Route::post('/update/{id}','PostinganController@update');
Route::get('/home', 'UserController@index');
Route::get('/delpostingan/{id}/pilihan/{token}','PostinganController@delete');

// =======




//Route::get('/home', 'HomeController@index');
// >>>>>>> 64cfd73fbac519d0c8a75a645e0857f08ee56e0f
Route::prefix('admin')->group(function()
{
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/message', 'AdminController@manageMessage')->name('admin.message');
	Route::get('/user', 'AdminController@manageUser')->name('admin.user');
	Route::get('/deleteuser/{id}', 'AdminController@deleteUser')->name('admin.deleteuser');
	Route::get('/delpost/{id}/pilihan/{token}', 'PostinganController@delete');
});


Route::prefix('message')->group(function()
{
	Route::get('/inbox','MessageController@showinbox')->name('inbox');
	Route::get('/newmessage','MessageController@shownewmessage')->name('newmessage');
	Route::post('/newmessage','MessageController@newmessage')->name('newmessage.submit');
	Route::get('/sent','MessageController@showsent')->name('sent');
	Route::get('/showmessage/{id}','MessageController@showmessage')->name('showmessage');
	Route::get('/deletemessage/{id}','MessageController@deletemessage')->name('deletemessage');
});
// secara konsep muncul ketika hit tombol

Route::prefix('pemodal')->group(function() 
{
	Route::prefix('message')->group(function()
	{
		Route::get('/inbox','MessageController@showinboxpemodal')->name('pemodal_inbox');
		Route::get('/newmessage','MessageController@shownewmessagepemodal')->name('pemodal_newmessage');
		Route::post('/newmessage','MessageController@newmessagepemodal')->name('pemodal_newmessage.submit');
		Route::get('/sent','MessageController@showsentpemodal')->name('pemodal_sent');
		Route::get('/showmessage/{id}','MessageController@showmessagepemodal')->name('pemodal_showmessage');
		Route::get('/deletemessage/{id}','MessageController@deletemessagepemodal')->name('pemodal_deletemessage');
	});
	Route::get('/', 'PemodalController@index');
	Route::get('/PakDani', 'PemodalController@PakDani');
	Route::get('/PakDani/laporan', 'PemodalController@laporan')->name('laporanPakDani');
});

Route::prefix('laporan')->group(function()
{
	Route::get('/index','laporanController@index')->name('laporan');
	Route::get('/add','laporanController@add');
	Route::post('/store','laporanController@store');
	Route::get('/edit/{id}','laporanController@edit');
	Route::get('/delete/{id}','laporanController@delete');
	
});

Route::get('/createusaha','PostinganController@create');

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');

Route::get('/startup','UserController@startup');
Route::get('/wirausaha','UserController@wirausaha');
Route::get('/PakDani','UserController@PakDani');
Route::get('/dashboard','Controller@dashboard');
Route::get('/location','AdminController@location');



