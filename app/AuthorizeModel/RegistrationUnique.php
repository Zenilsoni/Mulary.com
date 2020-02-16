<?php

namespace App\AuthorizeModel;

use Illuminate\Database\Eloquent\Model;

class RegistrationUnique extends Model
{
    protected $table="registrations";
    protected $primaryKey = "signup_id";
    protected $fillable=["username","firstname","lastname","email","college_id","gender","terms","status"];
}
