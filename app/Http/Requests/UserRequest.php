<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:8'   ,
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'الاسم الاول مطلوب',
            'email.required'            => 'الايميل مطلوب',
            'email.unique'              => 'الايميل مسجل من قبل',
            'password.required'         => 'الرقم السري مطلوب',
            'password.min'              => 'الرقم السري يجب الا يقل 8 احرف',
            'c_password.required'       => 'يرجى تأكيدالرقم السري',

        ];
    }
}
