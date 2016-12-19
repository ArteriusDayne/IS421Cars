
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="331709663044-ri6basml00uvrrvsto2i03dukd56um3m.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Schedule</title>

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
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>LOCATION</th>
                    <th>START</th>
                    <th>END</th>


                    <th class="text-right">OPTIONS</th>
                </tr>
                </thead>

                <tbody>


                @foreach($calendar_events as $calendar_event)
                    <tr>
                        <td>{{$calendar_event->id}}</td>
                        <td>{{$calendar_event->name}}</td>
                        <td>{{$calendar_event->description}}</td>
                        <td>{{$calendar_event->location}}</td>
                        <td>{{$calendar_event->eventstart}}</td>
                        <td>{{$calendar_event->eventend}}</td>


                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>
                            @if(Entrust::hasRole('admin'))
                            <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
                            <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        @endif
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            @if(Entrust::hasRole('admin'))
            <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Create</a>
            @endif
        </div>

    </div>

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
                            <a  href="/view-feedback" class="dropdown-item">View Feedback</a>
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

       <!--
        <?php $counter=count($calendar_events);
        for($x=0;$x<$counter;$x++){
            echo($calendar_events[$x]->name);
            echo($calendar_events[$x]->description);
            echo($calendar_events[$x]->location);
            echo ($calendar_events[$x]->eventstart);
            echo ($calendar_events[$x]->eventend);
            echo ("<br>");
        }

        ?>
        -->
        <script type="text/javascript">

            $(document).ready(function () {
                var appointments = new Array();


                        var calendar_events= <?php echo $calendar_events;?>;


                //console.log(calendar_events[0]['name']);
                        var counter=calendar_events.length;
                        for (var x=0;x<counter;x++){


                            var appointment = {
                                id: calendar_events[x]['id'],
                                description: calendar_events[x]['description'],
                                location: calendar_events[x]['location'],
                                subject: calendar_events[x]['name'],
                                calendar: calendar_events[x]['location'],
                                start: calendar_events[x]['eventstart'],
                                end: calendar_events[x]['eventend']

                            }
                            appointments.push(appointment);
                        }




                // prepare the data
                var source =
                {
                    dataType: "array",
                    dataFields: [
                        {name: 'id', type: 'string'},
                        {name: 'description', type: 'string'},
                        {name: 'location', type: 'string'},
                        {name: 'subject', type: 'string'},
                        {name: 'calendar', type: 'string'},
                        {name: 'start', type: 'date'},
                        {name: 'end', type: 'date'}
                    ],
                    id: 'id',
                    localData: appointments
                };
                var adapter = new $.jqx.dataAdapter(source);
                $("#scheduler").jqxScheduler({
                    date: new $.jqx.date(),
                    width: 1200,
                    height: 700,
                    source: adapter,
                    view: 'monthView',
                    showLegend: true,


                    ready: function () {
                        $("#scheduler").jqxScheduler('ensureAppointmentVisible', 'id1');
                        $("#scheduler").jqxScheduler({ editDialog: false});
                    },
                    resources:
                    {
                        colorScheme: "scheme05",
                        dataField: "calendar",
                        source: new $.jqx.dataAdapter(source)
                    },
                    appointmentDataFields:
                    {
                        from: "start",
                        to: "end",
                        id: "id",
                        description: "description",
                        location: "location",
                        subject: "subject",
                        resourceId: "calendar"
                    },
                    views:
                            [
                                'monthView',
                                'dayView',
                                'weekView'

                            ]
                });
            });
        </script>
    </head>
    <body class='default'>
    <div id="scheduler"></div>
    </body>
