<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\shop;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function order_index_get(Request $request){
         //表示件数変更
        // dd($request->all());
        if(isset($request->paginateValue)){
            $paginateValue = $request->paginateValue;
            $orderDatas = order::paginate($paginateValue);
            return view('order.index', compact('orderDatas'));
        }else if(isset($request->searchOrderFlg)){
        //検索
            $searchOrder = order::query();
            $start_day = $request->start_day;
            $end_day = $request->end_day;
            $searchOrderNum = $request->searchOrderNum;
            $searchShopId = $request->searchShopId;
            $searchArea = $request->searchArea;
            // dd($request->all());
            if(!empty($start_day)){
                $searchOrder->where('inserted_at','>',$start_day);
            }
            if(!empty($end_day)){
                $searchOrder->where('inserted_at','<',$end_day);
            }
            if(!empty($searchOrderNum)){
                $searchOrder->where('order_number','like','%'.$searchOrderNum.'%');
            }
            if(!empty($searchShopId)){
                $searchOrder->where('shop_id','like','%'.$searchShopId.'%');
            }
            if(!empty($searchArea)){
                $searchOrder->where('area1','like','%'.$searchArea.'%');
            }
            $searchList = $searchOrder->paginate(5);
            return view('order.index', compact('searchList'));
        }else{
            $orderDatas = order::paginate(5);
            return view('order.index', compact('orderDatas'));
        }
    }
    public function order_index_post(Request $request){
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
            $orderTable = new order;
            $orderTable->fill($newOrderData)->save();
            $orderDatas = order::paginate(5);
            return view('order.index', compact('orderDatas'));
        }else if(isset($request->deleteFlg)){
            //削除処理
            // dd($request->deleteId);
            order::find($request->deleteId)->delete();
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