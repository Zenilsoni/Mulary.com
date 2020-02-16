<?php

namespace App\Http\Requests\validation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BasicInfoValidateRequest extends FormRequest
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
            'u_name'=>'required|min:5|unique:registrations,username',
            'u_fname'=>'required',
            'u_lname'=>'required',
            'u_email'=>'required|unique:registrations,email|email',
            'user_type'=>'required',
            'user_type_college'=>'required_if:user_type,yes',
            'user_past_info'=>'required_if:user_type,no',
            'user_current_info'=>'required_if:user_type,no',
            'gender'=>'required',
            'u_accept'=>'required'

        ];

    }
    public function messages()
    {
        return [
            'u_name.required' => 'Username is required!',
            'u_name.min' => 'Username must be atleast 5 characters',
            'u_name.unique' => 'Username already taken',

            'u_fname.required' => 'Firstname is required!',
            'u_lname.required' => 'Lastname is required!',

            'u_email.required' => 'Email is required!',
            'u_email.unique' => 'Email already taken',

            'user_type.required'=> 'Please choose',

            'user_type_college.required_if'=> 'Selection is required',

            'user_past_info.required_if' => 'College Information required',

            'user_current_info.required_if' =>  'Job Information required',

            'gender.required'=> 'Select above',

            'u_accept.required' => 'Please accept Terms and conditions'
        ];
    }
}
