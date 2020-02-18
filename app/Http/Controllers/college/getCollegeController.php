<?php

namespace App\Http\Controllers\college;

use App\collegeModel\FecthCollegesModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class getCollegeController extends Controller
{
    function getColleges()
    {
//$colleges = FecthCollegesModel::all();
return view('userPages.forms.signup');
    }
}
