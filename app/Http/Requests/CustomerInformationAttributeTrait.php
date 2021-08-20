<?php

namespace App\Http\Requests;


trait CustomerInformationAttributeTrait
{
    /**
     * お客様情報の項目
     */
    private $PasswordInfomationAttributeTrait = [
        'user_id',
        'pass',
    ];

    /**
     * お客様のユーザー名、パスワードを取得します。
     */
    public function getPasswordInputs(): array
    {
        $passwordInputs = [];
        foreach($this->PasswordInfomationAttributeTrait as $attribute){
            $passwordInputs[$attribute] = $this->input($attribute) ?: $this->old($attribute);
        }
        return $passwordInputs;

    }

}
