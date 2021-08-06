<?php

namespace App\Http\Requests;


trait CustomerInformationAttributeTrait
{
    /**
     * お客様情報の項目
     */
    private $passwordInputs = [
        'id',
        'pass'
    ];

    /**
     * お客様のユーザー名、パスワードを取得します。
     */
    public function passwordInputs(): array
    {
        $passwordInputs = [];
        foreach($this->CustomerInformationAttributeTrait as $attribute){
            $passwordInputs[$attribute] = $this->input($attribute) ?: $this->old($attribute);
        }
        return $passwordInputs;

    }

}
