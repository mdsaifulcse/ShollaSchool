@extends('admin.master')

@section('title')
    Manage Academic Content | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla High School & Collete Management</h3>
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
                    <h3> Manage Academic Content Curriculum </h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Content As</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($i=1)
                        @foreach($academicContents as $academicContent)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td class="bg-info">{{$academicContent->title}}</td>
                                <td><img src="{{asset($academicContent->image)}}" width="200"></td>
                                <td> {{$academicContent->contents}} </td>
                                <td class="bg-danger"> {{$academicContent->content_as}} </td>
                                <td> {{$academicContent->pubsidhe_status==1?'Published':'Unpublished'}} </td>
                                <td>

                                    <a href="{{ url('/edit-academic-content/'.$academicContent->id) }}" class="btn btn-warning btn-xs" title="Edit slider">
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