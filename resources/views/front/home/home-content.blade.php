@extends('front.master')

@section('title')
    Sholla School and College | Home page
    @endsection

@section('content')

    <section id="slider-notic-area" xmlns:http="http://www.w3.org/1999/xhtml">
        <div class="container">


            <div class="marquee"> <!-- for marquee notice ===========  -->
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <h5 class="notic"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Latest Notice</h5>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-8">
                        <marquee  onmouseover="stop();" onmouseout="start();">
                            <h5>
                                @foreach($latestNotitices as $latestNotitice)
                                    <a href="http://docs.google.com/gview?url={{asset($latestNotitice->notice_file)}}&embedded=true" target="blank"><span>&raquo;</span> {{$latestNotitice->subject}}</a>
                                @endforeach
                            </h5>
                        </marquee>
                    </div>
                </div>
            </div> <!-- end marquee notice===========-->

            <div class="row">
                <div class="col-md-7"> <!-- for slider =========== -->
                    <div id="main-slider" class="flexslider">
                        <ul class="slides">
                            @foreach($sliders as $slider)
                            <li>
                                <img src="{{asset($slider->slider_image)}}" alt="" />
                                <div class="flex-caption">
                                    <h3>{{$slider->title}}</h3>
                                    <p>{{$slider->caption}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div> <!-- for end slider =========== -->

                <div class="col-md-5"> <!-- for Notice============ -->
                   @include('front.includes.notices')

                </div> <!-- end  Notice============ -->
            </div> <!-- end rwo -->
        </div><!-- end container -->
    </section>
    <!-- ================== Slider and Notice area end is here  ============== -->


    <!--================== About Institute start From Here  ====================-->

    <section id="about-institute">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="institute-info">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Institute Information</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/school-overview')}}"><span>&raquo;</span>  Institute Overview</a> </li>
                            <li class="list-group-item"><a href="{{url('/history')}}"><span>&raquo;</span> History</a> </li>
                            <li class="list-group-item"><a href="{{url('/building-info')}}"><span>&raquo;</span> Building Information</a> </li>
                            <li class="list-group-item"><a href="{{url('/land-info')}}"><span>&raquo;</span> Land Information</a> </li>
                            <li class="list-group-item"><a href="{{url('/rules')}}"><span>&raquo;</span> Law & Condition</a> </li>

                        </ul>
                    </div> <!-- institute-info -->

                    <div class="teacher-employee">
                        <h4><i class="fa fa-users" aria-hidden="true"></i> Teacher & Employee </h4>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/teachers')}}"><span>&raquo;</span> Teachers</a> </li>
                            <li class="list-group-item"><a href="{{url('/administration')}}"><span>&raquo;</span>  Administration Committee</a> </li>
                            <li class="list-group-item"><a href="{{url('/third-grade-emp')}}"><span>&raquo;</span> Third Grade Employee</a> </li>
                        </ul>
                    </div>

                </div> <!-- end col-md-3  -->

                <div class="col-md-7">
                    <div class="about-school-college">
                        <h4><i class="fa fa-university" aria-hidden="true"></i> About School & College</h4>
                        <div class="well">
                            <img src="{{asset($aboutSchoolInfo->school_image)}}" style="width: 100%" alt="about Sholla school & college" class="img-responsive img-thumbnail center-block">
                            <blockquote>
                                    <?php echo $aboutSchoolInfo->short_description; ?>
                                 <a href="{{url('/more-about-school/'.$aboutSchoolInfo->id)}}" class="btn btn-warning">Read More</a>

                            </blockquote>
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="president-speech">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> President's</h4>
                        <div>
                            <a href="{{url('/president-speech/')}}">
                                <img src="{{asset($presidentSpeech->person_image)}}" alt="Sholla School College President Image"  title="Sholla School College President Image" class="img-responsive img-thumbnail center-block">
                                <p>Read Speech</p>
                            </a>
                        </div>
                    </div>
                    <div class="headmaster-speech">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Principal's</h4>
                        <div>

                            <a href="{{url('/principal-speech')}}">
                                <img src="{{asset($principalSpeech->person_image)}}" alt="Sholla School College Principal Image" title="Sholla School College Principal Image" class="img-responsive img-thumbnail center-block">
                                <p>Read Speech</p>
                            </a>


                        </div>
                    </div>
                </div> <!-- end col-md-3 -->
            </div>
        </div>
    </section>

    <section id="student-of-the-year">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-success">Meritorious Students of the Year {{date('Y')}} </h2>
                    <div class="talent-student-list">
                        @foreach($firstPlaceStudents as $firstPlaceStudent)
                        <div class="single-student">
                            <div class="">
                                <a href="{{url('/merit-student/'.$firstPlaceStudent->id)}}"><img src="{{asset($firstPlaceStudent->student_image)}}" alt="Meritotious Student Sholla School and College {{date('Y')}}" class="img-responsive img-circle"></a>
                            </div>
                            <p>{{$firstPlaceStudent->full_name}}<br/>
                                <strong class="text-warning">Class : {{$firstPlaceStudent->runningClass->class_name}}</strong> <br/>
                                <strong>Result Place: {{$firstPlaceStudent->result_place}}</strong>
                            </p>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection