

<?php $__env->startSection('title'); ?>
    Add Student | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($message=Session::get('message')): ?>
                <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
            <?php endif; ?>
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Student</h3>
                </div>
                <div class="panel-body">
                    <form class="" action="<?php echo e(url('/new-student')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <h3>Personal Information</h3><hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Student Name <sup>*</sup> </label>
                                    <input type="text" name="student_name" class="form-control" placeholder="Student Name" autofocus required>
                                <span class="text-danger">
                                    <?php echo e($errors->has('student_name')?$errors->first('student_name'):''); ?>

                                </span>
                                </div>
                            </div>
                        </div><!--end rwo-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Father's Name<sup>*</sup></label>
                                    <input type="text" name="father_name" class="form-control" placeholder="Father's Name" required>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('father_name')?$errors->first('father_name'):''); ?>

                                </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Mother's Name <sup>*</sup></label>
                                    <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name" required>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('mother_name')?$errors->first('mother_name'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Guardian Mobile <sup>*</sup></label>
                                    <input type="number" min="0" name="guardian_mobile" placeholder="Contact Mobile Number" class="form-control" required>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('guardian_mobile')?$errors->first('guardian_mobile'):''); ?>

                                </span>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Gender <sup>*</sup></label>
                                    <select class="form-control" name="gender" required>
                                        <option></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('gender')?$errors->first('gender'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Religion <sup>*</sup></label>
                                    <select class="form-control" name="religion" required>
                                        <option></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hinduism">Hinduism</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Christian">Christian</option>
                                    </select>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('religion')?$errors->first('religion'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Birth Registration No</label>
                                    <input type="number" min="0" name="birth_reg_number" class="form-control" placeholder="Optional">
                                </div>
                            </div>

                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Village <sup>*</sup></label>
                                    <input type="text" name="village" class="form-control" required placeholder="Student Village Name">
                                    <span class="text-danger">
                                    <?php echo e($errors->has('village')?$errors->first('village'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Post Office</label>
                                    <input type="text" name="post_office" class="form-control"  placeholder="Post Office Code / Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Thana/Upajila</label>
                                    <input type="text" name="thana" class="form-control"  placeholder="Student Upajila">
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">District</label>
                                    <input type="text" name="district" class="form-control"  placeholder="Student Home District">
                                </div>
                            </div>
                        </div>
                        <h3>Academi Information</h3><hr>
                        <div class="row">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Student As<sup>*</sup>(School / College) </label>
                                    <select class="form-control" name="student_as" id="student_as" required>
                                        <option></option>
                                        <option value="school-student">School Student</option>
                                        <option value="college-student">College Student</option>
                                    </select>
                                    <span class="text-danger">
                                    <?php echo e($errors->has('student_as')?$errors->first('student_as'):''); ?>

                                </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Student Id</label>

                                    <input type="text" id="student_id" name="student_id" value="<?php echo substr(++$studentId->student_id,4) ?>" class="form-control" >
                                    <span class="text-danger">
                                    <?php echo e($errors->has('student_id')?$errors->first('student_id'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Student Roll</label>
                                    <input type="text" name="student_roll" class="form-control" placeholder="Student Roll no">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Class Name<sup>*</sup></label>
                                    <?php echo e(Form::select('class_id',$classes,[],["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'--Select Class--','required'=>true])); ?>

                                    <span class="text-danger">
                                    <?php echo e($errors->has('class_id')?$errors->first('class_id'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Section Name <sup>*</sup></label>
                                    <div id="sectionOfClass">
                                        <?php echo e(Form::select('section_id',[],[],['class'=>'form-control','placeholder'=>'--First Select Class--','required'=>true])); ?>

                                    </div>

                                    <span class="text-danger">
                                    <?php echo e($errors->has('section_id')?$errors->first('section_id'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Group (If Class Nine / Ten)</label>
                                    <select class="form-control" name="study_group">
                                        <option></option>
                                        <option value="Science">Science</option>
                                        <option value="Business">Business Study</option>
                                        <option value="History">History</option>
                                    </select>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Session Year</label>
                                    <input type="text" name="session_year" class="form-control" value="<?php echo date('Y');?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Select Student Image<sup>*</sup> </label>
                                    <input type="file" name="student_image" required class="form-control" accept="image/*">
                                    <span class="text-danger">
                                    <?php echo e($errors->has('student_image')?$errors->first('student_image'):''); ?>

                                </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">&nbsp;</label>
                                    <select class="form-control" name="published_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">&nbsp;</label>
                                    <input type="submit" name="student_info" required class="btn btn-warning btn-block btn-lg" value="Save Student Info">
                                </div>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function loadSection(id) {
            var classId=id;
            $('#sectionOfClass').load('<?php echo e(URL::to("load-section-of-class")); ?>/'+classId);
        }
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>