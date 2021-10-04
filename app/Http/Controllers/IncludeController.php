<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncludeController extends Controller
{

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
