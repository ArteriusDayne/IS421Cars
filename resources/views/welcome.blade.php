@extends('layouts.master')
@section('home_slider')
<?php $homePets = App\HomePet::getCarouselPets(); //print_r($homePets); ?>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top:40px;">

    <!--Indicators-->
    <ol class="carousel-indicators">       
        @foreach($homePets as $index => $pet)
            @if($index == 0)
                <li data-target="#carousel-example-2" data-slide-to={{$index}} class="active"></li>
            @else
                <li data-target="#carousel-example-2" data-slide-to={{$index}}></li>
            @endif
        @endforeach
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

    @foreach($homePets as $index => $pet)

        @if($index == 0)
            <div class="carousel-item active">
        @else
            <div class="carousel-item">
        @endif
                <!--Mask color-->
                <div class="view hm-black-slight">
                    <img src={{$pet->image}} class="img-fluid" alt="Corgis">
                    <div class="full-bg-img">
                    </div>
                </div>
                <!--Caption-->
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive">{{$pet->caption}}</h3>
                    </div>
                </div>
                <!--Caption-->
            </div>

    @endforeach

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
@endsection
@section('page_content')
<h1 style="text-align:center">Fluffies!</h1>
<div class="card-deck-wrapper">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img" src="img/puppers/sized/pomsky.jpg" alt="No Cars Photos">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="btn btn-primary dbutton" href="deatils.html" role="button">Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img" src="img/puppers/sized/hamster-1.jpg" alt="No Cars Photos">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="btn btn-primary dbutton" href="deatils.html" role="button">Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img" src="img/puppers/sized/doggo2.jpg" alt="No Cars Photos">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="btn btn-primary" href="deatils.html" role="button">Details</a>
            </div>
        </div>
    </div>
</div>

@endsection
