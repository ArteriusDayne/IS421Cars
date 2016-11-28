@extends('layouts.master')
@section('home_slider')
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top:40px;">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
	<li data-target="#carousel-example-2" data-slide-to="3"></li>
	<li data-target="#carousel-example-2" data-slide-to="4"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/cars/buggati.png" class="img-fluid" alt="all American">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">Exotic cars</h3>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/cars/kia.png" class="img-fluid" alt="Kia Sales Event">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">Don't Miss the Kia Big Sales Event</h3>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/cars/buycars.png" class="img-fluid" alt="we buy cars">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">We Buy Cars</h3>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/Third slide-->
		
        <!--Forth slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/cars/nissan.png" class="img-fluid" alt="Nissan Z370">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">When Speed and Style combined</h3>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/Forth slide-->
		
        <!--Fifth slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/cars/car_crv.png" class="img-fluid" alt="Honda CRV">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">Winter is here do you need an SUV ?</h3>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/Fifth slide-->
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
	<h1 style="text-align:center">Best Sellers</h1>
	<h3 style="text-align:center">Welcome, {{ $firstName . " " . $lastName }}</h3>

    @role('admin')
        <br>
        @include('admin.users')
    @endrole

    @role('salesPerson')
        {{ link_to_route('cars.create', 'Add Car to Inventory') }}
	<br>

	<h4>Sales</h4>
	{{ link_to_route('sales', 'New Sale') }}

	<table class="table">
		<thead>
			<tr>
				<th>Sale ID</th>
				<th>VIN#</th>
				<th>Year</th>
				<th>Make</th>
				<th>Model</th>
				<th>Sale Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sales as $sale)
				<tr> 
					<td>{{ $sale['id'] }}</td>
					<td>{{ $sale['vin'] }}</td>
					<td>{{ $sale->car['year'] }}</td>
					<td>{{ $sale->car['make'] }}</td>
					<td>{{ $sale->car['model'] }}</td>
					<td>{{ $sale->car['saleStatus'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
    @endrole
<div class="card-deck-wrapper">
		<div class="card-deck">
			<div class="card">
			<img class="card-img-top img" src="img/cars/buggati.png" alt="No Cars Photos">
				<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a class="btn btn-primary dbutton" href="deatils.html" role="button">Details</a>
				</div>
			</div>
			<div class="card">
			<img class="card-img-top img" src="img/cars/buggati.png" alt="No Cars Photos">
				<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a class="btn btn-primary dbutton" href="deatils.html" role="button">Details</a>
				</div>
			</div>
			<div class="card">
			<img class="card-img-top img" src="img/cars/buggati.png" alt="No Cars Photos">
				<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a class="btn btn-primary" href="deatils.html" role="button">Details</a>
				</div>
			</div>
		</div>
	</div>
@endsection