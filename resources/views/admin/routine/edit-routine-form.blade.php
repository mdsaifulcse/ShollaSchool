@extends('admin.master')

@section('title')
    Edit Existing Routine | sholla School & College
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
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Edit Existing Routine</h3>
                </div>
                <div class="panel-body">
                    <form id="editRoutine" class="form-horizontal" action="{{url('/update-routine')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Subject <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="subject" value="{{$routineById->subject}}" class="form-control" required placeholder="enter notice subject">
                                <span>
                                    {{$errors->has('subject')?$errors->first('subject'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Routine File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="routine_file" class="form-control">
                                <span class="text-danger">
                                    {{$errors->has('routine_file')?$errors->first('routine_file'):''}}
                                </span>
                                <div>
                                    <img src="{{asset($routineById->routine_file)}}" width="100" height="100">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Routine as <sup>*</sup></label>
                            <div class="col-md-8">
                                <select name="routine_as" class="form-control" required>
                                    <option></option>
                                    <option value="class-routine">Class Routine</option>
                                    <option value="exam-routine">Exam Routine</option>
                                </select>
                                <span>
                                    {{$errors->has('routine_as')?$errors->first('routine_as'):''}}
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
                                <input type="hidden" name="routine_id"  value="{{$routineById->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update Routine"/>
                            </div>
                        </div>

                    </form>
                    <a href="{{url('/manage-routine')}}" class="btn btn-success"> &laquo; Back</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editRoutine'].elements['routine_as'].value='{{$routineById->routine_as}}';
        document.forms['editRoutine'].elements['published_status'].value='{{$routineById->published_status}}';
    </script>
@endsection