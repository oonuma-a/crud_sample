<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class SettingAccountController extends Controller
{
    public function setting_account_get(Request $request){
        //表示件数変更
        if(isset($request->paginateValue)){
            $paginateValue = $request->paginateValue;
            $accountList = Users::paginate($paginateValue);
            return view('setting.account', compact('accountList'));
        }else{
            $accountList = Users::paginate(5);
            return view('setting.account', compact('accountList'));
        }
    }
    public function setting_account_post(Request $request){  
        //検索アカウント一覧表示処理
        if(isset($request->accountSearch)){
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
            $searchData = $accountSearch->paginate(5);
            return view('setting.account', compact('searchData'));
        }else if($request->accountCreateFlg){
            //新規アカウント登録時処理
            $newUserInfo = $request->all();
            unset($newUserInfo['_token']);
            $insertData = new Users;
            $insertData->fill($newUserInfo)->save();
            $insertData->fill([
                'password' => Hash::make($request->password)
            ])->save();
            
            $accountList = Users::paginate(5);
            return view('setting.account',compact('accountList'));
        }else{
            //通常表示
            $accountList = Users::paginate(5);
            return view('setting.account', compact('accountList'));
        }
    }
    public function setting_account_create_get(Request $request){
        return view('setting.account_create');
    }
    
    public function setting_account_create_post(Request $request){
        return view('setting.account_create');
    }
}
