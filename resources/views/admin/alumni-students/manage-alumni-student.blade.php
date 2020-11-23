@extends('admin.master')

@section('title')
    Manage Alumni Students | sholla School & College
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Sholla School & College Alumni Students Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-success">
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>university</th>
                            <th>profession</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>blood_group</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($alumniStudents as $alumniStudent)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$alumniStudent->name}}</td>
                                <td>{{$alumniStudent->university}}</td>
                                <td>{{$alumniStudent->profession}}</td>
                                <td>{{$alumniStudent->mobile}}</td>
                                <td>{{$alumniStudent->email}}</td>
                                <td>{{$alumniStudent->blood_group}}</td>
                                <td class="center"><img src="{{asset($alumniStudent->image)}}" width="50" height="50" alt="{{$alumniStudent->name}}"> </td>
                                <td>

                                    @if($alumniStudent->published_status == 1)
                                        <a href="{{ url('/unpublished-alumni-student/'.$alumniStudent->id) }}" class="btn btn-success btn-xs" title="Published Alumni Studnet">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-alumni-student/'.$alumniStudent->id) }}" class="btn btn-warning btn-xs" title="Unpublished Alumni Studnet">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-alumni-student/'.$alumniStudent->id) }}" class="btn btn-warning btn-xs" title="Edit alumni-student">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-alumni-student/'.$alumniStudent->id) }}" class="btn btn-danger btn-xs" title="Delete alumni-student" onclick="return confirm('Are you sure to delete this'); ">
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