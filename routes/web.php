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
    Route::get('/')->name('admin.index');
});

Route::prefix('client')->group(function(){
    Route::get('/client/create')    ->name('client.create');
    Route::get('/client/index')     ->name('client.index');
    Route::get('/client/edit')      ->name('client.edit');
    Route::get('/client/handled')   ->name('client.handled');
});

Route::prefix('errors')->group(function(){
    Route::get('/errors/index')            ->name('errors.index');
});

Route::prefix('include')->group(function(){
    Route::get('/include/common')            ->name('include.common');
    Route::get('/include/head')              ->name('include.head');
    Route::get('/include/header')            ->name('include.header');
    Route::get('/include/sidebar')           ->name('include.sidebar');
});

Route::prefix('order')->group(function(){
    Route::get('/order/cancel')     ->name('order.index');
    Route::get('/order/create')     ->name('order.index');
    Route::get('/order/history')    ->name('order.index');
    Route::get('/order/index')      ->name('order.index');
});

Route::prefix('settings')->group(function(){
    Route::get('/settings/account')           ->name('settings.index');
    Route::get('/settings/account_create')    ->name('settings.index');
    Route::get('/settings/create')            ->name('settings.index');
    Route::get('/settings/delete')            ->name('settings.index');
    Route::get('/settings/index')             ->name('settings.index');
});

// Route::prefix('continuous_transition')->group(function () {
//     Route::get('/',                           'ContinuousTransitionController@index')   ->name('continuous_transition.index');
//     Route::match(['get', 'post'], 'confirm',  'ContinuousTransitionController@confirm') ->name('continuous_transition.confirm');
//     Route::match(['get', 'post'], 'password', 'ContinuousTransitionController@password')->name('continuous_transition.password');
//     Route::post('store',                      'ContinuousTransitionController@store')   ->name('continuous_transition.store');
//     Route::get('complete',                    'ContinuousTransitionController@complete')->name('continuous_transition.complete');
// });