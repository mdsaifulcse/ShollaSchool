@extends('admin.master')

@section('title')
    Add new Gallery Photo | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($message=Session::get('message'))
                <h3 class="text-success text-center"> {{$message}} </h3>
            @endif
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-10 col-md-offset-1 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Gallery Photo</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('/new-gallery-photo')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-3">Photo Caption <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="caption" class="form-control" required placeholder="Maximum 50 Character">
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('caption')?$errors->first('caption'):''}}
                                </span>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Photo <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="file" name="gallery_photo" class="form-control" required accept="image/*">
                                <span class="text-danger">
                                    {{$errors->has('slider_image')?$errors->first('slider_image'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Photo Event <sup>*</sup></label>
                            <div class="col-md-9">
                                <select name="photo_event" class="form-control">
                                    <option></option>
                                    <option value="national-event">National Event Photo</option>
                                    <option value="exam-result">Exam Result Photo</option>
                                    <option value="study-tour">Study Tour Photo</option>
                                    <option value="cultural-event">Cultural Event Photo</option>
                                    <option value="sports">Sports Photo</option>
                                    <option value="memory">Memory Photo</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Published Status</label>
                            <div class="col-md-9">
                                <select name="published_status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-md-9 col-sm-offset-3">
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block btn-lg" value="Save Gallery Image"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection