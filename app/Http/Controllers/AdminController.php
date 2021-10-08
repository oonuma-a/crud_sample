<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index(){
        // if(Auth::check()){
        //     //ログイン済の場合
        //     return view('client.index');
        // }else{
            return view('admin.index');
        // }
    }
}
