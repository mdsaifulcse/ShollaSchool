@extends('admin.master')

@section('title')
    Add new Lecture | sholla School & College
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
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Lecture</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('/new-lecture')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Departemen Name</label>
                            <div class="col-md-8">
                                <input type="text" name="departemen" value="All Departemen" class="form-control" placeholder="Class nine, ten,& College only">
                                <span>
                                    {{$errors->has('departemen')?$errors->first('departemen'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Subject Name <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="subject" class="form-control" required placeholder="Lecture related subject">
                                <span>
                                    {{$errors->has('subject')?$errors->first('subject'):''}}
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Select Class <sup>*</sup></label>
                            <div class="col-md-8">
                                {{Form::select('class_id',$classes,[],["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'-- Select Class--','required'=>true])}}
                                <span>
                                    {{$errors->has('class_id')?$errors->first('class_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Section <sup>*</sup></label>
                            <div class="col-md-8" id="sectionOfClass">
                                {{Form::select('section_id',[],[],['class'=>'form-control','placeholder'=>'--First Select Class--','required'=>true])}}
                                <span>
                                    {{$errors->has('section_id')?$errors->first('section_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Teacher Name <sup>*</sup></label>
                            <div class="col-md-8">
                                {{Form::select('teacher_id',$teachers,[],['class'=>'form-control select','placeholder'=>'--Select Teacher--','required'=>true])}}
                                <span>
                                    {{$errors->has('teacher_id')?$errors->first('teacher_id'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Lecture File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="lecture_file" class="form-control" required>
                                <span class="text-danger">
                                    {{$errors->has('lecture_file')?$errors->first('lecture_file'):''}}
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
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Lactuer"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function loadSection(id) {
            var classId=id;
            $('#sectionOfClass').load('{{URL::to("load-section-of-class")}}/'+classId);
        }
    </script>
@endsection