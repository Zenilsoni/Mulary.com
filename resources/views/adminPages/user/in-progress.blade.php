@extends('layout.master2')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">All Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Pending Users Data</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive pt-3">
          <form method="post" action="/mailer">
            @csrf
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  Sr No
                </th>
                <th>
                  Id
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
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1 ?>
              @foreach ($users as $user)              
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $user->signup_id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->firstname . " ". $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>         
                    <td>
                      <button type="submit" name="approve" value="{{ $user->signup_id }}" class="btn btn-success" >Approve</button>
                      <button type="button" name="disapprove" value="{{ $user->signup_id }}" class="btn btn-danger">DisApprove</button>
                    </td>
                </tr>
              @endforeach           
            </tbody>
          </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection