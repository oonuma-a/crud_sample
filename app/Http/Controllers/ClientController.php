<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;

class ClientController extends Controller
{
        
    /**
    * @param App\Http\Requests\ClientRequest;
    */
    public function client_index_get(Request $request)//ClientRequest $request)
    {
        //表示件数変更
        if(isset($request->paginateValue)){
            $shopList = shop::paginate($request->paginateValue);
            return view('client.index', compact('shopList'));
        }else{
            $shopList = shop::paginate(5);
            return view('client.index', compact('shopList'));
        }
    }
    public function client_index_post(Request $request)//ClientRequest $request)
    {
    //dd($request->all());
    //    $request = (object)$request->getPasswordInputs();

    // $credentials = $request->validate([
    //     'user_id' => ['required'],
    //     'password' => ['required'],
    // ]);
    // $credentials = $request->only(
    //     'user_id' ,
    //     'password'
    // );
    // if(Auth::attempt($credentials)){
    //     $request->session()->regenerate();
        if(isset($request->deleteId)){
            return view('client.index');
        }else if(isset($request->searchShopNumber) or isset($request->searchShopTel) or isset($request->searchShopName) or isset($request->searchShopContractStatus) or isset($request->searchShopArea)){
             //データ検索
            $searchShop = shop::query();
            $searchShopNumber = $request->searchShopNumber;
            $searchShopArea = $request->searchShopArea;
            $searchShopTel = $request->searchShopTel;
            $searchShopName = $request->searchShopName;
            $searchShopContractStatus = $request->searchShopContractStatus;
            if(!empty($searchShopNum)){
                $searchShop->where('shop_num','like', '%'.$searchShopNum.'%');
            }
            if(!empty($searchShopaArea)){
                $searchShop->where('area1','like', '%'.$searchShopArea.'%');
            }
            if(!empty($searchShopTel)){
                $searchShop->where('tel','like', '%'.$searchShopTel.'%');
            }
            if(!empty($searchShopName)){
                $searchShop->where('shop_name','like', '%'.$searchShopName.'%');
            }
            if(!empty($searchShopContractStatus)){
                $searchShop->where('contract_status','like', '%'.$searchShopContractStatus.'%');
            }
            $shopList = $searchShop->get();
            $shopList =  $shopList->paginate(5);
            return view('client.index', compact('shopList'));
        }else{
            $shopList = shop::paginate(5);
            return view('client.index', compact('shopList'));            
        }
    }

    // return back()->withErrors([
    //     'login_error'=>'ユーザーとパスワードが一致しません。',
    // ]);
    

    public function client_create_get(Request $request)
    {
        return view('client.create');
    }
    public function client_create_post(Request $request)
    {
        dd($request->all());
        if(isset($request->deleteId)){
            return view('client.create');
        }else if(isset($request->searchFlg)){
            //データ検索
            $searchShop = shop::query();
            $searchShopNumber = $request->searchShopNumber;
            $searchShopArea = $request->searchShopArea;
            $searchShopTel = $request->searchShopTel;
            $searchShopName = $request->searchShopName;
            $searchShopContractStatus = $request->searchShopContractStatus;
            if(isset($searchShopNum)){
                $searchShop->where('shop_num', $searchShopNum);
            }
            if(isset($searchShopaArea)){
                $searchShop->where('area1', $searchShopArea);
            }
            if(isset($searchShopTel)){
                $searchShop->where('tel', $searchShopTel);
            }
            if(isset($searchShopName)){
                $searchShop->where('shop_name', $searchShopName);
            }
            if(isset($searchShopContractStatus)){
                $searchShop->where('contract_status', $searchShopContractStatus);
            }
            $shopList = $searchShop->get();
                return view('client.create', compact('shopList'));
        }
    }
    public function client_edit_get(Request $request)
    {
        return view('client.edit');
    }
    public function client_edit_post(Request $request)
    {
        return view('client.edit');
    }
    public function client_handled_get(Request $request)
    {
        return view('client.handled');
    }
    public function client_handled_post(Request $request)
    {
        return view('client.handled');
    }
}
