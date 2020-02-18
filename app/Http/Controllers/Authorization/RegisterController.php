<?php

namespace App\Http\Controllers\Authorization;

use App\AuthorizeModel\registrations;
use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller

{
function view(){
    return view('userPages.forms.signup');
}
//    function insert(BasicInfoValidateRequest $request)
//    {
//    //    $validate = $request->validated();
//        $input= Input::all();
//        console.log($input);
//    }
    function insert(Request $request)
    {
//        $email = $request->get('u_email');
//         $fname = $request->get('u_fname');
//         $lname= $request->get('u_lname');
//         $cnt = $request->get('u_phno');



//$check = $request->get('u_accept');



        $signup = new registrations();
        $signup->email=$request->input('u_email');
        $signup->firstname=$request->input('u_fname');
        $signup->lastname=$request->input('u_lname');
        $signup->contact=$request->input('u_phone');
        $signup->school_id=10;
        $signup->occupations='zzzzz';
        $signup->terms=$request->input('u_accept');
        $signup->status='kaib';
        $signup->save();
//echo "<h1>$check</h1>";

    }
}
