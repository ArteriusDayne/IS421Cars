<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="331709663044-ri6basml00uvrrvsto2i03dukd56um3m.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <title>Puppies & Fluffies {{Request::is('/') ? 'Home' : Request::path() }} Page</title>

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- material -->
        <link href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('https://dl.dropboxusercontent.com/s/jfd5alqs3yw2p54/main.css') }}" rel="stylesheet">
        <link href="https://www.w3schools.com/lib/w3.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        {!! Analytics::render() !!}
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar primary-color">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx"><i class="fa fa-bars"></i></button>
                <div class="container">
                    <div class="collapse navbar-toggleable-xs" id="collapseEx">
                        <a class="navbar-brand" href="/" >Puppies & Fluffies</a>
                        <ul class="nav navbar-nav">
                            <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item {{Request::is('pets') ? 'active' : ''}}"><a class="nav-link" href="/pets"><i class="fa fa-paw" aria-hidden="true"></i> Adoptions </a></li>

                          

                            <li class="nav-item {{Request::is('calendar_events') ? 'active' : ''}}"><a class="nav-link" href="/calendar_events"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Appointments</a></li>

                            <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a class="nav-link" href="/about"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
                            <li class="nav-item {{Request::is('feedback') ? 'active' : ''}}"><a class="nav-link" href="/feedback"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback </a></li>
                            @role('admin')
                                <li class="nav-item btn-group">
                                <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> Admin </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a  href="/homepets" class="dropdown-item">Manage HomePets</a>
                                    <a  href="/managePets" class="dropdown-item">Manage Pets</a>
                                    <a  href="/users" class="dropdown-item">Manage Users</a>
                                    <a  href="view_feedback.html" class="dropdown-item">View Feedback</a>
                                </div>
                                </li>
                            @endrole
                        </ul>
                        <ul class="nav navbar-nav nav-flex-icons">
                            @if(\Auth::check())
							<li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/home"><i class="fa fa-user" aria-hidden="true"></i> My Account  <span class="sr-only">(current)</span></a>
							</li>	
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
        <script type="text/javascript" src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js') }}"></script>
    </body>
</html>
