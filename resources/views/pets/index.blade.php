@extends('layouts.master')
@section('page_content')

<div class="card-deck-wrapper">
    <div class="card-deck">
		<div class="row">
			@foreach($pets as $pet)
				<div class ="col-md-3" style="padding:0px;">
						<div class="card">
						<a href = "/details">
							<img class="card-img-top img" style= "width:500px; height:200px; object-fit:cover; overflow:hidden;"src="{{ asset('img/animals/providerUpload/').'/'. $pet['image'] }}" alt="No Animal Photos"> 
							<div class="card-block">
								<h4 class="card-title">{{ $pet['name'] }}</h4>
								<p class="text-muted text-center">
								{{ $pet['description'] }}
								<br>
								Location: {{ $pet['location'] }}</p>
								<a href="/details">View more details</a></a>
							</div>
						</div>
						<br>
				</div>
			@endforeach
		</div>
    </div>
</div>

@stop