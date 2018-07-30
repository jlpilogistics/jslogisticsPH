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

Route::get('/', function () { return redirect('/admin/index'); });
//Route::auth();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
// Change Password Routes...
//$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
//$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/index', 'HomeController@index');
    Route::resource('/quotations', 'QuotesController');
    Route::resource('drivers', 'DriversController');
    Route::resource('vehicles', 'VehiclesController');
});




//Route::get('login',function(){
//
//    return view('auth.login');
//});

Route::get('Main', 'Client\HomeController@index');
Route::get('about', 'Client\HomeController@showAbout');
Route::get('location', 'Client\HomeController@showLocation');
Route::get('domestic', 'Client\HomeController@showDomestic');
Route::get('import', 'Client\HomeController@showImport');
Route::get('export', 'Client\HomeController@showExport');
Route::resource('quote', 'Client\QuotesController');


