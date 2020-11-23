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
                    <h3>Manage Administrator Personal Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Administrator Type</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Present Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($administrators as $administrator)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td> {{$administrator->name}} </td>
                                <td><img src="{{asset($administrator->image)}}" width="50"></td>
                                <td> {{$administrator->mobile}} </td>
                                <td> {{$administrator->email}} </td>
                                <td class="bg-success"> {{$administrator->administrator_type}} </td>
                                <td class="bg-success"> {{$administrator->administratorDesignation->designation_name}} </td>
                                <td>
                                    @If($administrator->aministrator_status==1)
                                        <span class="bg-primary">
                                            {{'Active'}}
                                        </span>
                                    @else
                                        <span class="bg-danger">
                                            {{'Inactive'}}
                                        </span>
                                    @endif

                                </td>
                                <td> {{$administrator->present_address}} </td>
                                <td>

                                    <a href="{{ url('/edit-administrator/'.$administrator->id) }}" class="btn btn-warning btn-xs" title="Edit Teacher Information">
                                        <span class="glyphicon glyphicon-edit"></span>
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