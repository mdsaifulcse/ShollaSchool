@extends('admin.master')

@section('title')
    Edit Existing Result | sholla School & College
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
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Edit Existing Result Information</h3>
                </div>
                <div class="panel-body">
                    <form id="editResult" class="form-horizontal" action="{{url('/update-result')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Result Title <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{$resultInfoById->title}}" class="form-control" required placeholder="Max: 50 Character">
                                <span>
                                    {{$errors->has('title')?$errors->first('title'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Result File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="result_file" class="form-control">
                                <div>
                                    <img src="{{asset($resultInfoById->result_file)}}" width="100">
                                </div>
                                <span class="text-danger">
                                    {{$errors->has('result_file')?$errors->first('result_file'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Result as <sup>*</sup></label>
                            <div class="col-md-8">
                                <select name="result_as" class="form-control" required>
                                    <option></option>
                                    <option value="academic-result">Academic-Result</option>
                                    <option value="jsc-result">JSC-Result</option>
                                    <option value="ssc-result">SSC-Result</option>
                                    <option value="hsc-result">HSC-Result</option>
                                </select>
                                <span>
                                    {{$errors->has('result_as')?$errors->first('result_as'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Published Status</label>
                            <div class="col-md-8">
                                <select name="published_status" class="form-control" required>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-md-8 col-sm-offset-4">
                                <input type="hidden" name="result_id" value="{{$resultInfoById->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update Result"/>
                            </div>
                        </div>
                    </form>
                    <a href="{{url('/manage-result')}}" class="btn btn-success">&laquo; Back</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editResult'].elements['result_as'].value='{{$resultInfoById->result_as}}';
        document.forms['editResult'].elements['published_status'].value='{{$resultInfoById->published_status}}';
    </script>
@endsection