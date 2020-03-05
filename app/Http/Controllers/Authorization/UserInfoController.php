<?php

namespace App\Http\Controllers\Authorization;

use App\AuthorizeModel\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\validation\BasicInfoValidateRequest;
use App\Http\Requests\validation\UserInfoValaidateRequest;
use Illuminate\Http\Request;
use App\AuthorizeModel\registrations;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{

    function __construct(Request $request)
    {
        $emailURL =$request->get('email');
        $emailFetch=DB::table('registrations')->get();
        foreach ($emailFetch as $emailDB)
        {

                       if($emailURL == $emailDB->email)
            {
                DB::statement('UPDATE registrations SET status="email_verified" where registration_id='.$emailDB->registration_id.';');
            }
        }

    }

    function create(Request $req)
    {
$id= $req->get('id');
       return view('userPages.forms.userinfo')->with(['id'=>$id]);
    }
    function insert(UserInfoValaidateRequest $validate)

    {
        $validated = $validate->validated();
        $users = new Users();
        $users->password= $validated['u_password'];
        $users->birthdate='';
        $users->address_unit = '';
        $users->address_street=$validated['u_addstreet'];
        $users->city=$validated['u_addcity'];
        $users->postal_code=$validated['u_addpostal'];
        $users->province=$validated['u_addprovince'];
        $users->country="canada";
        $users->registration_id=$validated['reg_id'];
        $users->save();
        return view('userPages.forms.signup');


        //return view('forms.login');
    }
}
