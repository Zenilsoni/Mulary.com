@extends('layout.master2')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/api/alldata">All Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">User Signup Table</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">All Users Data</h6>
        <p class="card-description">Add class <code>.table-bordered</code></p>
        <div class="table-responsive pt-3">
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
                    <?php
                      if($user->status=="Pending"){
                       echo " <td class='text-warning'> $user->status</td>";
                      }
                      else if($user->status=="Approved"){
                       echo " <td class='text-success'> $user->status </td> ";
                      }
                      else{
                       echo "<td class='text-danger'> $user->status </td> ";
                      }                    
                    ?>
                    
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