@extends('front.master')

@section('title')
    Meritorious of the Year {{date('Y')}} | Sholla School and College
    @endsection

@section('content')
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <ul class="teacher-info-nav clearfix">
                        <li>
                            <a href="#personal-info" class="tablink active-info-nav">Details Information</a>
                        </li>
                    </ul>

                    <div class="row teacher" id="personal-info">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="{{asset($meritStudentInfoById->student_image)}}" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">

                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Name </strong></td>
                                    <td> : {{$meritStudentInfoById->full_name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : {{$meritStudentInfoById->father_name}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : {{$meritStudentInfoById->mother_name}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Previous Class </strong></td>
                                    <td> : {{$meritStudentInfoById->previousClass->class_name}}</td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Running Class </strong></td>
                                    <td> : {{$meritStudentInfoById->runningClass->class_name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Session Year </strong></td>
                                    <td> : {{$meritStudentInfoById->session_year}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Result Year </strong></td>
                                    <td> : {{$meritStudentInfoById->result_year}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Result Place </strong></td>
                                    <td> : {{$meritStudentInfoById->result_place}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Grate Point </strong></td>
                                    <td> : {{$meritStudentInfoById->grate_point}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Total Number </strong></td>
                                    <td> : {{$meritStudentInfoById->total_number}} </td>
                                </tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> gender </strong></td>
                                    <td> : {{$meritStudentInfoById->gender}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : {{$meritStudentInfoById->religion}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Address </strong></td>
                                    <td> : {{$meritStudentInfoById->address}}</td>
                                </tr>
                            </table>
                            <a href="{{url('/meritorious-students')}}" class="btn btn-warning "><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back </a>
                        </div>

                    </div><!-- end  personal info-->

                </div><!-- end col-md-12-->
            </div><!-- end row -->

        </div>
    </div>

    @endsection