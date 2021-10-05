<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class SettingController extends Controller
{

    public function setting_index(){
        return view('setting.index');
    }
    public function setting_create(Request $request){

        return view('setting.create');
    }
    public function setting_delete(){
        return view('setting.delete');
    }
}
