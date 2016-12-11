@extends('layouts.master')
@section('page_content')

<div class="card-deck-wrapper">
    <div class="card-deck">
		<div class="row">
			@foreach($pets as $pet)
				<div class ="col-md-3" style="padding:0;">
						<div class="card">

							<img class="card-img-top img" src="{{ $pet['image'] }}" alt="Pet Image">

							<div class="card-block">
								<h4 class="card-title">{{ $pet['name'] }}</h4>
								<p class="text-muted text-center">
								{{ $pet['description'] }}
								<br>
								Location: {{ $pet['location'] }}</p>
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