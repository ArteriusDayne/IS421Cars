@extends('layouts.master')
@section('page_content')
	<div class="card centercard">
		  <div class="card-block">
				<div class="row">
					<div class="col-md-12"><h1 align= "center">Heading</h1></div>
	
				  <div class="col-md-6">
					<img src="img/cars/2013crv.jpg" class="img-fluid" alt="Responsive image">
					<br><br>
					<div class="md-form">
								<input type="text" value="John Doe" id="form1" class="form-control" disabled>
								<label for="form1" class="disabled" >Provider name</label>
							</div>

							<div class="md-form">
								<input type="text" value="New York" id="form2" class="form-control" disabled>
								<label for="form2" class="disabled">Location</label>
							</div>
				  </div>
				  <div class="col-md-6">
						<div class="card-block">
						<!--Body-->
							<div class="md-form">
								<input type="text" value="Tinkles"id="form3" class="form-control" disabled>
								<label for="form3" class="disabled">Puppy name</label>
							</div>

							<div class="md-form">
								<input type="text"  value="2003-04-03" id="form4" class="form-control" disabled>
								<label for="form4" class="disabled">Date of birth</label>
							</div>

							<div class="md-form">
								<input type="text" value="3.50" id="form5" class="form-control" disabled>
								<label for="form5" class="disabled">Height</label>
							</div>

							<div class="md-form">
								<input type="text" value="3.20" id="form6" class="form-control" disabled>
								<label for="form6" class="disabled">weight</label>
							</div>
							<div class="md-form">
								<input type="text" value="a Cat" id="form7" class="form-control" disabled>
								<label for="form7" class="disabled">description</label>
							</div>

						</div>
						<a class="btn btn-primary" href="beginsale.html" role="button">Adopt</a>
						<a class="btn btn-primary" href="index.html" role="button">Back</a>
					</div>
			  </div>
		</div>
	</div>
@stop
