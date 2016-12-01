@extends('layouts.master')

@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-user"></i> Register:</h3>
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
        {!! Form::open(array('route' => 'users.store')) !!}
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            {!! Form::label('First and Last Name') !!}
            {!! Form::text('name', null, array('id' => 'form3', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-phone prefix"></i>
            {!! Form::label('Your telephone number') !!}
            {!! Form::text('telephone', null, array('id' => 'form3', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('email', 'Your email address') !!}
            {!! Form::text('email', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            {!! Form::label('password') !!}
            {!! Form::password('password', array('id' => 'form4', 'class' => 'form-control')) !!}
        </div>
        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Sign Up!', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Already a member? <a href="/login">Sign In</a></p>
            <p>NewsLetter <a href="/subscribe">Subscribe Me</a></p>
        </div>
    </div>
</div>
@endsection
