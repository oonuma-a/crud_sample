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
    Route::post('/client/index'  ,'MainController@client_index')     ->name('client.index');
    Route::post('/client/create' ,'MainController@client_create')    ->name('client.create');
    Route::post('/client/edit'   ,'MainController@client_edit')      ->name('client.edit');
    Route::post('/client/handled','MainController@client_handled')   ->name('client.handled');
});

Route::prefix('errors')->group(function(){
    Route::post('/errors/index','MainController@errors_index')            ->name('errors.index');
});

Route::prefix('include')->group(function(){
    Route::post('/include/common','MainController@include_common')            ->name('include.common');
    Route::post('/include/head','MainController@include_head')              ->name('include.head');
    Route::post('/include/header','MainController@include_header')            ->name('include.header');
    Route::post('/include/sidebar','MainController@include_sidebar')           ->name('include.sidebar');
});

Route::prefix('order')->group(function(){
    Route::post('/order/index','MainController@order_index')      ->name('order.index');
    Route::post('/order/cancel','MainController@order_cancel')     ->name('order.cancel');
    Route::post('/order/create','MainController@order_create')     ->name('order.create');
    Route::post('/order/history','MainController@order_history')    ->name('order.history');
});

Route::prefix('settings')->group(function(){
    Route::post('/settings/account','MainController@settings_account')           ->name('settings.account');
    Route::post('/settings/account_create','MainController@settings_account_create')    ->name('settings.account_create');
    Route::post('/settings/create','MainController@settings_create')            ->name('settings.create');
    Route::post('/settings/delete','MainController@settings_delete')            ->name('settings.delete');
    Route::post('/settings/index','MainController@settings_index')             ->name('settings.index');
});

// Route::prefix('continuous_transition')->group(function () {
//     Route::get('/',                           'ContinuousTransitionController@index')   ->name('continuous_transition.index');
//     Route::match(['get', 'post'], 'confirm',  'ContinuousTransitionController@confirm') ->name('continuous_transition.confirm');
//     Route::match(['get', 'post'], 'password', 'ContinuousTransitionController@password')->name('continuous_transition.password');
//     Route::post('store',                      'ContinuousTransitionController@store')   ->name('continuous_transition.store');
//     Route::get('complete',                    'ContinuousTransitionController@complete')->name('continuous_transition.complete');
// });