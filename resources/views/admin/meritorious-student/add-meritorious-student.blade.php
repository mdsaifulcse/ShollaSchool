@extends('admin.master')

@section('title')
        Add New Metorious Student
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
        <div class="col-md-10 well col-md-offset-1">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Meritorious Student</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('/new-meritorious-student')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-3">Student Full Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="full_name" class="form-control" required placeholder="enter student full name">
                                <span class="text-danger">
                                    {{$errors->has('name')?$errors->first('name'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Father's Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="father_name" class="form-control" required placeholder="Sutdent Father name">
                                <span class="text-danger">
                                    {{$errors->has('father_name')?$errors->first('father_name'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Mother's Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="mother_name" class="form-control" required placeholder="Sutdent Mother name">
                                <span class="text-danger">
                                    {{$errors->has('mother_name')?$errors->first('mother_name'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Session Year <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="session_year" class="form-control" required placeholder="Session Year">
                                <span class="text-danger">
                                    {{$errors->has('session_year')?$errors->first('session_year'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Result Year <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="result_year" value="{{date('Y')}}" class="form-control" required placeholder="Runing Year">
                                <span class="text-danger">
                                    {{$errors->has('result_year')?$errors->first('result_year'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Previous Class <sup>*</sup></label>
                            <div class="col-md-9">
                                {{Form::select('previous_class_id',$classes,[],["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'--Select Class--','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('class_id')?$errors->first('class_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Running Class <sup>*</sup></label>
                            <div class="col-md-9">
                                {{Form::select('running_class_id',$classes,[],["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'--Select Class--','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('class_id')?$errors->first('class_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Result Place <sup>*</sup></label>
                            <div class="col-md-9">
                                <select class="form-control" name="result_place" required>
                                    <option></option>
                                    <option value="First"> First</option>
                                    <option value="Second"> Second</option>
                                    <option value="Third"> Third</option>
                                </select>

                                <span class="text-danger">
                                    {{$errors->has('class')?$errors->first('class'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Grate Point </label>
                            <div class="col-md-9">
                                <input type="text" min="0" name="grate_point" class="form-control"  placeholder=" CGPA - 5.00 ">
                                <span class="text-danger">
                                    {{$errors->has('grate_point')?$errors->first('grate_point'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Number </label>
                            <div class="col-md-9">
                                <input type="text" min="0" name="total_number" class="form-control"  placeholder=" obtained total number ">
                                <span class="text-danger">
                                    {{$errors->has('total_number')?$errors->first('total_number'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Gender <sup>*</sup></label>
                            <div class="col-md-9">
                                <select name="gender" class="form-control" required>
                                    <option></option>
                                    <option value="Male">Male</option>
                                    <option value="Femal">Femal</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has('gender')?$errors->first('gender'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Religion <sup>*</sup></label>
                            <div class="col-md-9">
                                <select name="religion" class="form-control" required>
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindo">Hindo</option>
                                    <option value="Krishtian">Krishtian</option>
                                    <option value="Buddhsit">Buddhsit</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has('religion')?$errors->first('religion'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Student Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address" rows="5"></textarea>
                                <span class="text-danger">
                                    {{$errors->has('address')?$errors->first('address'):''}}
                                </span>
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Select Image <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="file" name="student_image" class="form-control" required accept="image/*">
                                <span class="text-danger">
                                    {{$errors->has('student_image')?$errors->first('student_image'):''}}
                                </span>
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
                            <div class="control-label col-md-9 col-md-offset-3">
                                <input type="submit" name="add-student" class="btn btn-warning btn-block btn-lg" value="Save Meritorious Student Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection