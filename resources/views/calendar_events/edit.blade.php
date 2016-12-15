@extends('layouts.master')
@extends('layouts.calendarEventLayout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.update', $calendar_event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="id">ID</label>
                    <p class="form-control-static">{{$calendar_event->id}}</p>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$calendar_event->name}}"/>
                </div>
                <div class="form-group">
                     <label for="title">Description</label>
                     <input type="text" name="description" class="form-control" value="{{$calendar_event->description}}"/>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" value="{{$calendar_event->location}}"/>
                </div>
                    <div class="form-group">
                     <label for="">START (Date and time must be formatted Year-Month-Day Hours:Minutes:Seconds)</label>
                     <input type="text" name="eventstart" class="form-control" value="{{$calendar_event->eventstart}}"/>
                </div>
                    <div class="form-group">
                     <label for="end">END   (Date and time must be formatted Year-Month-Day Hours:Minutes:Seconds)</label>
                     <input type="text" name="eventend" class="form-control" value="{{$calendar_event->eventend}}"/>
                </div>




            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
            </form>


        </div>


    </div>


@endsection
