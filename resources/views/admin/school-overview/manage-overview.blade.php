@extends('admin.master')

@section('title')
    Update Overview | sholla School & College
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                @if($message=Session::get('message'))
                    <h3 class="text-success text-center"> {{$message}} </h3>
                @endif

                <div class="panel-heading">
                    <h3 class="page-header">Sholl School & College Management</h3>
                    <h3>About School Information</h3>
                </div>

            </div>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <table class="table table-bordered">
                    <thead>
                    <tr class="bg-primary">
                        <th>President's</th>
                        <th>Principal's</th>
                        <th>Total Students</th>
                        <th>Total Teachers</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$overview->president}}</td>
                        <td>{{$overview->principal}}</td>
                        <td>{{$overview->total_student}}</td>
                        <td>{{$overview->total_teacher}}</td>
                        <td>{{$overview->mobile}}</td>
                        <td>{{$overview->email}}</td>
                        <td>{{$overview->address}}</td>
                        <td>
                            <a href="{{url('/update-overview/'.$overview->id)}}" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection