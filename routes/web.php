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
    Route::post('/ad    min/logout','Auth\AdminLoginController@logout')->name('admin.logout');


    Route::resource('duties', 'tarffRateController');
    Route::resource('/quotations', 'QuotesController');
    Route::resource('drivers', 'DriversController');
    Route::resource('vehicles', 'VehiclesController');
    Route::get('monitor', 'monitorController@index');
    Route::get('client-lists', 'BillingController@index');
    Route::get('invoice', 'BillingController@create');
    Route::resource('users-admin', 'Auth\UsersController');
    Route::get('admin-registration', 'RegTrial@index');//New
    Route::post('admin-registration', 'RegTrial@register');//New
    Route::get('/users/signup', 'Auth\RegisterController@showSignup')->name('user.register');
    Route::post('/users/signup', 'Auth\RegisterController@register')->name('user.register.submit');
    Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');


//Route::get('login',function(){
//
//    return view('auth.login');
//});

Route::get('Main', 'Client\HomeController@index')->name('user.index');
Route::get('quote/confirm/{transaction}/{invoice}/{client}', 'Client\HomeController@confirm')->name('confirm.quote');
Route::get('about', 'Client\HomeController@showAbout');
Route::get('location', 'Client\HomeController@showLocation');
Route::get('domestic', 'Client\HomeController@showDomestic');
Route::get('import', 'Client\HomeController@showImport');
Route::get('export', 'Client\HomeController@showExport');
Route::get('imports', 'CategoryController@import');
Route::get('exports', 'CategoryController@export');
Route::get('domestics', 'CategoryController@domestic');
Route::get('report-imports', 'CategoryController@Reportimport');
Route::get('report-exports', 'CategoryController@Reportexport');
Route::get('report-domestics', 'CategoryController@Reportdomestic');
Route::get('Fleet', 'CategoryController@create');
Route::get('approved', 'QuotesController@approved');
Route::get('monitor-export', 'monitorController@index');
Route::get('monitor-import', 'monitorController@importMonitor');
Route::get('monitor-domestic', 'monitorController@domesticMonitor');
Route::get('client-lists', 'BillingController@index');
Route::get('profile', 'BillingController@clientprofile');
Route::get('invoice', 'BillingController@create');
Route::get('search', 'BillingController@search');
Route::get('/fuel', 'FuelMaintenanceController@index');
Route::post('/fuel', 'FuelMaintenanceController@addFuel');
Route::post('/maintenance', 'FuelMaintenanceController@addMain');
Route::get('/maintenance', 'FuelMaintenanceController@main');
Route::get('/haulage-import', 'HaulageController@index');
Route::get('/haulage-export', 'HaulageController@haulageExport');
Route::get('/sched-import', 'HaulageController@show');
Route::get('quote/createStep1', 'Client\QuotesController@createStep1');
Route::post('quote/createStep1', 'Client\QuotesController@postCreateStep1');
Route::post('quote/summary', 'Client\QuotesController@summary');
Route::get('/users/login', 'Auth\LoginController@showLoginForm')->name('user.login');
Route::post('/users/login', 'Auth\LoginController@login')->name('user.login.submit');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/shipment/show/{id}/{transact}', 'QuotesController@shipment')->name('shipment.index');
Route::get('driver/get/{id}', 'HaulageController@getDriver');
Route::post('haulage/assign/{id}/{shiptypes}', 'HaulageController@assign')->name('haulage.assign');


Route::get('client-lists', 'BillingController@index');
Route::get('export-lists', 'BillingController@billExport');
Route::get('generate-import/{id}', 'BillingController@clientprofile')->name('import-gen');
Route::post('generate', 'BillingController@generate');
Route::get('Reports', 'BillingController@generateReport');
Route::get('generate-export', 'BillingController@clientprofileExport');
Route::get('generate-domestic', 'BillingController@clientprofileDomestic');
Route::get('taxes', 'BillingController@taxes');

Route::get('/products', 'Client\ProductController@index');

Route::get('/products/create-step1', 'Client\ProductController@createStep1');
Route::post('/products/create-step1', 'Client\ProductController@postCreateStep1');

Route::get('/products/create-step2', 'Client\ProductController@createStep2');
Route::post('/products/create-step2', 'Client\ProductController@postCreateStep2');

Route::get('/products/create-step3', 'Client\ProductController@createStep3');
Route::post('/products/create-step3', 'Client\ProductController@postCreateStep3');
Route::get('/products/create-step4', 'Client\ProductController@createStep4');
Route::post('/products/store', 'Client\ProductController@store')->name('store');
Route::get('/quotations/create-quote/{id}', 'QuotesController@createQuote')->name('quotations.create-quote');
Route::post('/quotations/send/quote', 'QuotesController@sendQuote')->name('quotations.send-quote');
Route::get('/multifileupload', 'HomeController@multifileupload')->name('multifileupload');
Route::post('/multifileupload', 'HomeController@store')->name('multifileupload');
Route::get('client-account/{client}', 'Client\HomeController@account')->name('account');//New
Route::get('client-status/{client}', 'Client\HomeController@clientStatus')->name('status');//New
Route::get('/client-request', 'Client\ProductController@createStep1');//New
Route::post('/client-request', 'Client\ProductController@postCreateStep1');//New
Route::get('client-bill', 'Client\HomeController@receivedBill');//New
Route::get('/quote-summary', 'Client\ProductController@createStep4');//New
Route::post('/image-view','Client\HomeController@finish');
Route::post('/image-upload/{id}','Client\HomeController@imageUpload');
Route::get('/charges/Export/{id}/{mode}', 'QuotesController@findcharge');
Route::get('/charges/Import/{id}/{mode}', 'QuotesController@findImport');
Route::get('/send/sms/notication/{id}', 'QuotesController@sendSms')->name('quotations.send-sms');
Route::post('/status/update', 'HaulageController@status');
Route::get('/inventory/goods', 'MonitorController@viewInventory');





//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shipment', function (){
    return view('admin.shipment.index');
})->middleware('auth:admin');
