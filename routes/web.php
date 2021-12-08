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
    return view('/admin/index');
});

Route::prefix('admin')->group(function(){
    Route::match(['get', 'post'], '/','AdminController@admin_index')->name('admin.index');
});


Route::prefix('client')->group(function(){
    Route::get('/index'  ,'ClientController@client_index_get')                          ->name('client.index');
    Route::post('/index'  ,'ClientController@client_index_post');
    Route::get('/create' ,'ClientController@client_create_get')                         ->name('client.create');
    Route::post('/create' ,'ClientController@client_create_post');
    Route::get('/edit'  ,'ClientController@client_edit_get')                            ->name('client.edit');
    Route::post('/edit'  ,'ClientController@client_edit_post');
    Route::get('/handled','ClientController@client_handled_get')                        ->name('client.handled');
    Route::post('/handled','ClientController@client_handled_post');
});

Route::prefix('errors')->group(function(){
    Route::match(['get', 'post'], '/index','ErrorsController@errors_index')       ->name('errors.index');
});

Route::prefix('include')->group(function(){
    Route::match(['get', 'post'], '/include/common','IncludeController@include_common')      ->name('include.common');
    Route::match(['get', 'post'], '/include/head','IncludeController@include_head')          ->name('include.head');
    Route::match(['get', 'post'], '/include/header','IncludeController@include_header')      ->name('include.header');
    Route::match(['get', 'post'], '/include/sidebar','IncludeController@include_sidebar')    ->name('include.sidebar');
});

Route::prefix('order')->group(function(){
    Route::match(['get', 'post'], '/order/index','OrderController@order_index')          ->name('order.index');
    Route::match(['get', 'post'], '/order/cancel','OrderController@order_cancel')        ->name('order.cancel');
    Route::match(['get', 'post'], '/order/create','OrderController@order_create')        ->name('order.create');
    Route::match(['get', 'post'], '/order/history','OrderController@order_history')      ->name('order.history');
});


Route::prefix('setting')->group(function(){
    Route::get('/index'  ,'SettingController@setting_index_get')                                 ->name('setting.index');
    Route::post('/index'  ,'SettingController@setting_index_post');
    Route::get('/create','SettingController@setting_create_get')                                 ->name('setting.create');
    Route::post('/create','SettingController@setting_create_post');
    Route::get('/details','SettingController@setting_details_get')                               ->name('setting.details');
    Route::post('/details','SettingController@setting_details_post');
    Route::get('/account','SettingAccountController@setting_account_get')                        ->name('setting.account');
    Route::post('/account','SettingAccountController@setting_account_post');
    Route::get('/account_create','SettingAccountController@setting_account_create_get')          ->name('setting.account_create');
    Route::post('/account_create','SettingAccountController@setting_account_create_post');
});


// Route::prefix('continuous_transition')->group(function () {
//     Route::get('/',                           'ContinuousTransitionController@index')   ->name('continuous_transition.index');
//     Route::match(['get', 'post'], 'confirm',  'ContinuousTransitionController@confirm') ->name('continuous_transition.confirm');
//     Route::match(['get', 'post'], 'password', 'ContinuousTransitionController@password')->name('continuous_transition.password');
//     Route::post('store',                      'ContinuousTransitionController@store')   ->name('continuous_transition.store');
//     Route::get('complete',                    'ContinuousTransitionController@complete')->name('continuous_transition.complete');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

