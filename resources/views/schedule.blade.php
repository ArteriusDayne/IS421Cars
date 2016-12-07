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
    <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">

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
                    <a class="navbar-brand" href="/" target="_blank">Puppies & Fluffies</a>
                    <ul class="nav navbar-nav">

                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item {{Request::is('pets') ? 'active' : ''}}"><a class="nav-link" href="/pets"><i class="fa fa-paw" aria-hidden="true"></i> Adoptions </a></li>
                        <li class="nav-item {{Request::is('schedule') ? 'active' : ''}}"><a class="nav-link" href="/schedule"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Appointments</a></li>
                        <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a class="nav-link" href="/about"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
                        <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a class="nav-link" href="/contact"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a></li>
                        <li class="nav-item {{Request::is('feedback') ? 'active' : ''}}"><a class="nav-link" href="/feedback"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback </a></li>
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
            <script type="text/javascript">
$(document).ready(function () {
    var appointments = new Array();
    var appointment1 = {
        id: "id1",
        description: "George brings projector for presentations.",
        location: "",
        subject: "Quarterly Project Review Meeting",
        calendar: "Newark, NJ",
        start: new Date(2016, 10, 23, 9, 0, 0),
        end: new Date(2016, 10, 23, 16, 0, 0)
    }
    var appointment2 = {
        id: "id2",
        description: "",
        location: "",
        subject: "IT Group Mtg.",
        calendar: "New Brunswick, NJ",
        start: new Date(2016, 10, 24, 10, 0, 0),
        end: new Date(2016, 10, 24, 15, 0, 0)
    }
    var appointment3 = {
        id: "id3",
        description: "",
        location: "",
        subject: "Course Social Media",
        calendar: "Rahway, NJ",
        start: new Date(2016, 10, 27, 11, 0, 0),
        end: new Date(2016, 10, 27, 13, 0, 0)
    }
    var appointment4 = {
        id: "id4",
        description: "",
        location: "",
        subject: "New Projects Planning",
        calendar: "Linden, NJ",
        start: new Date(2016, 10, 23, 16, 0, 0),
        end: new Date(2016, 10, 23, 18, 0, 0)
    }
    var appointment5 = {
        id: "id5",
        description: "",
        location: "",
        subject: "Interview with James",
        calendar: "Elizabeth, NJ",
        start: new Date(2016, 10, 25, 15, 0, 0),
        end: new Date(2016, 10, 25, 17, 0, 0)
    }
    var appointment6 = {
        id: "id6",
        description: "",
        location: "",
        subject: "Interview with Nancy",
        calendar: "NY, NY",
        start: new Date(2016, 10, 26, 14, 0, 0),
        end: new Date(2016, 10, 26, 16, 0, 0)
    }
    appointments.push(appointment1);
    appointments.push(appointment2);
    appointments.push(appointment3);
    appointments.push(appointment4);
    appointments.push(appointment5);
    appointments.push(appointment6);
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
        date: new $.jqx.date(2016, 11, 23),
        width: 850,
        height: 600,
        source: adapter,
        view: 'weekView',
        showLegend: true,
        ready: function () {
            $("#scheduler").jqxScheduler('ensureAppointmentVisible', 'id1');
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
