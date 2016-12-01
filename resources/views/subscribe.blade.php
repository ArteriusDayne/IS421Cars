@extends('layouts.master')
@section('page_content')
<div class="card">
    <div class="card-block">
        <div class="text-xs-center">
            <h3><i class="fa fa-user"></i>Subscribe</h3>
        </div>
        <p>We'll write rarely, but only the best content.</p>
        <br>
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" class="form-control">
            <label for="form3">Your name</label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="text-xs-center">
            <a href="success_post.html" button class="btn btn-primary">Send</button></a>
        </div>

    </div>
</div>
@stop