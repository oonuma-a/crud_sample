<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function order_index_get(Request $request){
        $orderDatas = order::paginate(5);
        return view('order.index', compact('orderDatas'));
    }
    public function order_index_post(Request $request){

        // $user = Auth::user();
        // $user_id = Auth::id();
        if(isset($request->insertFlg)){
            //データ登録処理
            $newOrderData = $request->all();
            unset($newOrderData['_token']);
            $tel1 = substr($newOrderData['tel'],0,3);
            $tel2 = substr($newOrderData['tel'],3,3);
            $tel3 = substr($newOrderData['tel'],6,4);
            $order_status = "1";
            $newOrderData = array_merge($newOrderData,array('tel1'=>$tel1),array('tel2'=>$tel2),array('tel3'=>$tel3), array('order_status'=>$order_status));
            unset($newOrderData['tel']);
            $user_id = Auth::id();
            $newOrderData = array_merge($newOrderData,array('user_id'=>$user_id));
            // dd($newOrderData);
            $orderTable = new order;
            $orderTable->fill($newOrderData)->save();
            $orderDatas = order::paginate(5);
            return view('order.index', compact('orderDatas'));
        }else{
            $orderDatas = order::paginate(5);
            return view('order.index', compact('orderDatas'));
        }
    }
    public function order_cancel_get(Request $request){
        return view('order.cancel');
    }
    public function order_cancel_post(Request $request){
        return view('order.cancel');
    }
    public function order_create_get(Request $request){
        return view('order.create');
    }
    public function order_create_post(Request $request){
        return view('order.create');
    }
    public function order_history_get(Request $request){
        return view('order.history');
    }
    public function order_history_post(Request $request){
        return view('order.history');
    }
}