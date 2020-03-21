<?php

namespace App\AuthorizeModel;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    protected $table="mulary_users";
    protected $fillable=["paasword"];
    public $timestamps = false;
}
