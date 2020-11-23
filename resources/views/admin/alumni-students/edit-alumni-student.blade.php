@extends('admin.master')

@section('title')
    Add New Teacher | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center"> {{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Update <b class="text-danger">{{$alumniStudentById->name}}</b> Alumni Student Info</h3>
                </div>
                <div class="panel-body">
                    <form id="editAlumniStudent" action="{{url('/update-alumni-student')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="personal-info">
                            <h3 class="text-primary">Alumni Student Personal Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Alumni Student Name <sup>*</sup></label>
                                        <input type="text" name="name" value="{{$alumniStudentById->name}}" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('name')?$errors->first('name'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> University Name <sup>*</sup></label>
                                        <input type="text" name="university" value="{{$alumniStudentById->university}}" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('university')?$errors->first('university'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Profession <sup>*</sup></label>
                                        <input type="text" name="profession" value="{{$alumniStudentById->profession}}" class="form-control" placeholder="May be Student, Teacher, Doctor, Business" required />
                                        <span class="text-danger">
                                            {{$errors->has('profession')?$errors->first('profession'):''}}
                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label"> Mobile <sup>*</sup></label>
                                    <input type="number" name="mobile" value="{{$alumniStudentById->mobile}}" class="form-control" required />
                                    <span class="text-danger">
                                            {{$errors->has('mobile')?$errors->first('mobile'):''}}
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label"> Email </label>
                                    <input type="email" name="email" value="{{$alumniStudentById->email}}" class="form-control" />
                                    <span class="text-danger">
                                            {{$errors->has('email')?$errors->first('email'):''}}
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">  Blood Group </label>
                                    <input type="text" name="blood_group" value="{{$alumniStudentById->blood_group}}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Highest Education <sup>*</sup></label>
                                    <select name="education" class="form-control" required>
                                        <option></option>
                                        <option value="Masters">PHD</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Graduation">Graduation</option>
                                        <option value="HSC">HSC</option>
                                        <option value="SSC">SSC</option>
                                        <option value="JSC">JSC</option>
                                        <option value="Unknown">Unknown</option>

                                    </select>
                                    <span class="text-danger">
                                            {{$errors->has('education')?$errors->first('education'):''}}
                                        </span>
                                </div>
                            </div>
                        </div><!--end row =====================-->

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label"> Select Image</label>
                                    <input type="file" name="image" class="form-control"  accept="image/*" />
                                    <span class="text-danger">
                                            {{$errors->has('image')?$errors->first('image'):''}}
                                    </span>
                                    <div>
                                        <img src="{{asset($alumniStudentById->image)}}" width="100" height="100">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Published Status <sup>*</sup></label>
                                    <select name="published_status" class="form-control" required>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Present Address </label>
                                    <textarea name="present_address" class="form-control" rows="3">{{$alumniStudentById->present_address}}</textarea>
                                    <span class="text-danger">
                                            {{$errors->has('present_address')?$errors->first('present_address'):''}}
                                        </span>
                                </div>
                            </div>
                        </div><!--end row =====================-->

                </div><!--personal-info==========-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label></label>
                            <input type="hidden" name="alumni_student_id" value="{{$alumniStudentById->id}}" />
                            <input type="submit" name="submit"  value="Update Alumni Student Info" class="btn btn-warning btn-lg btn-block" />
                        </div>
                    </div>
                </div>
                </form>
                <a href="{{url('/manage-alumni-student')}}" class="btn btn-success"> &laquo; Back</a>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.forms['editAlumniStudent'].elements['education'].value='{{$alumniStudentById->education}}';
        document.forms['editAlumniStudent'].elements['published_status'].value='{{$alumniStudentById->published_status}}';
    </script>
@endsection