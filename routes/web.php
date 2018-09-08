<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () { return redirect('/admin/index'); });
////Route::auth();

//$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
//$this->post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
//$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
// Change Password Routes...
//$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
//$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');



/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/admin/index', 'HomeController@index')->name('admin.index');
    Route::post('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');





    Route::resource('/quotations', 'QuotesController');
    Route::resource('drivers', 'DriversController');
    Route::resource('vehicles', 'VehiclesController');
    Route::get('monitor', 'monitorController@index');
    Route::get('client-lists', 'BillingController@index');
    Route::get('profile', 'BillingController@clientprofile');
    Route::get('invoice', 'BillingController@create');
    Route::resource('users-admin', 'Auth\UsersController');
    Route::post('/user/register', 'Auth\RegisterController@register')->name('user.register.submit');
    Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');




//Route::get('login',function(){
//
//    return view('auth.login');
//});

Route::get('Main', 'Client\HomeController@index')->name('user.index');
Route::get('quote/confirm/{transaction}/{invoice}/{client}', 'Client\HomeController@confirm');
Route::get('about', 'Client\HomeController@showAbout');
Route::get('location', 'Client\HomeController@showLocation');
Route::get('domestic', 'Client\HomeController@showDomestic');
Route::get('import', 'Client\HomeController@showImport');
Route::get('export', 'Client\HomeController@showExport');
Route::get('quote/createStep1', 'Client\QuotesController@createStep1');
Route::post('quote/createStep1', 'Client\QuotesController@postCreateStep1');
Route::post('quote/summary', 'Client\QuotesController@summary');
Route::get('/users/login', 'Auth\LoginController@showLoginForm')->name('user.login');
Route::post('/users/login', 'Auth\LoginController@login')->name('user.login.submit');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');


Route::get('/products', 'Client\ProductController@index');

Route::get('/products/create-step1', 'Client\ProductController@createStep1');
Route::post('/products/create-step1', 'Client\ProductController@postCreateStep1');

Route::get('/products/create-step2', 'Client\ProductController@createStep2');
Route::post('/products/create-step2', 'Client\ProductController@postCreateStep2');

Route::get('/products/create-step3', 'Client\ProductController@createStep3');
Route::post('/products/create-step3', 'Client\ProductController@postCreateStep3');
Route::get('/products/create-step4', 'Client\ProductController@createStep4');
Route::post('/products/store', 'Client\ProductController@store')->name('store');
Route::get('/charges/{id}/{mode}', 'QuotesController@findcharge');
Route::get('/quotations/create-quote/{id}', 'QuotesController@createQuote')->name('quotations.create-quote');
Route::post('/quotations/send-quote/', 'QuotesController@sendQuote')->name('quotations.send-quote');
Route::get('multifileupload', 'HomeController@multifileupload')->name('multifileupload');
Route::post('multifileupload', 'HomeController@store')->name('multifileupload');




//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
