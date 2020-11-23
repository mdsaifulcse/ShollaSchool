@extends('admin.master')

@section('title')
    Manage slider | sholla School & College
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Visitorn Send Message Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <td>SL</td>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Location</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($messages as $message)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->mobile}}</td>
                            <td>{{$message->location}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <a href="{{ url('/delete-message/'.$message->id) }}" class="btn btn-danger btn-xs" title="Delete Contact Info" onclick="return confirm('Are You Sure Your Want To Delete This Message ? You Can not Undo This !')">
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