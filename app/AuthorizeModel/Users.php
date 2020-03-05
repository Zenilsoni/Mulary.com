<?php

namespace App\AuthorizeModel;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected  $table='mulary_users';
    protected $fillable=['password','birthdate','address_unit','address_street','city','postal_code','province','country','registration_id'];
    public $timestamps = false;
}
