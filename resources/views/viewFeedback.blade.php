@extends('layouts.master')
@section('page_content')
<?php
$feedbacks=DB::table('feedback')->get();
?>
@foreach($feedbacks as $feedback)

<div class="card-block">
	<h1 align="center" >Feedback</h1> <br />
	<h5>{{$feedback->name}}</h5> <br />
	<p>{{$feedback->email}}</p>
	<p>{{$feedback->question}}</p>
    <div class="text-xs-center">
    	<p>{{$feedback->comment}}</p>
    </div>
</div>

@endforeach

@stop
