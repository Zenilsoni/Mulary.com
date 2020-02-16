<?php

namespace App\AuthorizeModel;

use Illuminate\Database\Eloquent\Model;

class RegistrationUnique extends Model
{
    protected $table="registrations";
    protected $fillable=["username","email"];
}
