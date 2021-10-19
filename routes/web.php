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
    Route::match(['get', 'post'], '/index'  ,'ClientController@client_index')     ->name('client.index');
    Route::match(['get', 'post'], '/create' ,'ClientController@client_create')    ->name('client.create');
    Route::match(['get', 'post'], '/edit'   ,'ClientController@client_edit')      ->name('client.edit');
    Route::match(['get', 'post'], '/handled','ClientController@client_handled')   ->name('client.handled');
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
    Route::post('/index'  ,'SettingController@setting_index_post')                               ->name('setting.index_post');
    Route::get('/create','SettingController@setting_create_get')                                 ->name('setting.create');
    Route::post('/create','SettingController@setting_create_post')                               ->name('setting.create_post');
    Route::get('/details','SettingController@setting_details_get')                               ->name('setting.details');
    Route::post('/details','SettingController@setting_details_post')                             ->name('setting.details');

    Route::prefix('setting')->group(function(){
        Route::get('/account','SettingAccountController@setting_account')                        ->name('setting.account');
        Route::post('/account','SettingAccountController@setting_account_post')                  ->name('setting.account_post');
        Route::get('/account_create','SettingAccountController@setting_account_create')          ->name('setting.account_create');
        Route::post('/account_create','SettingAccountController@setting_account_create_post')    ->name('setting.account_create_post');
    });
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


// CREATE TABLE "user" (
// 	"id"	INTEGER NOT NULL UNIQUE,
// 	"user_id"	string(30) NOT NULL,
// 	"authority"	tinyint(2) NOT NULL,
// 	"display_name"	string(100) NOT NULL,
// 	"name"	string(200) NOT NULL,
// 	"password"	text NOT NULL,
// 	"user_status"	tinyint(2) NOT NULL DEFAULT ('1'),
// 	"inserted_at"	datetime NOT NULL,
// 	"updated_at"	 DEFAULT (null),
// 	"deleted_at"	 DEFAULT (null),
// 	PRIMARY KEY("id" AUTOINCREMENT)
// );


