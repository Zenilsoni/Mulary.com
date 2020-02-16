<?php

namespace App\Http\Controllers\Authorization;

use App\AuthorizeModel\RegistrationUnique;
use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function insert(BasicInfoValidateRequest $request)
    {
        $validate = $request->validated();

$signup = new RegistrationUnique;


        $signup->username=$request->input('u_name');
        $signup->firstname=$request->input('u_fname');
        $signup->lastname=$request->input('u_lname');
        $signup->email=$request->input('u_email');
        $signup->college_id=$request->input('user_type_college');
        $signup->gender=$request->input('gender');
        $signup->terms=$request->input('u_accept');

        $signup->save();
    }
}
