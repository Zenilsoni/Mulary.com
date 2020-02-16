<?php

namespace App\Http\Requests\validation;

use Illuminate\Foundation\Http\FormRequest;

class BasicInfoValidateRequest extends FormRequest
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
            'u_name'=>'required|min:5',
            'u_fname'=>'required|min:5',
            'l_name'=>'required|min:5',
            'u_email'=>'required|email',
            'user_type'=>'required',
            'gender'=>'required',
            'u_accept'=>'required'

        ];

    }
    public function messages()
    {
        return [
            'u_name.required' => 'User Name is required!',
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!'
        ];
    }
}
