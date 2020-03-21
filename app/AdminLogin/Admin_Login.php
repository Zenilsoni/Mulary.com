<?php

namespace App\AdminLogin;

use Illuminate\Database\Eloquent\Model;

class Admin_Login extends Model
{
    protected $table = 'admin_login_details';
    public $timestamps = false;
    protected $fillable = [
         'admin_email', 'admin_password'
    ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
