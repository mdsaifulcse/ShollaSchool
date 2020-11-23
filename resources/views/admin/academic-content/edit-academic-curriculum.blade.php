@extends('admin.master')

@section('title')
    Edit info About School & College | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($message=Session::get('message'))
                <h3 class="text-success text-center"> {{$message}} </h3>
            @endif
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-12 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> update <span class="text-danger">{{$academicContentById->title}}</span> information</h3>
                </div>
                <div class="panel-body">
                    <form id="editAcademicContent" class="form-horizontal" action="{{url('/update-academic-content')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-2">Title <sup>*</sup></label>
                            <div class="col-md-10">
                                <input type="text" name="title" value="{{$academicContentById->title}}" required class="form-control">
                                <span class="text-danger">
                                    {{$errors->has('title')?$errors->first('title'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Select Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image"  class="form-control" accept="image/*">
                                <span class="text-danger">
                                    {{$errors->has('image')?$errors->first('image'):''}}
                                </span>
                                <img src="{{asset($academicContentById->image)}}" alt="sholla School college College Image" width="200" height="200" class="img-responsive">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Content <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="contents"  id="short-content" class="form-control"  rows="4" required>{{$academicContentById->contents}}</textarea>
                                <span class="text-danger">
                                    {{$errors->has('contents')?$errors->first('contents'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Content As <sup>*</sup></label>
                            <div class="col-md-10">
                                <select class="form-control" name="content_as">
                                    <option value="courses-studies">Courses-Studie</option>
                                    <option value="academic-curriculum">Academic-Curriculum</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has('contents')?$errors->first('contents'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Published Status <sup>*</sup></label>
                            <div class="col-md-10">
                                <select class="form-control" name="pubsidhe_status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has('contents')?$errors->first('contents'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-md-10 col-md-offset-2">
                                <input type="hidden" name="academic_content_id" value="{{$academicContentById->id}}" />
                                <input type="submit" name="info" class="btn btn-warning btn-block btn-lg" value="Update {{$academicContentById->content_as}} Info"/>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">

                                <a href="{{url('/manage-academic-content')}}" class="btn btn-primary"> &laquo; Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editAcademicContent'].elements['content_as'].value='{{$academicContentById->content_as}}'
        document.forms['editAcademicContent'].elements['pubsidhe_status'].value='{{$academicContentById->pubsidhe_status}}'
    </script>
@endsection