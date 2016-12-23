<?php
$calendar_events=DB::table('calendar_events')->get();

?>

@extends('layouts.master')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="331709663044-ri6basml00uvrrvsto2i03dukd56um3m.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Schedule</title>

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- material -->
    <link href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('https://dl.dropboxusercontent.com/s/jfd5alqs3yw2p54/main.css') }}" rel="stylesheet">
    <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {!! Analytics::render() !!}

</head>
@section('content')
    <div class="page-header">
        <h1>Calendar Events</h1>
    </div>
    <div id='calendar'></div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>LOCATION</th>
                    <th>START</th>
                    <th>END</th>


                    <th class="text-right">OPTIONS</th>
                </tr>
                </thead>

                <tbody>


                @foreach($calendar_events as $calendar_event)
                    <tr>
                        <td>{{$calendar_event->id}}</td>
                        <td>{{$calendar_event->name}}</td>
                        <td>{{$calendar_event->description}}</td>
                        <td>{{$calendar_event->location}}</td>
                        <td>{{$calendar_event->eventstart}}</td>
                        <td>{{$calendar_event->eventend}}</td>


                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>
                            @if(Entrust::hasRole('admin'))
                                <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
                                <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                            @endif
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            @if(Entrust::hasRole('admin'))
                <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Create</a>
            @endif
        </div>
    </div>
    