<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller

{
function view(){
    return view('userPages.forms.signup');
}
    function insert(BasicInfoValidateRequest $request)
    {
    //    $validate = $request->validated();
        $input= Input::all();
        console.log($input);
    }
    function timepass(Request $request)
    {
        $input= Input::all();
        console.log($input);
    }
}
