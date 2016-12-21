@extends('layouts.master')
@section('home_slider')
<?php $homePets = App\HomePet::getCarouselPets();  ?>

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
                    <img   src={{$pet->image}} class="img-fluid" alt="Corgis">
                    <div  class="full-bg-img">
                    </div>
                </div>
                <!--Caption-->
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                       <a href="{{ action('PetsController@show', ['id' => $pet->pet_id ] ) }}" style="color:white;"> <h3 class="h3-responsive">{{$pet->name}}</h3>
                       </a>
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

<?php $homePets = App\HomePet::getFeaturedPets(); ?>
        @foreach($homePets as $pet)
        <div class ="col-md-4" style="padding:0;">
            <div class="card">
                <img class="card-img-top img" src={{$pet->image}} alt="Pet">
                <div class="card-block">
                    <h4 class="card-title">{{$pet->name}}</h4>
                    <p class="card-text">{{$pet->description}}</p>
                    <a class="btn btn-primary dbutton" href="{{ action('PetsController@show', ['id' => $pet->pet_id ] ) }}" role="button">Details</a>
                </div>
            </div><br>
        </div>
        @endforeach


    </div>
</div>
@endsection
