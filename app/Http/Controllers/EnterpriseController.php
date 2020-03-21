<?php

namespace App\Http\Controllers;

use App\EnterpriseDetail;
use Illuminate\Http\Request;
use App\Http\Requests\AdminValidation\AuthenticateEnterprise;
use Illuminate\Support\Facades\Input;

class EnterpriseController extends Controller
{
    public function getEnterprise(){
        return view('adminPages.enterprise.newenterprise');
    }

    public function store(AuthenticateEnterprise $request)
    {
       $validate = $request->validated();
       $enterprise = new EnterpriseDetail();
       $enterprise->company_name=$validate['companyname'];
        $enterprise->enterprise_first_name=$validate['efirstname'];
        $enterprise->enterprise_last_name=$validate['elastname'];
        $enterprise->enterprise_email=$validate['eemail'];
        $enterprise->enterprise_title=$validate['etitle'];
        $enterprise->enterprise_phone=$validate['econtact'];
        $enterprise->enterprise_website=$validate['ewebsite'];
        $enterprise->enterprise_password=$validate['epassword'];
        $enterprise->enterprise_instagram=$validate['instagram'];
        $enterprise->enterprise_facebook=$validate['facebook'];
        $enterprise->enterprise_employees_range=$validate['erange'];
        $enterprise->enterprise_industry=$validate['eindustry'];
        $enterprise->enterprise_revenue=$validate['erevenue'];
        $enterprise->street_number=$validate['e_streetno'];
        $enterprise->street_name=$validate['e_addressstreet'];
        $enterprise->unit_number=$validae['e_addressunit'];
        $enterprise->city=$validate['e_addresscity'];
        $enterprise->province=$validate['e_addressprovince'];
        $enterprise->postal_code=$validae['e_postalcode'];
        $enterprise->country=$validate['ecountry'];
        $enterprise->save();
        echo $enterprise->company_name;

    }
}
