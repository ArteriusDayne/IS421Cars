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


        {!! Form::open(array('action' => 'PetsController@store','files'=>true)) !!}
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, array('id' => 'form3', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            {!! Form::label('Date of Birth') !!}
            {!! Form::text('dob', null, array('id' => 'form3', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('weight', 'Weight') !!}
            {!! Form::text('weight', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('height', 'Height') !!}
            {!! Form::text('height', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('location', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null, array('id' => 'form2', 'class' => 'form-control')) !!}
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>

            {!! Form::file('image', null, array('id' => 'form2', 'class' => 'form-control')) !!}
            <p class="errors">{!!$errors->first('image')!!}</p>
        </div>            

        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
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