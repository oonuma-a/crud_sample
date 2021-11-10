<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
        
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

    public function client_create_get(Request $request)
    {
        return view('client.create');
    }
    public function client_create_post(Request $request)
    {
        return view('client.create');
    }
    public function client_edit_get(Request $request)
    {
        return view('client.edit');
    }
    public function client_edit_post(Request $request)
    {
        return view('client.edit');
    }
    public function client_handled_get(Request $request)
    {
        return view('client.handled');
    }
    public function client_handled_post(Request $request)
    {
        return view('client.handled');
    }
}
