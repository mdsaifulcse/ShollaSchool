@extends('admin.master')

@section('title')
    Add new Class-Section | sholla School & College
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
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add new Class-Section</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('/new-class-section')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-4">Select a Class <sup>*</sup></label>
                            <div class="col-md-8">
                                <select name="class_name" class="form-control" required>
                                    <option></option>
                                    <option value="SIX"> SIX</option>
                                    <option value="SEVEN"> SEVEN</option>
                                    <option value="EIGHT"> EIGHT</option>
                                    <option value="NINE"> NINE</option>
                                    <option value="TEN"> TEN</option>
                                    <option value="Eleven"> Eleven</option>
                                    <option value="Twelve"> Twelve</option>
                                </select>
                                <span>
                                    {{$errors->has('result_as')?$errors->first('result_as'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Section Name <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="section_name" class="form-control" required>
                                <span>
                                    {{$errors->has('section_name')?$errors->first('section_name'):''}}
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
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Class-Section"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection