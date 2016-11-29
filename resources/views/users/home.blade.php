@extends('layouts.master')

@section('page_content')
	<h3 style="text-align:center">Welcome, {{ $name }}</h3>

    @role('admin')
        <br>
        @include('admin.users')
    @endrole

@endsection