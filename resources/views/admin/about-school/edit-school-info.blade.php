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
                    <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> update <span class="text-danger">{{$schoolInfoRuleById->title}}</span> information</h3>
                </div>
                <div class="panel-body">
                    <form id="edit_schoolInfo" class="form-horizontal" action="{{url('/update-school-info')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-2">Title <sup>*</sup></label>
                            <div class="col-md-10">
                                <input type="text" name="title" value="{{$schoolInfoRuleById->title}}" required class="form-control">
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
                                <img src="{{asset($schoolInfoRuleById->image)}}" alt="sholla School college College Image" width="300" class="img-responsive">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Content <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="contents"  id="short-content" class="form-control"  rows="4" required>{{$schoolInfoRuleById->contents}}</textarea>
                                <span class="text-danger">
                                    {{$errors->has('contents')?$errors->first('contents'):''}}
                                </span>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="control-label col-md-10 col-md-offset-2">
                                <input type="hidden" name="school_info_id" value="{{$schoolInfoRuleById->id}}" />
                                <input type="submit" name="info" class="btn btn-warning btn-block" value="Update School Info"/>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">

                                <a href="{{url('/manage-rules-history-property-info')}}" class="btn btn-primary"> &laquo; Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection