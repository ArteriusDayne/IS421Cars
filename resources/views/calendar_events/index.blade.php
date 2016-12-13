


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="331709663044-ri6basml00uvrrvsto2i03dukd56um3m.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Puppies & Fluffies  Page</title>

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- material -->
    <link href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('https://dl.dropboxusercontent.com/s/jfd5alqs3yw2p54/main.css') }}" rel="stylesheet">
    <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {!! Analytics::render() !!}

</head>
@section('content')
    <div class="page-header">
        <h1>Calendar Events</h1>
    </div>
    <div id='calendar'></div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>START</th>
                    <th>END</th>
                    <th>IS_ALL_DAY</th>
                    <th>BACKGROUND_COLOR</th>
                    <th class="text-right">OPTIONS</th>
                </tr>
                </thead>

                <tbody>


                @foreach($calendar_events as $calendar_event)
                    <tr>
                        <td>{{$calendar_event->id}}</td>
                        <td>{{$calendar_event->title}}</td>
                        <td>{{$calendar_event->start}}</td>
                        <td>{{$calendar_event->end}}</td>
                        <td>{{$calendar_event->is_all_day}}</td>
                        <td>{{$calendar_event->background_color}}</td>

                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>
                            <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
                            <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Create</a>
        </div>

    </div>

<body>
<header>
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar primary-color">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx"><i class="fa fa-bars"></i></button>
        <div class="container">
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <a class="navbar-brand" href="/" target="_blank">Puppies & Fluffies</a>
                <ul class="nav navbar-nav">
                    @if(\Auth::check())
                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/home"><i class="fa fa-home" aria-hidden="true"></i> Account <span class="sr-only">(current)</span></a></li>
                    @else
                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
                    @endif
                    <li class="nav-item {{Request::is('pets') ? 'active' : ''}}"><a class="nav-link" href="/pets"><i class="fa fa-paw" aria-hidden="true"></i> Adoptions </a></li>
                    <li class="nav-item {{Request::is('calendar_events') ? 'active' : ''}}"><a class="nav-link" href="/calendar_events"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Appointments</a></li>
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

<header>
    <link rel="stylesheet"href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.css"/>
    <link href="stylesheet"href="/node_modules/fullcalendar-scheduler/dist/scheduler.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.0/moment.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.js"></script>
    <script src="/node_modules/fullcalendar-scheduler/dist/scheduler.js"></script>

    <head>
        <title id='Description'>Schedule
        </title>
        <link rel="stylesheet" href="js/jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/scripts/demos.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxdata.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxdate.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxscheduler.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxscheduler.api.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxdatetimeinput.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxmenu.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxcalendar.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxtooltip.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxwindow.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxcheckbox.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxlistbox.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxnumberinput.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxradiobutton.js"></script>
        <script type="text/javascript" src="js/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="js/jqwidgets/globalization/globalize.js"></script>
        <script type="text/javascript" src="js/jqwidgets/globalization/globalize.culture.de-DE.js"></script>
        <script type="text/javascript">
            var counter=0;
                $(document).ready(function () {

                    var appointments=new Array();
                            <?php foreach ($calendar_events as $calendar_event)?>


                     appointments[counter] = {
                        id: "<?php echo $calendar_event->id;?>",
                        title: "<?php echo $calendar_event->title;?>",
                        start: "<?php echo $calendar_event->start;?>",
                        end: "<?php echo $calendar_event->end;?>",
                        is_background_color: "<?php echo $calendar_event->is_all_day;?>"


                    }
                    counter+=1;
                    console.log(counter);
                    // prepare the data


                // prepare the data

                var source =
                {
                    dataType: "array",
                    dataFields: [
                        {name: 'id', type: 'string'},
                        {name: 'title', type: 'string'},
                        {name: 'start', type: 'string'},
                        {name: 'end', type: 'string'},
                        {name: 'is_all_day', type: 'string'},
                        {name: 'background-color', type: 'string'}
                    ],
                    id: 'id',
                    localData: appointments
                };
                var adapter = new $.jqx.dataAdapter(source);
                $("#scheduler").jqxScheduler({
                    date: new $.jqx.date(new Date()),
                    width: 1200,
                    height: 600,
                    source: adapter,
                    view: 'monthView',

                    showLegend: true,

                    views:
                            [
                                'dayView',
                                'weekView',
                                'monthView'
                            ]
                });
            });
        </script>
    </head>
    <body class='default'>
    <div id="scheduler"></div>
    </body>
