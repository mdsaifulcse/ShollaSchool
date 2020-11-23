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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Notice Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($notices as $notice)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$notice->subject}}</td>
                                <td class="center">{{$notice->published_status ==1?'Published':'Unpublised'}}</td>
                                <td>{{\Carbon\Carbon::parse($notice->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <a href="http://docs.google.com/gview?url={{asset($notice->notice_file)}}&embedded=true" target="_blank" class="btn btn-info btn-xs" title="Details about Notic">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                    </a>

                                    @if($notice->published_status == 1)
                                        <a href="{{ url('/unpublished-notice/'.$notice->id) }}" class="btn btn-success btn-xs" title="Published Notice">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-notice/'.$notice->id) }}" class="btn btn-warning btn-xs" title="Unpublished Notice">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-notice/'.$notice->id) }}" class="btn btn-warning btn-xs" title="Edit Notice">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-notice/'.$notice->id) }}" class="btn btn-danger btn-xs" title="Delete Notice" onclick="return confirm('Are you sure to delete this'); ">
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