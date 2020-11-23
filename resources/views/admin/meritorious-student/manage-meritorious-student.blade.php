@extends('admin.master')

@section('title')
    Manage Meritorious Student | sholla School & College
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
                    <h3> Meritorious Student list</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Fater's Name</th>
                            <th>Mother's Name</th>
                            <th>Result Year</th>
                            <th>Running Class</th>
                            <th>Grate Point</th>
                            <th>Result</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($i=1)
                        @foreach($meritoriousStudents as $meritoriousStudent)

                            <tr class="odd gradeX">
                                <td>{{$i++}} </td>
                                <td>{{$meritoriousStudent->full_name}} </td>
                                <td>{{$meritoriousStudent->father_name}} </td>
                                <td>{{$meritoriousStudent->mother_name}} </td>
                                <td class="bg-primary">{{$meritoriousStudent->result_year}} </td>
                                <td class="bg-info">{{$meritoriousStudent->runningClass->class_name}} </td>
                                <td>{{$meritoriousStudent->grate_point}} </td>
                                <td class="bg-info">{{$meritoriousStudent->result_place}} </td>
                                <td>{{$meritoriousStudent->address}} </td>

                                <td><img src="{{asset($meritoriousStudent->student_image)}}" alt="Student" width="50"> </td>

                                <td class="center">{{$meritoriousStudent->published_status ==1?'Published':'Unpublised'}}</td>
                                <td>

                                    @if($meritoriousStudent->published_status == 1)
                                        <a href="{{ url('/unpublished-mrt-student/'.$meritoriousStudent->id) }}" class="btn btn-success btn-xs" title="Published Student">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-mrt-student/'.$meritoriousStudent->id) }}" class="btn btn-warning btn-xs" title="Unpublished Student">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-mrt-student/'.$meritoriousStudent->id) }}" class="btn btn-warning btn-xs" title="Edit Student">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-mrt-student/'.$meritoriousStudent->id) }}" class="btn btn-danger btn-xs" title="Delete Student" onclick="return confirm('Are you sure to delete this'); ">
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