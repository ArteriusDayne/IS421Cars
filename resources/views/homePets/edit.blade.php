@extends('layouts.master')

@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-user"></i> Edit HomePet:</h3>
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


        {!! Form::open( array('action' => array('HomePetController@update', $pet['id']), 'method' => 'put') ) !!}
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ \Session::get('success')[0] }}</li>
            </ul>
        </div>
        @endif
        <div class="md-form">
            
            {!! Form::label('Location') !!}<br><br>
            {!! Form::select('location', array('featured' => 'featured', 'carousel' => 'carousel'), $pet['location'], array('id' => 'form3', 'class' => 'form-control') ) !!}
        </div>   
        <div class="md-form">
            
            {!! Form::label('Caption') !!}
            {!! Form::text('caption', $pet['caption'], array('id' => 'form3', 'class' => 'form-control')) !!}
        </div>        

        <div class="text-xs-center">
            {!! Form::token() !!}
            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
</div>
@endsection