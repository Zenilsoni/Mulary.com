<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use Illuminate\Http\Request;
use App\AuthorizeModel\registrations;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{
    function __construct(Request $request)
    {
        $a =$request->get('email');
        $b=DB::table('registrations')->get();
        foreach ($b as $c)
        {

                       if($a == $c->email)
            {
                DB::statement('UPDATE registrations SET status="email_verified" where registration_id='.$c->registration_id.';');
            }
        }

    }

    function create(Request $request)
    {

       return view('userPages.forms.userinfo');
    }
}
