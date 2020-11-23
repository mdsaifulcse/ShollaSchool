@extends('front.master')

@section('title')
    Meritorious of the Year {{date('Y')}} | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College All Meritorious Students</h2>

                        <br/>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            @foreach($runingClassIds as $runingClassId)
                            <li type="button" data-filter=".{{$runingClassId->runningClass->class_name}}">{{$runingClassId->runningClass->class_name}} </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                @foreach($publisheMeritStudents as $publisheMeritStudent)
                <div class="col-md-3 mix {{$publisheMeritStudent->runningClass->class_name}}">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="{{asset($publisheMeritStudent->student_image)}}" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span>{{$publisheMeritStudent->full_name}}</span>
                            <strong>Class : {{$publisheMeritStudent->runningClass->class_name}}</strong><br/>
                            <strong>Place: {{$publisheMeritStudent->result_place}}</strong><br/>
                            <strong>{{$publisheMeritStudent->result_year}} </strong>

                        </p>
                        <div class="content">
                            <a href="{{url('merit-student/'.$publisheMeritStudent->id)}}">Details
                                <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                  @endforeach

            </div><!-- teacher-list -->

            <!-- Modal -->
        </div><!--all-teacher-->


    </div>
    </div> <!--end container-->
    @endsection