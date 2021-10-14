<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class SettingAccountController extends Controller
{
    public function setting_account(Request $request){
        $accountList = Users::all();
        return view('setting.account', compact('accountList'));
    }
    public function setting_account_post(Request $request){  
        //検索アカウント一覧表示処理
        $accountSearch = Users::query();
        $searchAuthority = $request->searchAuthority;
        $searchDisplayName = $request->searchDisplayName;
        $searchName = $request->searchName;
        $searchUserStatus = $request->searchUserStatus;
        if(!empty($searchAuthority)){
            $accountSearch->where('authority','like','%'.$searchAuthority.'%');
        }
        if(!empty($searchDisplayName)){
            $accountSearch->where('display_name','like','%'.$searchDisplayName.'%');
        }
        if(!empty($searchName)){
            $accountSearch->where('name','like','%'.$searchName.'%');
        }
        if(!empty($searchUserStatus)){
            $accountSearch->where('user_status','like','%'.$searchUserStatus.'%');
        }
        $searchData = $accountSearch->get();
        return view('setting.account', compact('searchData'));
    }
    public function setting_account_create(Request $request){
        return view('setting.account_create');
    }
    
    public function setting_account_create_post(Request $request){
        //新規アカウント登録時処理
        $newUserInfo = $request->all();
        unset($newUserInfo['_token']);
        $insertData = new Users;
        $insertData->fill($newUserInfo)->save();
        $accountList = Users::all();
        return view('setting.account_create',compact('accountList'));
    }
}
