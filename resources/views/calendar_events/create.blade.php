@extends('layouts.master')
@extends('layouts.calendarEventLayout')

@section('content')
    <div class="page-header">
        <h1>Calendar Events / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">Name</label>
                     <input type="text" name="name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" name="description" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="title">Location</label>
                    <input type="text" name="location" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="start">START (Date and time must be formatted Year-Month-Day Hours:Minutes:Seconds)</label>
                     <input type="text" name="eventstart" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="end">END (Date and time must be formatted Year-Month-Day Hours:Minutes:Seconds)</label>
                     <input type="text" name="eventend" class="form-control" value=""/>
                </div>




            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>


@endsection
