<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function client_index(ClientRequest $request){
    //dd($request->all());
    //    $request = (object)$request->getPasswordInputs();
        $credentials = $request->only(
            'user_id' ,
            'password'
        );
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('client/index');
        }
        return back()->withErrors([
            'login_error'=>'ユーザーとパスワードが一致しません。',
        ]);
    }
    
    public function setting_index(){
        return view('setting.index');
    }
    public function setting_account(){
        return view('setting.account');
    }
    public function setting_account_create(){
        return view('setting.account_create');
    }
    public function setting_create(){
        return view('setting.create');
    }
    public function setting_delete(){
        return view('setting.delete');
    }
}
