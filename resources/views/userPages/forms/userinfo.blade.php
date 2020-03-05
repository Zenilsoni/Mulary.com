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
                    <input type="text" class="form-control" name="reg_id" value="{{$id}}" hidden>
                    {{--                        Password AND Confirm Password COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_paasword')?'has-error':''}}">

                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" name="u_password" placeholder="Password" value="{{ old('u_fname') }}"><br>
                            {!! $errors->first('u_password', '<div class="alert alert-danger">:message</div>') !!}

                        </div><!-- Col of last name -->
                        <div class="col-sm-6 form-group {{$errors->has('u_cnfpassword')?'has-error':''}}">

                            <label class="control-label">Confirm Password</label>
                            <input type="password" class="form-control" name="u_cnfpassword" placeholder="Confirm Password" value="{{ old('u_lname') }}"><br>
                            {!! $errors->first('u_cnfpassword', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        Password AND Confirm Password COLUMNS FINISH--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        Address unit and Address street NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="exampleInputEmail">Address Unit</label>
                            <input type="text" class="form-control" name="u_addunit" id="u_email" autocomplete="off" placeholder="Address Unit" value="{{ old('u_email') }}"><br>

                        </div>

                        <div class="col-sm-6 form-group {{$errors->has('u_addstreet')?'has-error':''}}">
                            <label for="exampleInputEmail">Address Street</label>
                            <input type="text" class="form-control" name="u_addstreet" id="u_phno" placeholder="Address Street" maxlength="10 value="{{ old('u_phone') }}""><br>

                        </div>
                    </div>
                    {!! $errors->first('u_addstreet', '<div class="alert alert-danger">:message</div>') !!}
                    {{--                        Address unit and Address street COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        City and Postal Code NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_addcity')?'has-error':''}}">
                            <label for="exampleInputEmail">City</label>
                            <input type="text   " class="form-control" name="u_addcity" id="u_email" autocomplete="off" placeholder="City" value="{{ old('u_email') }}"><br>
                            {!! $errors->first('u_addcity', '<div class="alert alert-danger">:message</div>') !!}
                        </div>

                        <div class="col-sm-6 form-group {{$errors->has('u_addpostal')?'has-error':''}}">
                            <label for="exampleInputEmail">Postal Code</label>
                            <input type="text" class="form-control" name="u_addpostal" id="u_phno" placeholder="postal code" maxlength="10 value="{{ old('u_phone') }}""><br>
                            {!! $errors->first('u_addpostal', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                    </div>
                    {{--                        City and Postal Code NAME COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                    {{--                        Province and Country NAME COLUMNS START--}}
                    <div class="row">
                        <div class="col-sm-6 form-group {{$errors->has('u_addprovince')?'has-error':''}}" id="datacollege" >
                            <label for="exampleInputEmail">Province</label>
                            <select name="u_addprovince">
                                <option selected disabled>Select your Province</option>
                                <option>Ontario</option>
                                <option>Alberta</option>
                                <option>British Columbia</option>
                                <option>Maintoba</option>
                                <option>New Founland and labrador</option>
                                <option>Nova Scotia</option>
                                <option>Prince Edward Island</option>
                                <option>Saskatchewan</option>
                                <option>Quebec</option>
                            </select>

                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="exampleInputEmail">Country</label>
                            <input type="text" class="form-control" name="u_addcountry" id="u_phno"  maxlength="10" value="Canada" readonly>
                        </div>
                    </div>
                    {!! $errors->first('u_addprovince', '<div class="alert alert-danger">:message</div>') !!}
                    {{--                        Province and Country COLUMNS FINISh--}}
                    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
