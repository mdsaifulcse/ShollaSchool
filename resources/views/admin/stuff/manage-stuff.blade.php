@extends('admin.master')

@section('title')
    Manage Stuff Personal Info | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Management</h3>
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
                    <h3>Manage Stuffs Information</h3>
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
                            <th>Stuff Type</th>
                            <th>Status</th>
                            <th>Present Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($stuffs as $stuff)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td> {{$stuff->name}} </td>
                                <td><img src="{{asset($stuff->image)}}" width="50"></td>
                                <td> {{$stuff->mobile}} </td>
                                <td> {{$stuff->email}} </td>
                                <td class="bg-success"> {{$stuff->stuff_type}} </td>
                                <td>
                                    @If($stuff->stuff_status==1)
                                        <span class="bg-primary">
                                            {{'Active'}}
                                        </span>
                                    @else
                                        <span class="bg-danger">
                                            {{'Inactive'}}
                                        </span>
                                    @endif

                                </td>
                                <td> {{$stuff->present_address}} </td>
                                <td>

                                    <a href="{{ url('/edit-stuff/'.$stuff->id) }}" class="btn btn-warning btn-xs" title="Edit Teacher Information">
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