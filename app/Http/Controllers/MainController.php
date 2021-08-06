<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminRequest;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function admin_index(AdminRequest $request){
        $request = (object)$request->passwordInputs();
        return view('admin.index');
    }
}
