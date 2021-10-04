<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingAccountController extends Controller
{
    public function setting_account(Request $request){
        if(isset($request->search_authority)){
            $items = DB::select('select * from user  where authority=:authority,display_name=:display_name,name=:name,password,user_status');
        }else{
            $items = DB::select('select * from user');
        }
        return view('setting.account', compact('items'));
    }
    public function setting_account_post(Request $request){
        
//インサート文はコントローラーに書いてはいけない

        
        //検索アカウント一覧表示処理
        $accountSearch = Users::query();
        $search_authority = $request->search_authority;
        $search_display_name = $request->search_display_name;
        $search_name = $request->search_name;
        $search_user_status = $request->search_user_status;
        if(!empty($search_authority)){
            $accountSearch->where('authority','like','%'.$search_authority.'%');
        }
        if(!empty($search_display_name)){
            $accountSearch->where('display_name','like','%'.$search_display_name.'%');
        }
        if(!empty($search_name)){
            $accountSearch->where('name','like','%'.$search_name.'%');
        }
        if(!empty($search_user_status)){
            $accountSearch->where('user_status','like','%'.$search_user_status.'%');
        }
        $search_data = $accountSearch->get();

        //新規アカウント登録時処理
        $now = Carbon::now()->format('Y-m-d H:i:s.v');
        $getUserInfo =  [
            'user_id'       =>$request->user_id,
            'authority'     =>$request->authority,
            'display_name'  =>$request->display_name,
            'name'          =>$request->name,
            'password'      =>Hash::make($request->password),
            'user_status_display'   =>$request->upid,
            'inserted_at'   =>$now
        ];   
        DB::insert('insert into user(user_id,authority,display_name,name,password,user_status,inserted_at) values(:user_id,:authority,:display_name,:name,:password,:user_status,:inserted_at)',$getUserInfo);
 
        //初期アカウント一覧表示処理
        $items = DB::select('select * from user');
        return view('setting.account',compact('items','search_data'));
    }
    public function setting_account_create(Request $request){
        return view('setting.account_create');
    }
}
