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
                <form class="forms-sample" method="POST" action="{{url('/signup')}}">
                        {{csrf_field()}}
                    {{--                    USERNAME COLUMN START--}}

                    <div class="row">
                        <div class="col-sm-12 form-group {{$errors->has('u_name')?'has-error':''}}">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="u_name" autocomplete="off" placeholder="Username"><br>
                            {!! $errors->first('u_name', '<div class="row-sm-3 alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                    USERNAME COLUMN FINISH--}}
                    {{--                        FIRST NAME AND LAST NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_fname')?'has-error':''}}">

                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" name="u_fname" placeholder="First Name"><br>
                            {!! $errors->first('u_fname', '<div class="alert alert-danger">:message</div>') !!}


                        </div><!-- Col of last name -->
                        <div class="col-sm-6 form-group {{$errors->has('u_lname')?'has-error':''}}">

                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control" name="u_lname" placeholder="Last Name"><br>
                            {!! $errors->first('u_lname', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        FIRST NAME AND LAST NAME COLUMNS FINISH--}}
                    {{--                        EMAIL NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group {{$errors->has('u_email')?'has-error':''}}">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control" name="u_email" id="exampleInputEmail" autocomplete="off" placeholder="Email"><br>
                        {!! $errors->first('u_email', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        EMAIL NAME COLUMNS FINISh--}}
                    {{--                        COLLEGE RADIO SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group  {{$errors->has('user_type')?'has-error':''}}">
                            <label for="checkboxEnrollment">Are you currently enrolled in College or Universtiy?</label>

                            <div class="col-sm-6 form-group">
                                <div class="form-check form-group" >
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="user_type" id="optionsRadios1" value="yes" onclick="radioFunction()">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="user_type" id="optionsRadios2" value="no" onclick="radioFunction()">
                                        No
                                    </label>
                                </div>

                            </div>
                            <br>
                            {!! $errors->first('user_type', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        COLLEGE RADIO SELECTION COLUMNS START--}}
                    {{--                        COLLEGE YES CHECKED SELECTION COLUMNS START--}}
                    <div class="row" id="yesCollege" style="display: none">
                        <div class="col-sm-12 form-group {{$errors->has('user_type_college')?'has-error':''}}">
                            <label for="dropDownCollegeContent">Please Select your college or university:</label>

                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" name="user_type_college" id="exampleFormControlSelect1">

                                <option selected disabled>Select your College</option>
                                @foreach($colleges as $getCollege)
                                <option value="{{$getCollege->id}}">{{$getCollege->name}}</option>
                                @endforeach
                            </select>
                    </div>
                        {!! $errors->first('user_type_college', '<div class="alert alert-danger">:message</div>') !!}
                        {{--                        COLLEGE YES CHECKED SELECTION COLUMNS FINISH--}}
                        {{--                        COLLEGE NO CHECKED SELECTION COLUMNS START--}}
                    </div>
                    <div class="row" id="noCollege" style="display: none">
                        <div class="col-sm-12 form-group {{$errors->has('user_past_info')?'has-error':''}}">
                            <label for="enterCollege">Enter your previous college Name</label>
                            <input type="text" class="form-control" name="user_past_info" id="exampleInputUsername1" autocomplete="off">
                            <br>{!! $errors->first('user_past_info', '<div class="alert alert-danger">:message</div>') !!}
                        </div>

                        <div class="col-sm-12 form-group {{$errors->has('user_current_info')?'has-error':''}}">
                            <label for="exampleInputUsername1">Enter your current job Title</label>
                            <input type="text" class="form-control" name="user_current_info" id="exampleInputUsername1" autocomplete="off" placeholder="Sales,Administrative,etc.">
                            <br>{!! $errors->first('user_current_info', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        COLLEGE NO CHECKED SELECTION COLUMNS FINISH--}}
                    {{--                        GENDER SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group {{$errors->has('gender')?'has-error':''}}">
                            <label for="raduoButtonGender">Gender:</label>
                        </div>

                            <div class="col-sm-12 form-group">
                                <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                    <option selected disabled>Select your Gender</option>
                                    <option value="Male" name="Male">Male</option>
                                    <option value="Female" name="FeMale">Female</option>
                                    <option value="Doesn't want to specify" name="Doesn't want to specify">Doesn't want to specify</option>

                                </select><br>
                                {!! $errors->first('gender', '<div class="alert alert-danger">:message</div>') !!}
                            </div>
                        </div>
                    {{--                        GENDER SELECTION COLUMNS Finish--}}
                    {{--                        TERMS and CONDITION SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group {{$errors->has('u_accept')?'has-error':''}}">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="u_accept">
                            I accept,
                                </label>
                            </div>
                            {!! $errors->first('u_accept', '<div class="alert alert-danger">:message</div>') !!}
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

