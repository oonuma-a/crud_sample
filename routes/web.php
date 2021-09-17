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


///動作テスト成功時のみ一覧追加
// DBクエリを使用してhtmlのフォーム入力データをDBに追加する。
// テーブル（user） データ（name:jiro mail: a@a age 3)
// ---
// - HTML -
// <form action="{{form.index}}" method="post">
//     <input type="text" name="name">
//     <input type="text" name="mail">
//     <input type="text" name="age">
// </form>

// - controller -
// public function add(Request $request){
//     return view('form.add');
// }
// public function create(Request $request){ //送信ボタンを押した時に動作する
//     $param = [
//         "name" => $request -> name,
//         "mail" => $request -> mail,
//         "age"  => $request -> age,
//     ];
//     //プレースホルダ―で保管先を作成
//     //redirect で移動させることができる。
//     DB::insert('insert into user (name,mail,age)　values (:name, :age : age)', $param);
//     return redirect('/form');
// }
// - route -
//     Route::get('form/add', 'MainController@add');
//     Route::post('form/add', 'MainController@create');
// ///
// DBにデータをinsertする
// table: user(id(not null, autoincrement),name(not null),mail,age)
// date: name=taro, mail=a@a
// ---
// insert into user (name,mail) values('taro', 'a@a');
// insert into user values(null,'aaa',0,'dname','name','pass',0,date(CURRENT_TIMESTAMP),null,null);

// もしくはテーブル内に項目を指定して選択項目のみ挿入する
// insert into user (user_id,authority,display_name,name,password,user_status,inserted_at) values('aaa',0,'dname','name','pass',0,date(CURRENT_TIMESTAMP));
// ///
// SQLでテーブルに現在時刻を挿入する
// ---
// insert ... GETDATE();
// SQLiteは　date(CURRENT_TIMESTAMP)
// ///
// フォームデータ入力画面を設定する（HTML）
// ---
// <form action="index">
//     @csrf
//     <input type="text" name="受信先で使用する名前を設定">
// </form>

