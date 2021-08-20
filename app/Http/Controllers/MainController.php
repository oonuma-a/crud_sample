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
        if(Auth::check()){
            //ログイン済の場合
            return view('client.index');
        }else{
            return view('admin.index');
        }
    }
    
    /**
    * @param App\Http\Requests\ClientRequest;
    */
    public function client_index(ClientRequest $request){
    //dd($request->all());
    //    $request = (object)$request->getPasswordInputs();
        $credentials = $request->only('user_id', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('client.index')->with('login_success', 'ログイン成功');
        }
        return back()->withErrors([
            'login_error'=>'ユーザーとパスワードが一致しません。',
        ]);
    }
}
