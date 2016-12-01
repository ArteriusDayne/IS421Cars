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
    </div>
    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not a member? {{ link_to_route('users.create', 'Sign up') }}</p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>
</div>    

<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
    }
    ;
</script>
@endsection