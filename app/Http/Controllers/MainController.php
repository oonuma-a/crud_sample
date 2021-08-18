<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;


use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return View
     */
    public function admin_index(){
        return view('admin.index');
    }
    
    /**
    * @param App\Http\Requests\ClientRequest;
    */
    public function client_index(ClientRequest $request){
    //dd($request->all());
        $request = (object)$request->getPasswordInputs();
        return view('client.index');
    }
}
