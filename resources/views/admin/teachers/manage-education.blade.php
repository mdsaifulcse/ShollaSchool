@extends('admin.master')

@section('title')
    Manage Teacher Personal Info | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
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
                    <h3>Manage Teacher Educational Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Special In</th>
                            <th>Teacher Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($teacherEducationInfos as $teacherEducationInfo)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td> {{$teacherEducationInfo->name}} </td>
                                <td> {{$teacherEducationInfo->designation}} </td>
                                <td> {{$teacherEducationInfo->special_in}} </td>
                                <td> {{$teacherEducationInfo->teacher_type}} </td>
                                <td>

                                    <a href="{{ url('/edit-teacher-education/'.$teacherEducationInfo->id) }}" class="btn btn-warning btn-xs" title="Edit Teacher Information">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-teacher-education/'.$teacherEducationInfo->id) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-xs" title="Delete Teacher Information">
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