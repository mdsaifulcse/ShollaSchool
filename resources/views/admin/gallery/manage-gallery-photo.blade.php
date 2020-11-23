@extends('admin.master')

@section('title')
    Manage slider | sholla School & College
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Your Gallery Photo list</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Even Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($galleryPhotos as $galleryPhoto)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$galleryPhoto->caption}}</td>
                                <td class="center"><img src="{{asset($galleryPhoto->gallery_photo)}}" width="50" height="40" alt="{{$galleryPhoto->caption}}"> </td>
                                <td class="bg-warning">{{$galleryPhoto->photo_event}}</td>
                                <td>{{$galleryPhoto->published_status==1?'Published':'Unpublished'}}</td>
                                <td>

                                    @if($galleryPhoto->published_status == 1)
                                        <a href="{{ url('/unpublished-gallery-photo/'.$galleryPhoto->id) }}" class="btn btn-success btn-xs" title="Published gallery-photo">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-gallery-photo/'.$galleryPhoto->id) }}" class="btn btn-warning btn-xs" title="Unpublished gallery-photo">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-gallery-photo/'.$galleryPhoto->id) }}" class="btn btn-warning btn-xs" title="Edit gallery-photo">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-gallery-photo/'.$galleryPhoto->id) }}" class="btn btn-danger btn-xs" title="Delete gallery-photo" onclick="return confirm('Are you sure to delete this'); ">
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