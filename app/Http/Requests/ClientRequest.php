<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    use CustomerInformationAttributeTrait;
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
            'user_id'   => 'required',
            'password' => 'required',
            ];
    }

    public function attributes(){
        return [
            'user_id'   => 'ユーザーID',
            'password' => 'パスワード',
            ];
    }

    public function messages()
    {
        
        return [
            'user_id.required' => 'ユーザー名を入力してください',
            'password.required' => 'パスワードを入力してください',
        ];
    }
}
