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
                    <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit about School Information</h3>
                </div>
                <div class="panel-body">
                    <form id="edit_schoolInfo" class="form-horizontal" action="{{url('/update-about-school-info')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-2">Select Image</label>
                            <div class="col-md-10">
                                <input type="file" name="school_image"  class="form-control" accept="image/*">
                                <span class="text-danger">
                                    {{$errors->has('school_image')?$errors->first('school_image'):''}}
                                </span>
                                <img src="{{asset($aboutSchoolInfoById->school_image)}}" alt="Scholla School College Image" width="300" class="img-responsive">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">short description <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="short_description"  id="short-content" class="form-control"  rows="4" required>{{$aboutSchoolInfoById->short_description}}</textarea>
                                <span class="text-danger">
                                    {{$errors->has('short_description')?$errors->first('short_description'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Long description <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="long_description" id="long-content" class="form-control"  rows="8" required>{{$aboutSchoolInfoById->long_description}}</textarea>
                                <span class="text-danger">
                                    {{$errors->has('long_description')?$errors->first('long_description'):''}}
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="control-label col-md-10 col-md-offset-2">
                                <input type="hidden" name="school_info_id" value="{{$aboutSchoolInfoById->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update About School Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['edit_schoolInfo'].elements['published_status'].value='{{$aboutSchoolInfoById->published_status}}';
    </script>
@endsection