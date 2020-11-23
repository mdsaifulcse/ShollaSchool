<?php $__env->startSection('title'); ?>
    Add New Metorious Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if($message=Session::get('message')): ?>
                <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
            <?php endif; ?>
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-10 well col-md-offset-1">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Update Existing Meritorious Student</h3>
                </div>
                <div class="panel-body">
                    <form id="editMaritStudent" class="form-horizontal" action="<?php echo e(url('/update-meritorious-student')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label class="control-label col-md-3">Student Full Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="full_name" value="<?php echo e($meritStudentById->full_name); ?>" class="form-control" required placeholder="enter student full name">
                                <span class="text-danger">
                                    <?php echo e($errors->has('name')?$errors->first('name'):''); ?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Father's Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="father_name" value="<?php echo e($meritStudentById->father_name); ?>" class="form-control" required placeholder="Sutdent Father name">
                                <span class="text-danger">
                                    <?php echo e($errors->has('father_name')?$errors->first('father_name'):''); ?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Mother's Name <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="mother_name" value="<?php echo e($meritStudentById->mother_name); ?>" class="form-control" required placeholder="Sutdent Mother name">
                                <span class="text-danger">
                                    <?php echo e($errors->has('mother_name')?$errors->first('mother_name'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Session Year <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="session_year" value="<?php echo e($meritStudentById->session_year); ?>" class="form-control" required placeholder="Session Year">
                                <span class="text-danger">
                                    <?php echo e($errors->has('session_year')?$errors->first('session_year'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Result Year <sup>*</sup></label>
                            <div class="col-md-9">
                                <input type="text" name="result_year" value="<?php echo e($meritStudentById->result_year); ?>" class="form-control" required placeholder="Runing Year">
                                <span class="text-danger">
                                    <?php echo e($errors->has('result_year')?$errors->first('result_year'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Previous Class <sup>*</sup></label>
                            <div class="col-md-9">
                                <?php echo e(Form::select('previous_class_id',$classes,$meritStudentById->previous_class_id,["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'--Select Class--','required'=>true])); ?>

                                <span class="text-danger">
                                    <?php echo e($errors->has('class_id')?$errors->first('class_id'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Running Class <sup>*</sup></label>
                            <div class="col-md-9">
                                <?php echo e(Form::select('running_class_id',$classes,$meritStudentById->running_class_id,["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'--Select Class--','required'=>true])); ?>

                                <span class="text-danger">
                                    <?php echo e($errors->has('class_id')?$errors->first('class_id'):''); ?>

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
                                    <?php echo e($errors->has('class')?$errors->first('class'):''); ?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Grate Point </label>
                            <div class="col-md-9">
                                <input type="text" min="0" name="grate_point" value="<?php echo e($meritStudentById->grate_point); ?>" class="form-control"  placeholder=" CGPA - 5.00 ">
                                <span class="text-danger">
                                    <?php echo e($errors->has('grate_point')?$errors->first('grate_point'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Number </label>
                            <div class="col-md-9">
                                <input type="text" min="0" name="total_number" value="<?php echo e($meritStudentById->total_number); ?>" class="form-control"  placeholder=" obtained total number ">
                                <span class="text-danger">
                                    <?php echo e($errors->has('total_number')?$errors->first('total_number'):''); ?>

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
                                    <?php echo e($errors->has('gender')?$errors->first('gender'):''); ?>

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
                                    <?php echo e($errors->has('religion')?$errors->first('religion'):''); ?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Student Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address" rows="5"><?php echo e($meritStudentById->address); ?></textarea>
                                <span class="text-danger">
                                    <?php echo e($errors->has('address')?$errors->first('address'):''); ?>

                                </span>
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Select Image</label>
                            <div class="col-md-9">
                                <input type="file" name="student_image" class="form-control" accept="image/*">
                                <img src="<?php echo e(asset($meritStudentById->student_image)); ?>" alt="Student" width="100">
                                <span class="text-danger">
                                    <?php echo e($errors->has('student_image')?$errors->first('student_image'):''); ?>

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
                                <input type="hidden" name="merit_student_id" value="<?php echo e($meritStudentById->id); ?>" />
                                <input type="submit" name="add-student" class="btn btn-warning btn-block btn-lg" value="Update Meritorious Student Info"/>
                            </div>
                        </div>

                    </form>
                    <a href="<?php echo e(url('/manage-meritorious')); ?>" class="btn btn-primary"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editMaritStudent'].elements['result_place'].value='<?php echo e($meritStudentById->result_place); ?>';
        document.forms['editMaritStudent'].elements['gender'].value='<?php echo e($meritStudentById->gender); ?>';
        document.forms['editMaritStudent'].elements['religion'].value='<?php echo e($meritStudentById->religion); ?>';
        document.forms['editMaritStudent'].elements['published_status'].value='<?php echo e($meritStudentById->published_status); ?>';

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>