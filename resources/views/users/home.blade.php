@extends('layouts.master')

@section('page_content')
<h3 style="text-align:center">Welcome, {{ $name }}</h3>

@role('admin')
<br>
@include('admin.users')
@endrole

@if( !\Auth::user()->hasRole('provider') )
<a href="#">Request to be a Provider!</a><br>
@else
<a href="/pets/create">Add new pet for Adoption</a><br>
@endif

@if( !\Auth::user()->hasRole('adopter') )
<a href="#">Request to be an Adopter!</a><br>
@endif

@endsection