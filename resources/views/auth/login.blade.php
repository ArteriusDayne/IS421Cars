@extends('layouts.master')
@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Access Your Account:</h3>
            @if(count($errors))
            <div class ="alert alert-danger">
                <ul>
                    @foreach($errors->all()as $error)
                    <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        {!!Form::open(array('route' => 'handleLogin')) !!}
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('Your email') !!}
            {!! Form::text('email', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            {!! Form::label('Your password') !!}
            {!! Form::password('password', array('id' => 'form4', 'class' => 'form-control')) !!}
        </div>
        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Sign in!', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
        <div class="text-xs-center"><a href="auth/google">G+</a></div>
    </div>
    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not a member? {{ link_to_route('users.create', 'Sign up') }}</p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>
</div>
@endsection
