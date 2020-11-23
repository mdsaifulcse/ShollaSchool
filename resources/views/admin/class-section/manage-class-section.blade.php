@extends('admin.master')

@section('title')
    Manage Notice | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center">{{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Class Section Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Status</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($classSections as $classSection)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$classSection->class_name}}</td>
                                <td>{{$classSection->section_name}}</td>
                                <td class="center">{{$classSection->published_status ==1?'Published':'Unpublised'}}</td>
                                <td>{{\Carbon\Carbon::parse($classSection->updated_at)->diffForHumans()}}</td>
                                <td>

                                    <a href="{{ url('/edit-class-section/'.$classSection->id) }}" class="btn btn-warning btn-xs" title="Edit class-section">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-class-section/'.$classSection->id) }}" class="btn btn-danger btn-xs" title="Delete class-section" onclick="return confirm('Are you sure to delete this'); ">
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