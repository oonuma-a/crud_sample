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



//コントローラーを分ける settingcontroller
//ページごとに分けて作成する。settingでもアカウント、商品と分ける。
//インサート文はコントローラーに書いてはいけない

//https://qiita.com/nunulk/items/6ed409345efb6ee4f660
//リクエストのデータを処理する関数は FormRequest に書く
// レスポンスのデータを処理する関数は ViewModel あるいは Resource に書く
// シングルアクションコントローラーにする
// 複数の Controller に分離する
// UseCaseInteractor を使う


//Eloquentを使用してバリデーション付きのモデルを作成し、バリデーション付きのデータを登録したい
//(idは自動採番、データすべてにrequired)
//---
// Route::get('/',                                     'App\Http\Controllers\HomeController@display')        ->name('display');
// Route::post('/',                                     'App\Http\Controllers\HomeController@input')        ->name('input');

// c
// public function display(Request $request){
//     return view('/form/input');
// }

// v
// @if(count($errors) > 0)
// <ul>
//     @foreach($errors->all() as $error)
//         <li>{{$error}}</li>
//     @endforeach
// </ul>
// @endif	
            
// <form name="sentMessage" id="applicationForm" class="form-horizontal" action="{{route('display')}}" method="post">
// @csrf
// name:<input type="text" name="name" value="{{old('name')}}">
// mail:<input type="text" mail="mail" value="{{old('mail')}}">
// age: <input type="number" name="age" value="{{old('age')}}">
// <input type="submit" value="send">
// </form>

// c
// public function input(Request $request){
//     $this->validate($request,Test::$rules);
//     $tableData = new Test;
//     $form = $request->all();
//     unset($form['_token']);
//     $tableData->fill($form)->save();
//     return view('/form/input');
// }
//validate()に引数を指定し$requestの内容をTest::$rulesを使用して判定している。
//$tableData はインスタンスを作成している。
//$form は保管する値を用意している。
//$tableDataでフォームのidを検索し、取得した値を
//save()で保存している。
//インスタンスを作成し、値を設定してsaveする流れは基本となっていて同じ。

// m
//     protected $guarded = array('id');
//     public $timestamps = false;
//     public static $rules = array(
        
//         'name' => 'required',
//         'mail' => 'email',
//         'age' => 'integer|min:0|max:150'
//     );
//guardは入力保護の設定
// 送信された値を元としてインスタンスを作成するが、
// モデルでは必要項目すべての値が揃って初めて保存ができる。
// $guardは自動でIDを割り振るため、モデル作成時にidをが不要となり、
// nullでもエラーが起こらなくなる
