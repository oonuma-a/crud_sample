<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\ClientRequest;


use Illuminate\Http\Request;

class MainController extends Controller
{
    public function admin_index(AdminRequest $request){
        return view('admin.index');
    }
    public function client_index(ClientRequest $request){
        $request = (object)$request->getPasswordInputs();
        return view('client.index');
    }
}
