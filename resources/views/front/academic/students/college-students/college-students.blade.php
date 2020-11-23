@extends('front.master')

@section('title')
    College Students Info | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <br/>
                <div class="well student-info table-responsive">
                    <h3 class="text-success text-center"><i class="fa fa-university" aria-hidden="true"></i> <strong class="text-warning">College</strong> Student Information</h3><br/>
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr class="bg-warning">
                            <th>SL No</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Roll</th>
                            <th>Profile</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($collegeStudents as $collegeStudent)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$collegeStudent->student_id}} </td>
                            <td>{{$collegeStudent->student_name}}</td>
                            <td>{{$collegeStudent->classOfSchool->class_name}}</td>
                            <td>{{$collegeStudent->sectionOfClass->section_name}}</td>
                            <td>{{$collegeStudent->student_name}}</td>
                            <td>
                                <a href="{{url('/college-student-profile/'.$collegeStudent->id)}}">Details
                                    <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- student-info -->
            </div>
            <div class="col-md-3">
                <br/>
                <div class="well">
                    <br/>
                    <br/>
                        @include('front.includes.related')
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->

    @endsection