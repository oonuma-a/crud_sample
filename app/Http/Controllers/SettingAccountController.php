<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingAccountController extends Controller
{
    public function setting_account(Request $request){
        $accountList = Users::all();
        return view('setting.account', compact('accountList'));
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
    }
    public function setting_account_create(Request $request){
        //新規アカウント登録時処理
        $newUserInfo = $request->all();
        unset($newUserInfo['_token']);
        $insertData = new Users;
        $insertData->fill($newUserInfo)->save();
        $accountList = Users::all();
        return view('setting.account',compact('accountList'));
        return view('setting.account_create');
    }
}
