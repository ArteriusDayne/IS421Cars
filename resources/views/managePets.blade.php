@extends('layouts.master')
@section('page_content')
  <div class="card-block">
		<div class="row">
	<div class="col-md-12"><h1 align= "center">Heading</h1></div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Pet Name</th>
				<th>Provider Name</th>
				<th>Date of Birth</th>
				<th>Location</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mr. Snuffle</td>
				<td>Abby Barrett</td>
				<td>01/01/2011</td>
				<td>New York</td>
				<td>
					<a class="teal-text"><i class="fa fa-pencil"></i></a>
					<a class="red-text"><i class="fa fa-times"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Twinky</td>
				<td>Danny Collins</td>
				<td>01/01/2011</td>
				<td>New Jersey</td>
				<td>
					<a class="teal-text"><i class="fa fa-pencil"></i></a>
					<a class="red-text"><i class="fa fa-times"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Bruno</td>
				<td>Clara Ericson</td>
				<td>01/01/2011</td>
				<td>California</td>
				<td>
					<a class="teal-text"><i class="fa fa-pencil"></i></a>
					<a class="red-text"><i class="fa fa-times"></i></a>
				</td>
			</tr>

		</tbody>
	</table>
  </div>
</div>
@stop
