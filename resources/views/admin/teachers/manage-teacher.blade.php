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
                    <h3>Manage Teacher Personal Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Blood Group</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Present Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($teacherspersonalInfo as $teacherpersonalInfo)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td> {{$teacherpersonalInfo->name}} </td>
                                <td><img src="{{asset($teacherpersonalInfo->image)}}" width="50"></td>
                                <td> {{$teacherpersonalInfo->blood_group}} </td>
                                <td> {{$teacherpersonalInfo->mobile}} </td>
                                <td> {{$teacherpersonalInfo->email}} </td>
                                <td>
                                    @If($teacherpersonalInfo->teacher_status==1)
                                        <span class="bg-primary">
                                            {{'Active'}}
                                        </span>
                                        @else
                                        <span class="bg-danger">
                                            {{'Inactive'}}
                                        </span>
                                    @endif

                                </td>
                                <td> {{$teacherpersonalInfo->present_address}} </td>
                                <td>

                                    <a href="{{ url('/edit-teacher-personal-info/'.$teacherpersonalInfo->id) }}" class="btn btn-warning btn-xs" title="Edit Teacher Information">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-teacher-personal-info/'.$teacherpersonalInfo->id) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-xs" title="Delete Teacher Information">
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