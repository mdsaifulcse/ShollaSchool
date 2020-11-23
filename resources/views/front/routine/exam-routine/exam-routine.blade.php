@extends('front.master')
@section('title')
    Exam Routine | sholla School & College
@endsection

@section('content')
    <section id="routine">
        <div class="container">
            <div class="well">
                <div class="routing-heading">
                    <h2 class="text-info">SHOLLA HIGHER SECONDARY SCHOOL & College
                        <span class="text-warning">Exam Routine</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-8"> <!-- for slider =========== -->
                        <div id="main-slider" class="flexslider routine-slider">
                            <ul class="slides">
                            @foreach($examRoutines as $examRoutine)
                                <li>
                                   <?php
                                    $routineName=$examRoutine->routine_file;
                                    $routineName=explode('.', $routineName);

                                    if ( $routineName[1]=="pdf") { ?>

                                       <iframe src="http://docs.google.com/gview?url={{asset($examRoutine->routine_file)}}&embedded=true" style="width:100%; height:370px;" frameborder="0"></iframe>

                                       <?php }else { ?>
                                       <img src="{{asset($examRoutine->routine_file)}}" class="img-responsive" alt="Exam Routine">
                                    <?php } ?>

                                       <div class="flex-caption routine">

                                        <h3>{{$examRoutine->subject}}</h3>

                                        <a href="{{asset($examRoutine->routine_file)}}" download><p><i class="fa fa-cloud-download fa-lg" aria-hidden="true"></i> Download</p> </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> <!-- for end slider =========== -->

                    <div class="col-md-4"> <!-- for Notice============ -->
                        @include('front.includes.notices')

                    </div> <!-- end  Notice============ -->
                </div> <!-- end rwo -->

            </div><!-- end container -->
        </div>
    </section>
    <!-- ========== Slider and Notice area end is here  =========== -->
@endsection