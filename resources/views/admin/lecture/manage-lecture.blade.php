@extends('admin.master')

@section('title')
    Manage Lecture | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Managementt</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center">{{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Manage Lectures Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl No</th>
                            <th>Department</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Teacher</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
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
                                <td class="bg-success">{{$lecture->published_status ==1?'Published':'Unpublised'}}</td>
                                <td>{{\Carbon\Carbon::parse($lecture->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <?php
                                    $lectureName=$lecture->lecture_file;
                                    $lectureFileExtention=explode('.', $lectureName);
                                    ?>

                                    @if($lectureFileExtention[1]=='pdf')
                                        <a href="http://docs.google.com/gview?url=http://shollaschoolcollege.edu.bd/{{$lecture->lecture_file}} &embedded=true" target="blank" class="btn btn-info btn-xs" title="Details about Lecture">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </a>
                                    @else
                                        <a href="{{asset($lecture->lecture_file)}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    @endif

                                    @if($lecture->published_status == 1)
                                        <a href="{{ url('/unpublished-lecture/'.$lecture->id) }}" class="btn btn-success btn-xs" title="Published Lecture">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-lecture/'.$lecture->id) }}" class="btn btn-warning btn-xs" title="Unpublished Lecture">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-lecture/'.$lecture->id) }}" class="btn btn-warning btn-xs" title="Edit Lecture">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-lecture/'.$lecture->id) }}" class="btn btn-danger btn-xs" title="Delete Lecture" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
@endsection