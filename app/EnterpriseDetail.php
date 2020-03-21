<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseDetail extends Model
{
    protected $table='enterprise_details';
    public $timestamps=false;
    protected $fillable = ['company_name','enterprise_first_name', 'enterprise_last_name', 'enterprise_email'
    ,'enterprise_title','enterprise_phone','enterprise_website','enterprise_password','enterprise_instagram',
    'enterprise_facebook','enterprise_employees_range'
    ,'enterprise_industry','enterprise_revenue','street_number',
    'street_name','unit_number','city','province','postal_code','country'
    ];
}

