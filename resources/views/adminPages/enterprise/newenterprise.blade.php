@extends('layout.master2')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/select2/select2.min.css') !!}
  {!! Html::style('/assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') !!}
  {!! Html::style('/assets/plugins/dropzone/dropzone.min.css') !!}
  {!! Html::style('/assets/plugins/dropify/css/dropify.min.css') !!}
  {!! Html::style('/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') !!}
  {!! Html::style('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') !!}
  {!! Html::style('/assets/plugins/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') !!}

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Enterprise</h4>
      <form class="cmxform" id="enterpriseform" action={{url('/enterprise')}} method="POST">
          {{@csrf_field()}}
          <fieldset>
            <div class="form-group  {{$errors->has('companyname')?'has-error':''}}">
              <label for="companyname">Company Name</label>
              <input id="companyname" class="form-control" name="companyname" type="companyname">
              {!!$errors->first('companyname','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('efirstname')?'has-error':''}}">
              <label for="efirstname">Enterprise First Name</label>
              <input id="efirstname" class="form-control" name="efirstname" type="efirstname">
              {!!$errors->first('efirstname','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('elastname')?'has-error':''}}">
              <label for="elastname">Enterprise Last Name</label>
              <input id="elastname" class="form-control" name="elastname" type="elastname">
              {!!$errors->first('elastname','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('eemail')?'has-error':''}}">
              <label for="eemail">Enterprise Email</label>
              <input id="eemail" class="form-control" name="eemail" type="eemail">
              {!!$errors->first('eemail','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('etitle')?'has-error':''}}">
              <label for="etitle">Enterprise Title</label>
              <input id="etitle" class="form-control" name="etitle" type="etitle">
              {!!$errors->first('etitle','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('econtact')?'has-error':''}}">
              <label for="econtact">Contact Number</label>
              <input id="econtact" class="form-control" name="econtact" type="econtact">
              {!!$errors->first('econtact','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('ewebsite')?'has-error':''}}">
              <label for="ewebsite">Enterprise Website Details</label>
              <input id="ewebsite" class="form-control" name="ewebsite" type="ewebsite">
              {!!$errors->first('ewebsite','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('epassword')?'has-error':''}} ">
              <label for="epassword">Password</label>
              <input id="epassword" class="form-control" name="epassword" type="epassword">
              {!!$errors->first('epassword','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('confirm_password')?'has-error':''}}">
              <label for="confirm_password">Confirm password</label>
              <input id="confirm_password" class="form-control" name="confirm_password" type="password">
              {!!$errors->first('confirm_password','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('instagram')?'has-error':''}}">
              <label for="einstagram">Post on Instagram</label><br>
              <input type="radio" id="iyes" name="instagram" value="iyes">
              <label for="iyes">Yes</label>
              <input type="radio" id="ino" name="instagram" value="ino">
              <label for="ino">No</label><br>
              {!!$errors->first('instagram','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('facebook')?'has-error':''}}">
              <label for="efacebook">Post on Facebook</label><br>
              <input type="radio" id="eyes" name="facebook" value="yes">
              <label for="eyes">Yes</label>
              <input type="radio" id="eno" name="facebook" value="no">
              <label for="eno">No</label><br>
              {!!$errors->first('facebook','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('erange')?'has-error':''}}">
              <label for="erange">Employees Range</label>
              <input id="erange" class="form-control" name="erange" type="erange">
              {!!$errors->first('erange','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('eindustry')?'has-error':''}}">
              <label for="eindustry">Employees Industry</label>
              <input id="eindustry" class="form-control" name="eindustry" type="eindustry">
              {!!$errors->first('eindustry','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <label>Address Details</label>

              <div class="form-group {{$errors->has('ecountry')?'has-error':''}}">
                <label for="ecountry">Country</label>
                <input id="ecountry" class="form-control" name="ecountry" type="ecountry">
                {!!$errors->first('ecountry','<div class="alert alert-danger">:message</div>')!!}
              </div>
              <div class="form-group {{$errors->has('e_streetno')?'has-error':''}}">
                <label for="e_streetno">House Number</label>
                <input id="e_streetno" class="form-control" name="e_streetno" type="e_streetno">
                {!!$errors->first('e_streetno','<div class="alert alert-danger">:message</div>')!!}
              </div>
              <div class="form-group {{$errors->has('e_addressstreet')?'has-error':''}}">
              <label for="e_addressstreet">Street Name</label>
              <input id="e_addressstreet" class="form-control" name="e_addressstreet" type="e_addressstreet">
              {!!$errors->first('e_addressstreet','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group  {{$errors->has('e_addressunit')?'has-error':''}}">
              <label for="e_addressunit">Unit No</label>
              <input id="e_addressunit" class="form-control" name="e_addressunit" type="e_addressunit">
              {!!$errors->first('e_addressunit','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('e_addresscity')?'has-error':''}}">
              <label for="e_addresscity">City</label>
              <input id="e_addresscity" class="form-control" name="e_addresscity" type="e_addresscity">
              {!!$errors->first('e_addresscity','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('e_addressprovince')?'has-error':''}}">
              <label for="e_addressprovince">Province</label>
              <input id="e_addressprovince" class="form-control" name="e_addressprovince" type="e_addressprovince">
              {!!$errors->first('e_addressprovince','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <div class="form-group {{$errors->has('e_postalcode')?'has-error':''}}">
              <label for="e_postalcode">Postal Code</label>
              <input id="e_postalcode" class="form-control" name="e_postalcode" type="e_postalcode">
              {!!$errors->first('e_postalcode','<div class="alert alert-danger">:message</div>')!!}
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
