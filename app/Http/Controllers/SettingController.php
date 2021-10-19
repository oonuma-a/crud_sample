<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class SettingController extends Controller
{

    public function setting_index_get(Request $request){
        $itemList = Item::paginate(2);
        return view('setting.index', compact('itemList'));
    }
    public function setting_index_post(Request $request){
        if(isset($request->deleteId)){
            $deleteId = Item::find($request->deleteId)->delete();
            $itemList = Item::all();
            return view('setting.index', compact('itemList'));
        }else{
            $searchItem = Item::query();
            $searchNumber = $request->searchItemNumber;
            $searchName = $request->searchItemName;
            if(!empty($searchNumber)){
                $searchItem->where('item_name','like','%'.$searchNumber.'%');
            }
            if(!empty($searchName)){
                $searchItem->where('item_name','like','%'.$searchName.'%');
            }
            $searchData = $searchItem->get();
            return view('setting.index', compact('searchData'));
        }
    }
    public function setting_create_get(Request $request){
        return view('setting.create');
    }

    public function setting_create_post(Request $request){
        $itemInsert = $request->all();
        unset($itemInsert['_token']);
        $tableData = new Item;
        $tableData->fill($itemInsert)->save();
        $itemList = Item::all();
        return view('setting.create', compact('itemList'));
    }
    public function setting_details_get(Request $request){
        $updateData = Item::find($request->updateId);
        return view('setting.details', compact('updateData'));
    }
    public function setting_details_post(Request $request){
        $getUpdateData = $request->all();
        unset($getUpdateData['_token']);
        $updateData = Item::find($request->id);
        $updateData->fill($getUpdateData)->save();
        return view('setting.details', compact('updateData'));
    }
}
