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
    Route::match(['get', 'post'], '/','MainController@admin_index')->name('admin.index');
});


Route::prefix('client')->group(function(){
    Route::match(['get', 'post'], '/index'  ,'MainController@client_index')     ->name('client.index');
    Route::match(['get', 'post'], '/create' ,'MainController@client_create')    ->name('client.create');
    Route::match(['get', 'post'], '/edit'   ,'MainController@client_edit')      ->name('client.edit');
    Route::match(['get', 'post'], '/handled','MainController@client_handled')   ->name('client.handled');
});

Route::prefix('errors')->group(function(){
    Route::match(['get', 'post'], '/index','MainController@errors_index')       ->name('errors.index');
});

Route::prefix('include')->group(function(){
    Route::match(['get', 'post'], '/include/common','MainController@include_common')      ->name('include.common');
    Route::match(['get', 'post'], '/include/head','MainController@include_head')          ->name('include.head');
    Route::match(['get', 'post'], '/include/header','MainController@include_header')      ->name('include.header');
    Route::match(['get', 'post'], '/include/sidebar','MainController@include_sidebar')    ->name('include.sidebar');
});

Route::prefix('order')->group(function(){
    Route::match(['get', 'post'], '/order/index','MainController@order_index')          ->name('order.index');
    Route::match(['get', 'post'], '/order/cancel','MainController@order_cancel')        ->name('order.cancel');
    Route::match(['get', 'post'], '/order/create','MainController@order_create')        ->name('order.create');
    Route::match(['get', 'post'], '/order/history','MainController@order_history')      ->name('order.history');
});


Route::prefix('setting')->group(function(){
    Route::match(['get', 'post'], '/index'  ,'MainController@setting_index')                     ->name('setting.index');
    Route::get('/account','MainController@setting_account')                                      ->name('setting.account');
    Route::post('/account','MainController@setting_account_post')                                ->name('setting.account_post');
    Route::match(['get', 'post'], '/account_create','MainController@setting_account_create')     ->name('setting.account_create');
    Route::match(['get', 'post'], '/create','MainController@setting_create')                     ->name('setting.create');
    Route::match(['get', 'post'], '/delete','MainController@setting_delete')                     ->name('setting.delete');
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


