<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminLogin\Admin_Login;

class MainController extends Controller
{
    //showAdminLoginForm
    public function showAdminLoginForm()
    {
        // Form View
        return view('adminPages.auth.login');
    }

    public function doLogout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('login'); // redirection to login screen
    }    

    public function adminLogin(Request $request)
      {

      $this->validate($request, [
        'admin_email' => 'required|email',
        'admin_password' => 'required|alphaNum|min:6'
     ]);
      $logins= Admin_Login::all(); 
      $email = $request['admin_email'];
      $password = $request['admin_password'];
      echo($email);

      foreach($logins as $login){
        if($email == $login->admin_email && $password == $login->admin_password){
          return view('adminPages.admindashboard');
        }
      }
    }
}
