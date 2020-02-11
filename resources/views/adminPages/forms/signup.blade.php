@extends('layout.master')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>


    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Basic Form</h6>
                <form class="forms-sample">
{{--                    USERNAME COLUMN START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                        </div>
                    </div>
                    {{--                    USERNAME COLUMN FINISH--}}
                    {{--                        FIRST NAME AND LAST NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter first name">
                            </div>
                        </div><!-- Col of last name -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    {{--                        FIRST NAME AND LAST NAME COLUMNS FINISH--}}
                    {{--                        EMAIL NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" autocomplete="off" placeholder="Email">
                        </div>
                    </div>
                    {{--                        EMAIL NAME COLUMNS FINISh--}}
                    {{--                        COLLEGE RADIO SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="checkboxEnrollment">Are you currently enrolled in College or Universtiy?</label>

                            <div class="col-sm-6 form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios1" value="yes" onclick="radioFunction()">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios2" value="no" onclick="radioFunction()">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                        COLLEGE RADIO SELECTION COLUMNS START--}}
                    {{--                        COLLEGE YES CHECKED SELECTION COLUMNS START--}}
                    <div class="row" id="yesCollege" style="display: none">
                        <div class="col-sm-12 form-group">
                            <label for="dropDownCollegeContent">Please Select your college or university:</label>

                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected disabled>Select your College</option>
                                <option>12-18</option>
                                <option>18-22</option>
                                <option>22-30</option>
                                <option>30-60</option>
                                <option>Above 60</option>
                            </select>
                    </div>
                        {{--                        COLLEGE YES CHECKED SELECTION COLUMNS FINISH--}}
                        {{--                        COLLEGE NO CHECKED SELECTION COLUMNS START--}}
                    </div>
                    <div class="row" id="noCollege" style="display: none">
                        <div class="col-sm-12 form-group">
                            <label for="enterCollege">Enter your previous college Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off">
                        </div>

                        <div class="col-sm-12 form-group">
                            <label for="exampleInputUsername1">Enter your current job Title</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Sales,Administrative,etc.">
                        </div>
                    </div>
                    {{--                        COLLEGE NO CHECKED SELECTION COLUMNS FINISH--}}
                    {{--                        GENDER SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="raduoButtonGender">Gender:</label>
                        </div>

                            <div class="col-sm-12 form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected disabled>Select your Gender</option>
                                    <option>MALE</option>
                                    <option>FEMALE</option>
                                    <option>Doesn't want to specify</option>

                                </select>
                            </div>
                        </div>
                    {{--                        GENDER SELECTION COLUMNS Finish--}}
                    {{--                        TERMS and CONDITION SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                            I accept,
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>

            </div>
        </div>
    </div>
<script>
    function radioFunction() {
    var getYes= document.getElementById("optionsRadios1");
    document.getElementById("yesCollege").style.display=getYes.checked?"block":"none";
    var getNo= document.getElementById("optionsRadios2");
        document.getElementById("noCollege").style.display=getNo.checked?"block":"none";
    }

</script>
@endsection

