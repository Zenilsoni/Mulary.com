<?php

namespace App\Http\Controllers;
use App\UserPost;
use Carbon\Carbon;
use DB;
use App\Advertisement;
use Illuminate\Http\Request;


class UserPostsController extends Controller
{
    //
    public function getFacebookPosts($id){
        $facebookPosts = DB::select('SELECT * FROM advertisements where advertisements.media_platform="facebook" and advertisements.add_id NOT IN ( SELECT posts.advertise_id from posts where user_id = '.$id.') ');

        if($facebookPosts){
            return view('dashboard',['facebookPosts'=>$facebookPosts]);
        }
        else{
            return view('dashboard',['facebookPosts'=>"error"]);
        }
    }
    public function getInstagramPosts($id){
        $instgramPosts = DB::select('SELECT * FROM advertisements where advertisements.media_platform="instagram" and advertisements.add_id NOT IN ( SELECT posts.advertise_id from posts where user_id = '.$id.')');
        return view('dashboard',['instgramPosts'=>$instgramPosts]);
    }

    public function facebookPostByUser(Request $request){

        $post = new UserPost();
        $post->post_platform = $request->post_platform;
        $post->advertise_id = $request->advertise_id;
        $post->user_id = $request->user_id;
        $post->posted_date = Carbon::now()->toDateTimeString();
        $post->save();

        $facebookPosts = DB::select('SELECT * FROM advertisements where advertisements.media_platform="facebook" and advertisements.add_id NOT IN ( SELECT posts.advertise_id from posts where user_id = 1) ');
        return view('dashboard',['facebookPosts'=>$facebookPosts]);
    }

    public function instagramPostByUser(Request $request){

        $post = new UserPost();
        $post->post_platform = $request->post_platform;
        $post->advertise_id = $request->advertise_id;
        $post->user_id = $request->user_id;
        $post->posted_date = Carbon::now()->toDateTimeString();
        $post->save();

        $instgramPosts = DB::select('SELECT * FROM advertisements where advertisements.media_platform="instagram" and advertisements.add_id NOT IN ( SELECT posts.advertise_id from posts where user_id = 1)');
        return view('dashboard',['instgramPosts'=>$instgramPosts]);
    }

    public function sharedPostByUser(){
        $posts = DB::select('select p.*, a.* from posts p join advertisements a on p.advertise_id=a.add_id where user_id = 1 ');
        return view('userPages.myposts',['myposts'=>$posts]);
    }



}
