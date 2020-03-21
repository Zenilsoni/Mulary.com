<?php

namespace App\Http\Requests\AdminValidation;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateEnterprise extends FormRequest
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
            'companyname'=>'required',
            'efirstname'=>'required|alpha',
            'elastname'=>'required|alpha',
            'eemail'=>'required|email',
            'econtact'=>'required|numeric',
            'ewebsite'=>'required',
            'epassword'=>'required',
            'confirm_password'=>'required|same:epassword',
            'instagram'=>'required',
            'facebook'=>'required',
            'erange'=>'required|alpha_num',
            'ecountry'=>'required|alpha',
            'e_addressstreet'=>'required',
            'e_addresscity'=>'required',
            'e_addressprovince'=>'required',
            'e_postalcode'=>'required|max:7'
        ];
    }

    public function messages(){
        return[
            'companyname.required'=>'Company Name Is Required',
            'efirstname.required'=>'First Name Is Required',
            'efirstname.alpha'=>'First Name Must Be A Character',
            'elastname.required'=>'Last Name Is Required',
            'elastname.alpha'=>'Last Name Must Be A Character',
            'eemail.required'=>'Email Is Required',
            'eemail.email'=>'Please Enter Proper Email',
            'econtact.required'=>'Contact Is Required',
            'econtact.numeric'=>'Contact Must Be Numeric',
           // 'econtact.min'=>'Contact Must Minimum 10 Digits',
           // 'econtact.max'=>'Contact Must Maximum 10 Digits',
            'ewebsite.required'=>'Website Details Required',
            'epassword.required'=>'Password Required',
            'confirm_password.required'=>'Confirm Password Required',
            'confirm_password.same'=>'Password Does Not Match',
            'instagram.required'=>'Select Instagram yes or no',
            'facebook.required'=>'Select Facebook yes or no',
            'erange.required'=>'Range Is required',
            'erange.alpha_num'=>'Must Be Alpha Numeric',
            'ecountry.required'=>'Country is Required',
            'ecountry.alpha'=>'Country Must be Character',
            'e_addressstreet.required'=>'Enter Address Street',
            //'e_addressstreet.numeric'=>'Address Street Must Be Numeric',
            'e_addresscity.required'=>'City is required',
            'e_addressprovince.required'=>'Province Is Required',
            'e_postalcode.required'=>'Postal Code is Required',
            'e_postalcode.alpha_num'=>'Must Be Alpha Numeric',
            'e_postalcode.max'=>'It must be equal to 6 ',
        ];
    }
}
