@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">All Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Approved Users Data</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  Sr No
                </th>
                <th>
                  User Id
                </th>
                <th>
                    Signed Up Id
                </th>
                <th>
                  UserName
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  College Name
                </th>
                <th>
                  Gender
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1 ?>
              @foreach ($users as $user)              
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->signup_id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->firstname . " ". $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>                    
                </tr>
              @endforeach           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection