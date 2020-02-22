<?php

namespace App\Http\Controllers\Authorization;

use App\AuthorizeModel\registrations;
use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller

{
function view(){
    return view('userPages.forms.signup');
}
    function insert(BasicInfoValidateRequest $request)
    {
        $validate = $request->validated();
        $signup = new registrations();

        $signup->email=$validate['u_email'];
        $signup->firstname=$validate['u_fname'];
        $signup->lastname=$validate['u_lname'];
        $signup->contact=$validate['u_phone'];
        $signup->school_id=10;
        $signup->occupations='zzzzz';
        $signup->terms=$validate['u_accept'];
        $signup->status='pending';
        $signup->save();

        return redirect('/emailv');
    }

}
