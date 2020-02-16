<?php

namespace App\Http\Controllers;
use DB;
use App\UserModel\getUsers;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function getUser(){
       // $users = DB::select('select * from registrations');
        //return view('adminPages.user.allusers',['users'=>$users]);
        //$users = getUsers::all();
        $users = DB::select('select * from registrations join colleges_and_universities where college_id = colleges_and_universities.id ');
        return view('adminPages.user.allusers',['users'=>$users]);
    }

    public function getApprovedUser(){
        $users = DB::select('select * from registrations ,colleges_and_universities, user_details where registrations.college_id = colleges_and_universities.id and status = "Approved" and registrations.signup_id = user_details.signup_id');
        return view('adminPages.user.approved',['users'=>$users]);
    }

    public function getDisApprovedUser(){
        $users = DB::select('select * from registrations ,colleges_and_universities where registrations.college_id = colleges_and_universities.id and status = "DisApproved"');
        return view('adminPages.user.approved',['users'=>$users]);
    }

    public function getInprogressUser(){       
         $users = DB::select('select * from registrations join colleges_and_universities where college_id = id and status = "Pending"');
         return view('adminPages.user.in-progress',['users'=>$users]);
     }
 
}
