<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
//use Notifiable;

    //protected $guard = 'admin';
    protected $table = 'admin_login_details';
    protected $fillable = [
         'admin_email', 'admin_password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
