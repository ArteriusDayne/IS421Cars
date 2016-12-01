@extends('layouts.master')

@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-usd"></i> Start New Sale</h3>
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
        {!! Form::open(array('route' => 'sales.store')) !!}
        <div class="md-form">
            <i class="fa fa-search prefix"></i>
            {!! Form::label('vin', 'VIN#') !!}
            {!! Form::text('vin', null, array('class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-calendar prefix"></i>
            {!! Form::label('Year') !!}
            {!! Form::text('year', null, array('class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-car prefix"></i>
            {!! Form::label('Make') !!}
            {!! Form::text('make', null, array('class' => 'form-control')) !!}
        </div>
        <div class="md-form">
            <i class="fa fa-car prefix"></i>
            {!! Form::label('Model') !!}
            {!! Form::text('model', null, array('class' => 'form-control')) !!}
        </div>
        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Add Car for Sale', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection