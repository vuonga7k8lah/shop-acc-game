<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('') }}assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('') }}assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('') }}assets/css/demo.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.2/af-2.5.2/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/cr-1.6.1/date-1.3.0/fc-4.2.1/fh-3.3.1/kt-2.8.1/r-2.4.0/rg-1.3.0/sc-2.1.0/sb-1.4.0/sp-2.1.1/sl-1.6.0/datatables.min.css"/>


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('') }}assets/css/themify-icons.css" rel="stylesheet">
    <style>
        .lhv-gallery{
            display: flex;
            height: 20rem;
            gap: 1rem;
        }
        .lhv-gallery >div{
            flex: 1;
            border-radius: 1rem;
            background-position: center;
            background-repeat: no-repeat;
            background-size: auto 100%;
            transition: all .8s cubic-bezier(.25,.4,.45,1.4);
        }
        .lhv-gallery >div:hover{
            flex: 5;
        }
    </style>
    @stack('style')
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                CT
            </a>

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Vuong kma
            </a>
        </div>
        @include('Admin.slider')
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#Dashboard">
                        Stats
                    </a>
                </div>
                <div class="collapse navbar-collapse">

                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="notification">5</span>
                                <p class="hidden-md hidden-lg">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#not1">Notification 1</a></li>
                                <li><a href="#not2">Notification 2</a></li>
                                <li><a href="#not3">Notification 3</a></li>
                                <li><a href="#not4">Notification 4</a></li>
                                <li><a href="#another">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#settings" class="btn-rotate">
                                <i class="ti-settings"></i>
                                <p class="hidden-md hidden-lg">
                                    Settings
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative
                        Tim</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/date-1.3.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sc-2.0.7/sb-1.4.0/sl-1.6.0/datatables.min.js"></script>

<script src="{{ asset('') }}assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="{{ asset('') }}assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('') }}assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('') }}assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('') }}assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('') }}assets/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('') }}assets/js/bootstrap-switch-tags.js"></script>

<!-- Circle Percentage-chart -->
<script src="{{ asset('') }}assets/js/jquery.easypiechart.min.js"></script>

<!--  Charts Plugin -->
<script src="{{ asset('') }}assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('') }}assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('') }}assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('') }}assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('') }}assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('') }}assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('') }}assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset('') }}assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="{{ asset('') }}assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="{{ asset('') }}assets/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/cr-1.6.1/date-1.3.0/fc-4.2.1/kt-2.8.1/r-2.4.0/rg-1.3.0/sc-2.1.0/sb-1.4.0/sl-1.6.0/datatables.min.js"></script>
@stack('js')

<script type="text/javascript">
    $(document).ready(function () {
        demo.initStatsDashboard();
        demo.initVectorMap();
        demo.initCirclePercentage();

    });
</script>

</html>
