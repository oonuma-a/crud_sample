<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'authority'=>'required',
            'display_name'=>'required',
            'name'=>'required',
            'user_status'=>'required',
        ];
    }
    public function attribute(){
        return [
            'user_id'=>'ユーザーID',
            'authority'=>'権限',
            'display_name'=>'表示名',
            'name'=>'名前',
            'user_status'=>'状態',
        ];
    }
    public function message(){
        return [
        'user_id.required'=>'ユーザーIDを入力してください',
        'authority.required'=>'権限を入力してください',
        'display_name.required'=>'表示名を入力してください',
        'name.required'=>'名前を入力してください',
        'user_status.required'=>'状態を入力してください',
        ];
    }
}


