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
                <h6 class="card-title">User Information</h6>
                <form class="forms-sample" method="POST" action="{{url('/userinfo')}}">
                    {{csrf_field()}}
                    {{--                        Password AND Confirm Password COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_fname')?'has-error':''}}">

                            <label class="control-label">Password</label>
                            <input type="text" class="form-control" name="u_fname" placeholder="Password" value="{{ old('u_fname') }}"><br>
                            {!! $errors->first('u_fname', '<div class="alert alert-danger">:message</div>') !!}

                        </div><!-- Col of last name -->
                        <div class="col-sm-6 form-group {{$errors->has('u_lname')?'has-error':''}}">

                            <label class="control-label">Confirm Password</label>
                            <input type="text" class="form-control" name="u_lname" placeholder="Confirm Password" value="{{ old('u_lname') }}"><br>
                            {!! $errors->first('u_lname', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        Password AND Confirm Password COLUMNS FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        Address unit and Address street NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_email')?'has-error':''}}">
                            <label for="exampleInputEmail">Address Unit</label>
                            <input type="email" class="form-control" name="u_email" id="u_email" autocomplete="off" placeholder="Email" value="{{ old('u_email') }}"><br>
                            {!! $errors->first('u_email', '<div class="alert alert-danger">:message</div>') !!}
                        </div>

                        <div class="col-sm-6 form-group {{$errors->has('u_phone')?'has-error':''}}">
                            <label for="exampleInputEmail">Address Street</label>
                            <input type="text" class="form-control" name="u_phone" id="u_phno" placeholder="123456789" maxlength="10 value="{{ old('u_phone') }}""><br>
                            {!! $errors->first('u_phone', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        Address unit and Address street COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        City and Postal Code NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_email')?'has-error':''}}">
                            <label for="exampleInputEmail">City</label>
                            <input type="email" class="form-control" name="u_email" id="u_email" autocomplete="off" placeholder="Email" value="{{ old('u_email') }}"><br>
                            {!! $errors->first('u_email', '<div class="alert alert-danger">:message</div>') !!}
                        </div>

                        <div class="col-sm-6 form-group {{$errors->has('u_phone')?'has-error':''}}">
                            <label for="exampleInputEmail">Postal Code</label>
                            <input type="text" class="form-control" name="u_phone" id="u_phno" placeholder="123456789" maxlength="10 value="{{ old('u_phone') }}""><br>
                            {!! $errors->first('u_phone', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        Address unit and Address street COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        Province and Country NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_email')?'has-error':''}}">
                            <label for="exampleInputEmail">Province</label>
                            <input type="email" class="form-control" name="u_email" id="u_email" autocomplete="off" placeholder="Email" value="{{ old('u_email') }}"><br>
                            {!! $errors->first('u_email', '<div class="alert alert-danger">:message</div>') !!}
                        </div>

                        <div class="col-sm-6 form-group {{$errors->has('u_phone')?'has-error':''}}">
                            <label for="exampleInputEmail">Country</label>
                            <input type="text" class="form-control" name="u_phone" id="u_phno" placeholder="123456789" maxlength="10 value="{{ old('u_phone') }}""><br>
                            {!! $errors->first('u_phone', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        Province and Country COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        STUDENT Y/N RADIO SELECTION COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group  {{$errors->has('user_type')?'has-error':''}}">
                            <label for="checkboxEnrollment">Are you Student?</label>

                            <div class="col-sm-6 form-group">
                                <div class="form-check form-group" >
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="user_type" id="student_type" value="yes" {{(old('user_type') == 'yes') ? 'checked' : ''}} >
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="user_type" id="student_type" value="no" {{(old('user_type') == 'no') ? 'checked' : ''}} >
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        {!! $errors->first('user_type', '<div class="alert alert-danger">:message</div>') !!}
                    </div>
                    {{--                        STUDENT Y/N SELECTION ROW FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{--                        STUDENT YES CHECKED SELECTION ROW START--}}
                    <div class="row" id="yesStudent" style="display: none">
                        <div class="col-sm-12 form-group">
                            <label for="checkboxEnrollment">What's your status?</label>

                            <div class="col-sm-12 form-group">
                                {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                                {{--                        COLLEGE RADIO SELECTION COLUMNS START--}}
                                <div class="form-check form-group {{$errors->has('student_type')?'has-error':''}}" >
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="student_type" id="getStudentData" value="college" {{(old('student_type') == 'college') ? 'checked' : ''}} >
                                        College
                                    </label>
                                    <div class="col-sm-12 form-group {{$errors->has('college_type')?'has-error':''}}" id="datacollege" style="display: none">
                                        <select name="college_type">
                                            <option selected disabled>Select your Gender</option>
                                            <option>aaaa</option>
                                            <option>bbb</option>
                                        </select>
                                    </div>
                                </div>
                                {{--                        COLLEGE RADIO SELECTION COLUMNS ENDS--}}
                                {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                                {{--                        UNIVERSITY RADIO SELECTION COLUMNS START--}}
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="student_type" id="getStudentData" value="university" {{(old('student_type') == 'university') ? 'checked' : ''}} >
                                        University
                                    </label>
                                    <div class="col-sm-12 form-group {{$errors->has('university_type')?'has-error':''}}" id="datauni" style="display: none">

                                        <select id="datauni" name="university_type">
                                            <option selected disabled>Select your Gender</option>
                                            <option>aaaa</option>
                                            <option>bbb</option>
                                        </select>
                                    </div>
                                </div>

                                {{--                        UNIVERSITY RADIO SELECTION COLUMNS ENDS--}}
                                {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                                {{--                        HIGH SCHOOL RADIO SELECTION COLUMNS START--}}
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="student_type" id="getStudentData" value="highschool" {{(old('student_type') == 'highschool') ? 'checked' : ''}} >
                                        High School
                                    </label>
                                    <div class="col-sm-12 form-group {{$errors->has('highschool_type')?'has-error':''}}" id="dataschool" style="display: none">

                                        <select  id="dataschool" name="highschool_type">
                                            <option selected disabled>Select your Gender</option>
                                            <option>aaaa</option>
                                            <option>bbb</option>
                                        </select>
                                    </div>
                                </div>
                                {{--                        HIGH SCHOOL RADIO SELECTION COLUMNS ENDS--}}
                                {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                            </div>

                            {!! $errors->first('college_type', '<div class="alert alert-danger">:message</div>') !!}
                            {!! $errors->first('university_type', '<div class="alert alert-danger">:message</div>') !!}
                            {!! $errors->first('highschool_type', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                        {!! $errors->first('student_type', '<div class="alert alert-danger">:message</div>') !!}
                    </div>
                    {{--                        STUDENT YES RADIO SELECTION ROW ENDS--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{--                        STUDENT NO CHECKED SELECTION COLUMNS START--}}

                    <div class="row" id="noStudent" style="display: none">
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
                    {{--                        STUDENT NO CHECKED SELECTION ROW FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{--                        GENDER SELECTION COLUMNS START--}}
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-sm-12 form-group {{$errors->has('gender')?'has-error':''}}">--}}
                    {{--                            <label for="raduoButtonGender">Gender:</label>--}}
                    {{--                        </div>--}}

                    {{--                            <div class="col-sm-12 form-group">--}}
                    {{--                                <select class="form-control" name="gender" id="exampleFormControlSelect1">--}}
                    {{--                                    <option selected disabled>Select your Gender</option>--}}
                    {{--                                    <option value="Male" name="Male">Male</option>--}}
                    {{--                                    <option value="Female" name="FeMale">Female</option>--}}
                    {{--                                    <option value="Doesn't want to specify" name="Doesn't want to specify">Doesn't want to specify</option>--}}

                    {{--                                </select><br>--}}
                    {{--                                {!! $errors->first('gender', '<div class="alert alert-danger">:message</div>') !!}--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        GENDER SELECTION ROW FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{--                        TERMS and CONDITION SELECTION ROW START--}}
                    <div class="row">
                        <div class="col-sm-12 form-group {{$errors->has('u_accept')?'has-error':''}}">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="u_accept" value="1">
                                    I accept,
                                </label>
                            </div>
                            {!! $errors->first('u_accept', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        TERMS and CONDITION SELECTION ROW FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{--                    SUBMIT BUTTON --}}
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
