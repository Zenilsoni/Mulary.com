<?php

namespace App\Http\Controllers;
use DB;
use App\Advertisements;
use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    //
    public function getFacebookPosts(){
        $facebookPosts = DB::select('select * from advertisements where media_platform = "facebook" ');

        if($facebookPosts){
            return view('dashboard',['facebookPosts'=>$facebookPosts]);
        }
        else{
            return view('dashboard',['facebookPosts'=>"error"]);
        }
    }
    public function getInstagramPosts(){
        $instgramPosts = DB::select('select * from advertisements where media_platform = "instagram" ');
        return view('dashboard',['instgramPosts'=>$instgramPosts]);

    }

}
