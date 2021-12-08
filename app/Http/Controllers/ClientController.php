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
            $pageValue = $request->paginateValue;
            $pagenateNum = 1;
            if($pageValue == 5){
                $pagenateNum = 1;
            }else if($pageValue == 25){
                $pagenateNum = 2;
            }else if($pageValue == 50){
                $pagenateNum = 3;
            }else if($pageValue == 75){
                $pagenateNum = 4;
            }else if($pageValue == 100){
                $pagenateNum = 5;
            }else if($pageValue == 200){
                $pagenateNum = 6;
            }
            $paginateArray = array(5,25,50,75,100,200);

            return view('client.index', compact('shopList', 'pageValue', 'paginateArray'));
        }else if(isset($request->searchFlg)){
        //検索処理
            $searchShop = shop::query();
            $searchShopNumber = $request->searchShopNumber;
            $searchShopArea = $request->searchShopArea;
            $searchShopTel = $request->searchShopTel;
            $searchShopName = $request->searchShopName;
            $searchShopContractStatus = $request->searchShopContractStatus;
            if(isset($searchShopNumber)){
                $searchShop->where('shop_number','like','%'.$searchShopNumber.'%');
            }
            if(isset($searchShopArea)){
                $searchShop->where('area1','like','%'.$searchShopArea.'%');
            }
            if(isset($searchShopTel)){
                $searchShop->where('tel','like','%'.$searchShopTel.'%');
            }
            if(isset($searchShopName)){
                $searchShop->where('shop_name','like','%'.$searchShopName.'%');
            }
            if(isset($searchShopContractStatus)){
                $searchShop->where('contract_status','like','%'.$searchShopContractStatus.'%');
            }
            $searchList = $searchShop->paginate(5);
            return view('client.index', compact('searchList'));
        }else{
        //通常表示
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
            //データ削除処理
            return view('client.index');
        }else if(isset($request->updateFlg)){
            //データ更新処理
            $getUpdateData = $request->all();
            unset($getUpdateData['_token']);
            $newData = shop::find($request->id);
            $newData->fill($getUpdateData)->save();
            $shopList = shop::paginate(5);
            return view('client.index', compact('shopList'));
        }else if(isset($request->createFlg)){
            $shopCreate = $request->all();
            unset($shopCreate['_token']);
            $shopData = new shop;
            $shopData->fill($shopCreate)->save();
            $shopList = shop::paginate(5);
            return view('client.index', compact('shopList'));
        }
        else{
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
        $shopCreate = $request->all();
        unset($shopCreate['_token']);
        $shopData = new shop;
        $shopData->fill($shopCreate)->save();
        return view('client.create');

    }
    public function client_edit_get(Request $request)
    {
        dd(shop::find($request->editId));
        $userData = shop::find($request->editId);
        return view('client.edit', compact('userData'));
    }
    public function client_edit_post(Request $request)
    {
        dd(shop::find($request->editId));
        $userData = shop::find($request->editId);
        return view('client.edit', compact('userData'));
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
