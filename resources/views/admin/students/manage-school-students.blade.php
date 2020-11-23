@extends('admin.master')

@section('title')
    Manage Teacher Personal Info | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">SHOLLA HIGH SCHOOL AND COLLEGE Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center">{{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3>Manage School Student Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>SId</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Roll</th>
                            <th>Image</th>
                            <th>Mobile</th>
                            <th>Group</th>
                            <th>Session</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($schoolStudents as $schoolStudent)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td> {{$schoolStudent->student_name}} </td>
                                <td> {{$schoolStudent->student_id}} </td>
                                <td> {{$schoolStudent->classOfSchool->class_name}} </td>
                                <td> {{$schoolStudent->sectionOfClass->section_name}} </td>
                                <td> {{$schoolStudent->student_roll}} </td>
                                <td> <img src="{{asset($schoolStudent->student_image)}}" width="80" height="80"> </td>
                                <td> {{$schoolStudent->guardian_mobile}} </td>
                                <td> {{$schoolStudent->study_group}} </td>
                                <td> {{$schoolStudent->session_year}} </td>
                                <td>

                                    <a href="{{ url('/details-school-student/'.$schoolStudent->id) }}" class="btn btn-success btn-xs" title="Edit school-student">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>

                                    <a href="{{ url('/edit-school-student/'.$schoolStudent->id) }}" class="btn btn-warning btn-xs" title="Edit school-student">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-school-student/'.$schoolStudent->id) }}"  class="btn btn-danger btn-xs" title="Delete school-student" onclick="return confirm('Are you sure you want to delete this ? You Can not undo it!')">
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