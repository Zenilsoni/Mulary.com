<?php

namespace App\Http\Requests\AdminValidation;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateLogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'admin_email'=>'required|email',
            'admin_password'=>'required'
        ];
    }

    public function messages(){
        return[            
            'admin_email.required'=>'Email Is Required',
            'admin_email.email'=>'Please Enter Proper Email',
            'admin_password.required'=>'Password Is Required',          
        ];
    }
}
