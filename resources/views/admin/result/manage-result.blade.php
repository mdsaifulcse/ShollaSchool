@extends('admin.master')

@section('title')
    Manage Result | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Managementt</h3>
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Manage Your Result Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Routie As</th>
                            <th>Status</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($results as $result)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$result->title}}</td>
                                <td class="bg-success">{{$result->result_as}}</td>
                                <td class="center">{{$result->published_status ==1?'Published':'Unpublised'}}</td>
                                <td>{{\Carbon\Carbon::parse($result->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <?php
                                    $resultName=$result->result_file;
                                    $resultFileExtention=explode('.', $resultName);
                                    ?>

                                    @if($resultFileExtention[1]=='pdf')
                                            <a href="http://docs.google.com/gview?url={{asset($result->result_file)}}&embedded=true" target="blank" class="btn btn-info btn-xs" title="Details about result">
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                            </a>
                                    @else
                                        <a href="{{asset($result->result_file)}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    @endif




                                    @if($result->published_status == 1)
                                        <a href="{{ url('/unpublished-result/'.$result->id) }}" class="btn btn-success btn-xs" title="Published result">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-result/'.$result->id) }}" class="btn btn-warning btn-xs" title="Unpublished result">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-result/'.$result->id) }}" class="btn btn-warning btn-xs" title="Edit result">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-result/'.$result->id) }}" class="btn btn-danger btn-xs" title="Delete result" onclick="return confirm('Are you sure to delete this'); ">
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