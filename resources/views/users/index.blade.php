@extends('layouts.master')
@section('page_content')
  	<div class="card centercard">
  		  <div class="card-block">
  				<div class="row">
            <div class="col-md-12"><h1 align= "center">Manage Users</h1></div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

					@foreach(App\User::all() as $user)
					<tr>
					    <td>{{ $user['id'] }}</td>
					    <td>{{ $user['name'] }}</td>
					    <td>{{ $user['email'] }}</td>
					    <td>{{ $user['telephone'] }}</td>
					     <td><a class="teal-text"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="red-text"><i class="fa fa-times"></i></a></td>
					</tr>
					@endforeach

 

                </tbody>
            </table>

          </div>
        </div>
    </div>

@stop