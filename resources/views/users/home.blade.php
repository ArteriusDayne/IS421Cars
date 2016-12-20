
@extends('layouts.master')

@section('page_content')
<head style="text-align:center">Welcome, {{ $name }}</head>

@role('admin')
    <br>
    @include('admin.users')
    
@endrole

@role('provider')
    <a href="/pets/create">Add new pet for Adoption</a><br>
@endrole

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