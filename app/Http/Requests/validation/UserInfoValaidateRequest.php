<?php

namespace App\Http\Requests\validation;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoValaidateRequest extends FormRequest
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
            'u_password'=>'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'u_cnfpassword'=>'required|same:u_password',
            'u_addstreet'=>'required',
            'u_addcity'=>'required',
            'u_addpostal'=>'required',
            'u_addprovince'=>'required',
            'reg_id'=>'required'
        ];
    }

    public function messages()
{
    return[
      'u_password.required'=> 'Password must be present',
        'u_password.between'=>'Your password must be 8 characters long, should contain atleast 1 Uppercase,1 Lowercase,1 Numeric and 1 Special Character',
        'u_password.regex'=>'Your password must be 8 characters long, should contain atleast 1 Uppercase,1 Lowercase,1 Numeric and 1 Special Character',

        'u_cnfpassword.required'=>'Confirm Password must be present',
        'u_cnfpassword.same'=>'Password does not match',


        'u_addstreet.required'=>'Adress Street is required',
        'u_addpostal.required'=>'Postal Code is required',
        'u_addcity.required'=>'City is required',
        'u_addprovince.required'=>'Choose province',
    ];
}
}
