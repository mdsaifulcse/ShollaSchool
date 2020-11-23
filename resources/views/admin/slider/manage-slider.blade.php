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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Your Slider Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($sliders as $slider)

                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->caption}}</td>
                            <td class="center"><img src="{{asset($slider->slider_image)}}" width="80" alt=""> </td>
                            <td class="center">{{$slider->published_status ==1?'Published':'Unpublised'}}</td>
                            <td>

                                @if($slider->published_status == 1)
                                    <a href="{{ url('/unpublished-slider/'.$slider->id) }}" class="btn btn-success btn-xs" title="Published slider">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/published-slider/'.$slider->id) }}" class="btn btn-warning btn-xs" title="Unpublished slider">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif

                                    <a href="{{ url('/edit-slider/'.$slider->id) }}" class="btn btn-warning btn-xs" title="Edit slider">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-slider/'.$slider->id) }}" class="btn btn-danger btn-xs" title="Delete slider" onclick="return confirm('Are you sure to delete this'); ">
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