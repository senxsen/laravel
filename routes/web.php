<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {

//    return dd(Session::all());
//      return view('welcome');
//});//use function to call welcome or you can use another way as below
Route::get('/', "User\AuthController@login")->name('login');
Route::post('login', 'User\AuthController@loginPost')->name('login_post');
Route::get('register', "User\AuthController@register")->name('register');
Route::post('register', 'User\AuthController@registerPost')->name('register_post');
Route::get('/dashboard', 'Auth\DashboardController@dashboard')->name('dashboard');

Route::get('/realname','Auth\DashboardController@realname')->name('realname');
Route::get('/editpassword','Auth\DashboardController@editpassword')->name('editpassword');
Route::get('/editsecondpassword','Auth\DashboardController@editsecondpassword')->name('editsecondpassword');
Route::get('/editmemberinfo','Auth\DashboardController@editmemberinfo')->name('editmemberinfo');


Route::get('/pointexchange','Auth\DashboardController@pointexchange')->name('pointexchange');
Route::get('/pointtransfer','Auth\DashboardController@pointtransfer')->name('pointtransfer');
Route::get('/pointpurchase','Auth\DashboardController@pointpurchase')->name('pointpurchase');

Route::get('/sponsorlist','Auth\DashboardController@sponsorlist')->name('sponsorlist');
Route::get('/listmap','Auth\DashboardController@listmap')->name('listmap');

//// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout');
//
//// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm');
//Route::post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::group(['middleware' => 'auth.user'], function () {
//    Route::get('/dashboard', 'Auth\DashboardController@dashboard')->name('dashboard');
//});