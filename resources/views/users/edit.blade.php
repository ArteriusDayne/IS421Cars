@extends('layouts.master')

@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-user"></i> Edit User:</h3>
            @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>


        {!! Form::open( array('action' => array('UsersController@update', $user['id']), 'method' => 'put') ) !!}
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ \Session::get('success')[0] }}</li>
            </ul>
        </div>
        @endif
        <div class="md-form">
            {!! Form::label('Action') !!}<br><br>
            {!! Form::select('action', array('addRole' => 'add role', 'deleteRole' => 'delete role'), array('id' => 'form3', 'class' => 'form-control') ) !!}
        </div>   
        <div class="md-form">
            {!! Form::label('Role') !!}<br><br>
            {!! Form::select('role', array('admin' => 'admin', 'provider' => 'provider'), array('id' => 'form3', 'class' => 'form-control') ) !!}
        </div>   
      
        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
</div>
@endsection