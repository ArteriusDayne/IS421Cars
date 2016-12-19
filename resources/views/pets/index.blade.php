@extends('layouts.master')
@section('page_content')

<div class="card-deck-wrapper">
    <div class="card-deck">
		<div class="row">
			@foreach($pets as $pet)
				<div class ="col-md-3" style="padding:0;">
						<div class="card">
							
							<a href="{{ action('PetsController@show', ['id' => $pet['id']]) }}">
							<img class="card-img-top img" src="{{ $pet['image'] }}" alt="Pet Image" style= "display:block; max-width:400px; max-height:200px; width:100%; height:10em;"
							</a>
							
							<div class="card-block">
								<h4 class="card-title">{{ $pet['name'] }}</h4>
								<p>
								Location: {{ $pet['location'] }}</p>
								<p class="text-muted text-center"style="height:1.875em;  line-height:0.9375em; overflow:hidden;
								text-overflow:ellipsis;">
								{{ $pet['description'] }}
								</p>
								<a href="{{ action('PetsController@show', ['id' => $pet['id']]) }}">View more details</a>
							</div>
						</div>
						<br>
				</div>
			@endforeach
		</div>
    </div>
</div>

@stop
