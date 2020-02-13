<?php

namespace App\UserModel;

use Illuminate\Database\Eloquent\Model;

class getUsers extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'signup_id';
    public $timestamps = false;
    protected $fillable = ['signup_id', 'username', 'firstname', 'lastname', 'email', 'college_id', 'gender', 'terms', 'status'];
}
