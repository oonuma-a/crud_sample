<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    
    public function errors_index(){
        return view('errors.index');
    }
}
