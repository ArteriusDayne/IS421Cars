@extends('layouts.master')

@section('page_content')
    <div class="card">
        <div class="card-block">
            <div class="text-xs-center">
                <h3><i class="fa fa-user"></i> Add new pet for adoption:</h3>
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
                {!! Form::label('First Name') !!}
                {!! Form::text('firstName', null, array('id' => 'form3', 'class' => 'form-control')) !!}
            </div>
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                {!! Form::label('Last Name') !!}
                {!! Form::text('lastName', null, array('id' => 'form3', 'class' => 'form-control')) !!}
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                {!! Form::label('username', 'Your username') !!}
                {!! Form::text('username', null, array('id' => 'form2', 'class' => 'form-control')) !!}
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
            <div class="about-section">
                <div class="text-content">
                    <div class="span7 offset1">
                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h2>{!! Session::get('success') !!}</h2>
                            </div>
                        @endif
                        <div class="secure">Upload Pet</div>
                        {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
                        <div class="control-group">
                            <div class="controls">
                                {!! Form::file('image') !!}
                                <p class="errors">{!!$errors->first('image')!!}</p>
                                @if(Session::has('error'))
                                    <p class="errors">{!! Session::get('error') !!}</p>
                                @endif
                            </div>
                        </div>
                        <div id="success"> </div>
                        {!! Form::submit('Upload', array('class'=>'send-btn')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="modal-footer">
            <div class="options">
                <p>Already a member <a href="/login">Sign In</a></p>
                <p>NewsLetter <a href="/subscribe">Subscribe Me</a></p>
            </div>
        </div>
    </div>
@endsection
