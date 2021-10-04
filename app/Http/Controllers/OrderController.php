<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_index(){
        return view('order.index');
    }
    public function order_cancel(){
        return view('order.cancel');
    }
    public function order_create(){
        return view('order.create');
    }
    public function order_history(){
        return view('order.history');
    }
}
