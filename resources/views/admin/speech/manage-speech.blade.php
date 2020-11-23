@extends('admin.master')

@section('title')
    Manage Speech | sholla School & College
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
                    <h3>About School Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Image</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($speechs as $speech)
                        <tr class="odd gradeX">
                            <td><img src="{{asset($speech->person_image)}}" width="200"></td>
                            <td> {{$speech->speech_person}} </td>
                            <td>

                                <a href="{{ url('/edit-speech/'.$speech->id) }}" class="btn btn-warning btn-xs" title="Edit slider">
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