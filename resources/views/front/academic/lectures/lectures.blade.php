@extends('front.master')
@section('title')
Lectures Download | sholla School & College
@endsection

@section('content')
    <div class="container">
        <div class="overview">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block img-circle overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">

                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Lecture List </em></h3>
                        </div>
                        <div class="panel panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered  table-hover">
                                    <thead>
                                    <tr class="bg-warning">
                                        <th>Sl No</th>
                                        <th>Depertment </th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Teacher  </th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Download Link</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1;?>
                                    @foreach($lectures as $lecture)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$lecture->departemen}}</td>
                                            <td class="bg-success">{{$lecture->subject}}</td>
                                            <td>{{$lecture->classOfSchool->class_name}}</td>
                                            <td class="bg-success">{{$lecture->sectionOfClass->section_name}}</td>
                                            <td>{{$lecture->teacher->name}}</td>
                                            <td>{{\Carbon\Carbon::parse($lecture->updated_at)->diffForHumans()}}</td>
                                            <td>
                                                <?php
                                                $lectureName=$lecture->lecture_file;
                                                $lectureFileExtention=explode('.', $lectureName);
                                                ?>

                                                @if($lectureFileExtention[1]=='pdf')
                                                        <a href="http://docs.google.com/gview?url={{asset($lecture->lecture_file)}}&embedded=true" target="blank" title="Details about Lecture" target="blank">
                                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                                        </a>
                                                @else
                                                    <a href="{{asset($lecture->lecture_file)}}" target="blank"> <i class="fa fa-eye" aria-hidden="true"></i>  View</a>
                                                @endif

                                            </td>
                                            <td><a href="{{asset($lecture->lecture_file)}}" download>  <i class="fa fa-download" aria-hidden="true"></i> Download </a> </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @endsection