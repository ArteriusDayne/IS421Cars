@extends('layouts.master')
@section('page_content')

            @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
	<div class="card centercard">
		  <div class="card-block">
				<div class="row">
					<div class="col-md-12"><h1 align= "center">Heading</h1></div>
	
				  <div class="col-md-6">
					<img src={{$pet->image}} class="img-fluid" alt="Responsive image">
					<br><br>
					<div class="md-form">
								<input type="text" value="{{$pet->ownerName}}" id="form1" class="form-control" disabled>
								<label for="form1" class="disabled" >Provider name</label>
							</div>

							<div class="md-form">
								<input type="text" value="{{$pet->location}}" id="form2" class="form-control" disabled>
								<label for="form2" class="disabled">Location</label>
							</div>
				  </div>
				  <div class="col-md-6">
						<div class="card-block">
						<!--Body-->
							<div class="md-form">
								<input type="text" value="{{$pet->name}}"id="form3" class="form-control" disabled>
								<label for="form3" class="disabled">Puppy name</label>
							</div>

							<div class="md-form">
								<input type="text"  value="{{$pet->dob}}" id="form4" class="form-control" disabled>
								<label for="form4" class="disabled">Date of birth</label>
							</div>

							<div class="md-form">
								<input type="text" value="{{$pet->height}}" id="form5" class="form-control" disabled>
								<label for="form5" class="disabled">Height</label>
							</div>

							<div class="md-form">
								<input type="text" value="{{$pet->weight}}" id="form6" class="form-control" disabled>
								<label for="form6" class="disabled">weight</label>
							</div>
							<div class="md-form">
								<input type="text" value="{{$pet->description}}" id="form7" class="form-control" disabled>
								<label for="form7" class="disabled">description</label>
							</div>

						</div>
						<a class="btn btn-primary" href="#" role="button">Adopt</a>

						@role('admin')

				    	{!! Form::open(['action' => ['HomePetController@store'], 'method' => 'post','style'=>'display:inline-block']) !!}
				    	{!! Form::hidden('id', $pet->id) !!}
				    	<button class="btn btn-primary" type="submit" role="button">Add HomePet</button>
						{!! Form::close() !!}

						@endrole

						<a class="btn btn-primary" href="/pets" role="button">Back</a>
					</div>
			  </div>
		</div>
	</div>
@stop
