@extends('layouts.master')
@section('page_content')

<h4>Carousel</h4>
<table class="table">
    <thead class="thead-inverse">
        <tr>
            <th class="col-md-4">Image</th>
            <th class="col-md-2">Name</th>
            <th class="col-md-2">Caption</th>
            <th class="col-md-2"> &nbsp;</th>
            <th class="col-md-2"> &nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($homePets['carousel'] as $pet)
        <tr>
        	<td class="col-md-4"><img src={{$pet->image}} height=95px; width=235px;></td>
            <td class="col-md-2">{{ $pet->name }}</td>
            <td class="col-md-2">{{ $pet->caption }}</td>
            <td class="col-md-2"><a href="{{ action('HomePetController@edit', ['id' => $pet->id]) }}">Edit</a></td>
            <td class="col-md-2">
            	{!! Form::open(['action' => ['HomePetController@destroy', $pet->id], 'method' => 'delete']) !!}
				{!! Form::submit('Delete') !!}
				{!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<h4>Featured</h4>
<table class="table">
    <thead class="thead-inverse">
        <tr>
            <th class="col-md-4">Image</th>
            <th class="col-md-2">Name</th>
            <th class="col-md-2">Caption</th>
            <th class="col-md-2"> &nbsp;</th>
            <th class="col-md-2"> &nbsp;</th>            
        </tr>
    </thead>
    <tbody>
        @foreach($homePets['featured'] as $pet)
        <tr>
        	<td class="col-md-4"><img src={{$pet->image}} height=95px; width=235px;></td>
            <td class="col-md-2">{{ $pet->name }}</td>
            <td class="col-md-2">{{ $pet->caption }}</td>
            <td class="col-md-2"><a href="{{ action('HomePetController@edit', ['id' => $pet->id]) }}">Edit</a></td>
            <td class="col-md-2">            	
            {!! Form::open(['action' => ['HomePetController@destroy', $pet->id], 'method' => 'delete']) !!}
			{!! Form::submit('Delete') !!}
			{!! Form::close() !!}
			</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection