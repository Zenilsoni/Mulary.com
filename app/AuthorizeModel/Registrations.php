<?php

namespace App\AuthorizeModel;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class registrations extends Model
{
    protected $table="registrations";
    protected $fillable=["email","firstname","lastname","contact","school_id","occupations","terms","status"];
    public $timestamps = false;
}
