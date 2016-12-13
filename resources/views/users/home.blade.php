
@extends('layouts.master')

@section('page_content')
<head style="text-align:center">Welcome, {{ $name }}</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@role('admin')
    <br>
    @include('admin.users')
    <a href="/homepets">View Pets on Homepage</a><br>
@endrole

@role('provider')
    <a href="/pets/create">Add new pet for Adoption</a><br>
@endrole

<a href="#">Request to be a Provider!</a><br>
@if( !\Auth::user()->hasRole('adopter') )
<?php $c= DB::table('pets')
        ->Join('users', 'pets.userid', '=', 'users.id')
        ->select('pets.name','pets.dob','pets.description')
        ->get();
?>

<table class="table table-bordered">

    <thead>

    <tr>
        <th>Pet Name</th>
        <th>Pet Date of Birth</th>
        <th>Pet Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach($c as $element)?>
        <td><?php echo $element->name?></td>
        <td><?php echo $element->dob?></td>
        <td><?php echo $element->description?></td>
    </tr>


</tbody>

@endif


<a><center>Current Pets</center></a>
    </table>
@endsection
