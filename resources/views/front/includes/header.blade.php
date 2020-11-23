<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/front/')}}/img/logoi.jpg" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/fonts/font-awesom/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/fonts/customfonts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/datatables.min.css">
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{asset('/front/')}}/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="{{asset('/front/')}}/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/responsive.css">
</head>
<body>
    
<div>
</div>

<!-- ============ Top bar ============  -->
{{--<div class="top-bar">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 col-sm-6">--}}
                {{--<ul class="users clearfix">--}}
                    {{--<li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Student Login</a> </li>--}}
                    {{--<li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Parents Login</a> </li>--}}
                    {{--<li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Teacher Login</a> </li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            {{--<div class="col-md-6 col-sm-6 clearfix">--}}
                {{--<ul id="nav" class="bangali-reg  pull-right">--}}
                    {{--<!--<li><a href="{{url('/')}}">Bangali Version</a> </li>-->--}}
                    {{--<li><a href="#" class="admission">Admission <span class="caret"></span> </a>--}}
                        {{--<ul class="drop adm-item">--}}
                            {{--<li><a href="http://www.xiclassadmission.gov.bd" target="blank">College Admission</a> </li>--}}
                            {{--<li><a href="{{url('/school-addmission')}}">School Admission</a> </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> <!-- end container -->--}}

</div> <!-- end top-bar================== -->

<!-- ============================ Header area ============================= -->

<header id="header-area">

    <div class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a href="{{url('/')}}">
                        <div class="media">
                            <div class="media-left media-top">
                                <img class="media-object img-circle" src="{{asset('/front/')}}/img/logo.jpg"  alt="logo">
                            </div>
                            <div class="media-body school-name">
                                <h2 class="media-heading">Sholla High School And College</h2>
                                <p style="color: #819d00; font-weight:300">EIIN: 108321,  <span> School : 1945 ,</span> <span>College : 1995</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--====================main menu areea====================-->
    <section id="main_menu_area">
        <div class="container mainmenu">
            <ul id="nav" class="mobile clearfix">
                <li><a href="{{url('/')}}" class=" ">Home</a></li>
                <li><a href="">OUR INSTITUTE <span class="caret"></span></a>
                    <ul class="drop">
                        <li><a href="{{url('/school-overview')}}">Overview</a></li>
                        <li><a href="{{url('/history')}}">History</a></li>
                        <li><a href="{{url('/president-speech')}}">President's Speech</a></li>
                        <li><a href="{{url('/principal-speech')}}">Principal's Speech</a></li>
                        <li><a href="{{url('/rules')}}">Laws & Conditions</a></li>
                        <li><a href="{{url('/land-info')}}">Land Info</a></li>
                        <li><a href="{{url('/building-info')}}">Building Info</a></li>
                    </ul>

                </li>
                <li><a href="">TEACHER & STUFF <span class="caret"></span></a>
                    <ul class="drop">
                        <li><a href="{{url('/teachers')}}">Teachers</a></li>
                        <li><a href="{{url('/administration')}}">Administration</a></li>
                        <li><a href="{{url('/stuff-list')}}">Stuffs</a></li>
                    </ul>
                </li>
                <li><a href="">ROUTINE<span class="caret"></span></a>
                    <ul class="drop">
                        <li><a href="{{url('/class-routine')}}">Class Routine</a></li>
                        <li><a href="{{url('exam-routine')}}">Exam Routine</a></li>
                    </ul>
                </li>
                <li><a href="">ACADEMIC <span class="caret"></span> </a>
                    <ul class="drop">
                        <li><a href="{{url('/courses-studies')}}"> Course of Studies</a></li>
                        <li><a href="{{url('/academic-curriculum')}}">Academic Curriculum</a></li>
                        <li><a href="{{url('/lectures')}}">Lecture Download</a></li>
                        <li><a href="{{url('/meritorious-students')}}">Meritorious of the Year {{date('Y')}}</a></li>
                        {{--<li><a href="{{url('/students-summary')}}">Student Summary</a></li>--}}
                        <li><a href="">Students Info <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <ul class="down">
                                <li><a href="{{url('/school-student')}}">School Student Info</a> </li>
                                <li><a href="{{url('/college-student')}}">College Student Info</a> </li>
                            </ul>
                        </li>
                        <li><a href="{{url('/alumni-students')}}">Alumni Student</a></li>
                    </ul>
                </li>
                <li><a href="">RESULT <span class="caret"></span> </a>
                    <ul class="drop">
                        <li><a href="{{url('/academic-result')}}">Academic Result</a></li>
                        <li><a href="{{url('/jsc-result')}}">JSC Result</a></li>
                        <li><a href="{{url('/ssc-result')}}">SSC Result</a></li>
                        <li><a href="{{url('/hsc-result')}}">HSC Result</a></li>
                    </ul>
                </li>
                <li><a href="">GALLERY <span class="caret"></span></a>
                    <ul class="drop">
                        <li><a href="{{url('/national-event')}}">National Events Photo</a></li>
                        <li><a href="{{url('/exam-result')}}">Exam Result Photo</a></li>
                        <li><a href="{{url('/study-tour')}}">Study Tour Photo</a></li>
                        <li><a href="{{url('/cultural-event')}}">Cultural Event Photo</a></li>
                        <li><a href="{{url('/sports')}}">Sports Photo</a></li>
                        <li><a href="{{url('/memory')}}">Memory Photo</a></li>
                        <li><a href="{{url('/other')}}">Other</a></li>
                    </ul>
                </li>
                <li><a href="">NOTICE & EVENTS <span class="caret"></span></a>
                    <ul class="drop">
                        <li><a href="{{url('/notices-list')}}">Notices</a></li>
                        <li><a href="#">News & Events</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/contact-us')}}">Contact</a> </li>
            </ul>
        </div>
    </section>

</header> <!--================== end Header =========================== -->