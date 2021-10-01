<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\AccountCreateRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class MainController extends Controller
{
    /**
     * @return View
     */
    public function admin_index(){
        // if(Auth::check()){
        //     //ログイン済の場合
        //     return view('client.index');
        // }else{
            return view('admin.index');
        // }
    }

    
    /**
    * @param App\Http\Requests\ClientRequest;
    */
    public function client_index(Request $request)//ClientRequest $request)
    {
    //dd($request->all());
    //    $request = (object)$request->getPasswordInputs();

    // $credentials = $request->validate([
    //     'user_id' => ['required'],
    //     'password' => ['required'],
    // ]);
    // $credentials = $request->only(
    //     'user_id' ,
    //     'password'
    // );
    // if(Auth::attempt($credentials)){
    //     $request->session()->regenerate();
            return view('client.index');
    // }
    // return back()->withErrors([
    //     'login_error'=>'ユーザーとパスワードが一致しません。',
    // ]);
    }

    public function errors_index(){
        return view('errors.index');
    }

    public function order_index(){
        return view('order.index');
    }
    public function order_cancel(){
        return view('order.cancel');
    }
    public function order_create(){
        return view('order.create');
    }
    public function order_history(){
        return view('order.history');
    }

    
    public function setting_index(){
        return view('setting.index');
    }
    public function setting_account(Request $request){
        if(isset($request->search_authority)){
            $items = DB::select('select * from user  where authority=:authority,display_name=:display_name,name=:name,password,user_status');
        }else{
            $items = DB::select('select * from user');
        }
        return view('setting.account', compact('items'));
    }
    public function setting_account_post(Request $request){
        
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
    public function setting_create(Request $request){

        return view('setting.create');
    }
    public function setting_delete(){
        return view('setting.delete');
    }


    public function include_common(){
        return view('include.common');
    }
    public function include_head(){
        return view('include.head');
    }
    public function include_header(){
        return view('include.header');
    }
    public function include_sidebar(){
        return view('include.sidebar');
    }
}
