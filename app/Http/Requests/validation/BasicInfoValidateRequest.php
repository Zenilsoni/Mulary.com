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
            'u_fname'=>'required',
            'u_lname'=>'required',
            'u_email'=>'required|unique:Registrations,email|email',
            'u_phone'=>'required',
            'user_type'=>'required',
            'student_type'=>'required_if:user_type,yes',
            'college_type'=>'required_if:student_type,college',
            'university_type'=>'required_if:student_type,university',
            'highschool_type'=>'required_if:student_type,highschool',

//            'user_past_info'=>'required_if:user_type,no',
//            'user_current_info'=>'required_if:user_type,no',
            'u_accept'=>'required'

        ];

    }
    public function messages()
    {
        return [

            'u_name.unique' => 'Username already taken',

            'u_fname.required' => 'Firstname is required!',
            'u_lname.required' => 'Lastname is required!',



            'u_email.required' => 'Email is required!',
            'u_email.unique' => 'Email already taken',

            'u_phone.required'=> 'Phone Number Required',

            'user_type.required'=> 'Please choose',

            'student_type.required_if'=>'Please Choose',

            'college_type.required_if'=>'Selection required',
            'university_type.required_if'=>'Selection required',
            'highschool_type.required_if'=>'Selection required',



            'user_past_info.required_if'=>'College name required',

            'user_current_info.required_if'=>'Job Title required',



            'u_accept.required' => 'Checkbox required',



        ];
    }
}
