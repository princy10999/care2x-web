<?php

use Illuminate\Support\Facades\Route;

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
    return view('front-page.index');
});

Route::view('list', 'list');
Route::view('test', 'test');
Route::view('blog', 'front-page.blog');
Route::view('about', 'front-page.about');
Route::view('service', 'front-page.service');
Route::view('order-tracking', 'front-page.order_tracking');
Route::view('order-track', 'front-page.order_track');  //page2

Route::view('contact', 'front-page.contact');
Route::view('get-appointment', 'front-page.get_appointment');
Route::view('claim-warranty', 'front-page.claim_warranty');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('home');

//order
Route::get('order', 'App\Http\Controllers\OrderController@index')->name('order.index');
Route::get('order/create', 'App\Http\Controllers\OrderController@create')->name('order.create');
Route::get('order/store', 'App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('order/edit', 'App\Http\Controllers\OrderController@edit')->name('order.edit');
Route::post('order/update', 'App\Http\Controllers\OrderController@update')->name('order.update');
// Route::get('order/delete','App\Http\Controllers\OrderController@delete')->name('order.delete');

//brand
Route::get('brand', 'App\Http\Controllers\DeviceBrandController@index')->name('brand.index');
Route::get('brand/create', 'App\Http\Controllers\DeviceBrandController@create')->name('brand.create');
Route::post('brand/store', 'App\Http\Controllers\DeviceBrandController@store')->name('brand.store');
Route::get('brand/edit/{id}', 'App\Http\Controllers\DeviceBrandController@edit')->name('brand.edit');
Route::post('brand/update', 'App\Http\Controllers\DeviceBrandController@update')->name('brand.update');
// Route::get('brand/delete','App\Http\Controllers\DeviceBrandController@delete')->name('brand.delete');

//model
Route::get('device-model', 'App\Http\Controllers\DeviceModelController@index')->name('deviceModel.index');
Route::get('device-model/create', 'App\Http\Controllers\DeviceModelController@create')->name('deviceModel.create');

//device issue category
Route::get('device-issue-category', 'App\Http\Controllers\DeviceIssueCategoryController@index')->name('deviceIssueCategory.index');

//city
Route::get('city', 'App\Http\Controllers\CityController@index')->name('city.index');
Route::get('city/create', 'App\Http\Controllers\CityController@create')->name('city.create');
Route::post('city/store', 'App\Http\Controllers\CityController@store')->name('city.store');
Route::get('city/edit/{id}', 'App\Http\Controllers\CityController@edit')->name('city.edit');
Route::post('city/update', 'App\Http\Controllers\CityController@update')->name('city.update');
Route::get('city/delete/{id}', 'App\Http\Controllers\CityController@delete')->name('city.delete');

//contact us
Route::get('contact-us', 'App\Http\Controllers\ContactUsController@index')->name('contactUs.index');
Route::get('contact-us/delete/{id}', 'App\Http\Controllers\ContactUsController@delete')->name('contactUs.delete');

//user
Route::get('user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::post('user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::post('user/delete', 'App\Http\Controllers\UserController@delete')->name('user.delete');


// ======================================
//order status
Route::get('order-status', 'App\Http\Controllers\OrderStatusController@index')->name('orderStatus.index');
Route::post('order-status/store', 'App\Http\Controllers\OrderStatusController@store')->name('orderStatus.store');
Route::get('order-status/edit/{id}', 'App\Http\Controllers\OrderStatusController@edit')->name('orderStatus.edit');
Route::post('order-status/update', 'App\Http\Controllers\OrderStatusController@update')->name('orderStatus.update');
Route::get('order-status/delete/{id}', 'App\Http\Controllers\OrderStatusController@delete')->name('orderStatus.delete');

//order status history
Route::get('order-status-history', 'App\Http\Controllers\OrderStatusHistoryController@index')->name('orderStatusHistory.index');
Route::get('order-status-history\delete\{id}', 'App\Http\Controllers\OrderStatusHistoryController@delete')->name('orderStatusHistory.delete');
