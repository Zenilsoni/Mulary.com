@extends('layout.master')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pr-md-0">
                            <div class="auth-left-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

                            </div>
                        </div>
                        <div class="col-md-8 pl-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                                <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Email address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Emailz">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{}}" class="btn btn-primary mr-2 mb-2 mb-md-0">Login</a>
                                    </div>
                                    <a href="{{url('/signup')}}" class="d-block mt-3 ">Not a user? Sign up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
