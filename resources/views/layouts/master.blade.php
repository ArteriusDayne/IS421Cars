<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ABC Dealership {{Request::is('/') ? 'Home' : Request::path() }} Page</title>

	<!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet">
    <!-- material -->
    <link href="{{ URL::to('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
    <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet">
	  
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  <header>
		<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar primary-color">
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx"><i class="fa fa-bars"></i></button>
			<div class="container">
				<div class="collapse navbar-toggleable-xs" id="collapseEx">
				<a class="navbar-brand" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">ABC Dealership</a>
					<ul class="nav navbar-nav">
						@if(\Auth::check())
						<li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
						@else
							<li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
						@endif
						<li class="nav-item {{Request::is('inventory') ? 'active' : ''}}"><a class="nav-link" href="/inventory"><i class="fa fa-car" aria-hidden="true"></i> Stock </a></li>
						<li class="nav-item {{Request::is('schedule') ? 'active' : ''}}"><a class="nav-link" href="/schedule"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Appointments</a></li>
						<li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a class="nav-link" href="/about"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
						<li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a class="nav-link" href="/contact"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a></li>
						<li class="nav-item {{Request::is('feedback') ? 'active' : ''}}"><a class="nav-link" href="/feedback"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback </a></li>
					</ul>
					<ul class="nav navbar-nav nav-flex-icons">
						@if(\Auth::check())
							<li class="nav-link nav-item">
							{{ link_to_route('logout', 'Sign out') }} <i class="fa fa-sign-out" aria-hidden="true"></i> 
							</li>
						@else
						<li class ="nav-link nav-item">{{ link_to_route('login', 'Sign in') }} <i class="fa fa-sign-in" aria-hidden="true"></i>  </li>
						<li class ="nav-link nav-item" >{{ link_to_route('create', 'Sign up') }}<i class="fa fa-user-plus" aria-hidden="true"></i></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	  </header>
    @yield('home_slider')  
	<div class="container" id="container">
    @yield('page_content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ URL::to('js/jquery-2.2.3.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="{{ URL::to('js/tether.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/mdb.min.js') }}"></script>
  </body>
</html>