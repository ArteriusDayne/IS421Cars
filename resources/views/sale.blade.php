@extends('layouts.master')
@section('page_content')
<center>

    <a href="newsale.html" class="btn btn-danger" role="button"><h3>Begin a Sale</h3></a>

</center>
<div class="container">

    <table class="table">


        <tbody>
            <tr class="car1">
                <td><img src="img/cars/hondacivic.jpg" class="img-rounded" alt="Honda Civic"></td>
                <td>Car1</td>
                <td>
                    <a href="continue.html" class="btn btn-info btn-md" role="button">Continue Sale</a>
                    <a href="remove.html" class="btn btn-info btn-md" role="button">Remove Sale</a>
                </td>
            </tr>
            <tr class="car2">
                <td><img src="img/cars/hondacivic.jpg" class="img-rounded" alt="Honda Civic"></td>
                <td>Car2</td>
                <td>
                    <a href="continue.html" class="btn btn-info btn-md" role="button">Continue Sale</a>
                    <a href="remove.html" class="btn btn-info btn-md" role="button">Remove Sale</a>
                </td>

            </tr>
            <tr class="car3">
                <td><img src="img/cars/hondacivic.jpg" class="img-rounded" alt="Honda Civic"></td>
                <td>Car3</td>
                <td>
                    <a href="continue.html" class="btn btn-info btn-md" role="button">Continue Sale</a>
                    <a href="remove.html" class="btn btn-info btn-md" role="button">Remove Sale</a>
                </td>

            </tr>
        </tbody>
    </table>
</div>

@stop
