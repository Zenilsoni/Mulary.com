<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function insert(BasicInfoValidateRequest $request)
    {
        $validate = $request->validated();

    }
}
