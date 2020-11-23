<?php $__env->startSection('title'); ?>
    Edit Teacher Personal Info | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
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
                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
                <?php endif; ?>
                <div class="panel-heading">
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Edit Teacher Information</h3>
                </div>
                <div class="panel-body">
                    <form id="editTeacherPersonalInfo" class="" action="<?php echo e(url('/update-teacher')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="personal-info">
                            <h3 class="text-primary">Edit Teacher personal Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Teacher Name <sup>*</sup></label>
                                        <input type="text" name="name" value="<?php echo e($teacherPersonalInfoById->name); ?>" class="form-control" required />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('name')?$errors->first('name'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Father's Name <sup>*</sup></label>
                                        <input type="text" name="father_name" value="<?php echo e($teacherPersonalInfoById->father_name); ?>" class="form-control"  required />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('father_name')?$errors->first('father_name'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Mother's Name <sup>*</sup></label>
                                        <input type="text" name="mother_name" value="<?php echo e($teacherPersonalInfoById->mother_name); ?>" class="form-control" required />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('mother_name')?$errors->first('mother_name'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Gender<sup>*</sup></label>
                                        <select name="gender" class="form-control" required>
                                            <option></option>
                                            <option value="Male">Male</option>
                                            <option value="Femal">Femal</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">  Blood Group </label>
                                        <input type="text" name="blood_group" value="<?php echo e($teacherPersonalInfoById->blood_group); ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Religion <sup>*</sup></label>
                                        <select class="form-control" name="religion" required>
                                            <option></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Christian">Christian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">  Marital Status <sup>*</sup></label>
                                        <select class="form-control" name="marital_status" required>
                                            <option></option>
                                            <option value="Married">married</option>
                                            <option value="Unmarried">Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Mobile</label>
                                        <input type="number" name="mobile" value="<?php echo e($teacherPersonalInfoById->mobile); ?>" class="form-control" />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('mobile')?$errors->first('mobile'):''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Email </label>
                                        <input type="email" name="email" value="<?php echo e($teacherPersonalInfoById->email); ?>" class="form-control" />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('email')?$errors->first('email'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Date of Birth (Same formate) </label>
                                        <input type="text" name="date_of_birth" autocomplete="off" value="<?php echo e(date('d-m-Y',strtotime($teacherPersonalInfoById->date_of_birth))); ?>" class="form-control datepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Select Image</label>
                                        <input type="file" name="image" class="form-control"  accept="image/*"  />
                                        <span>
                                            <img src="<?php echo e(asset($teacherPersonalInfoById->image)); ?>" width="100">
                                        </span>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('image')?$errors->first('image'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Teacher Status <sup>*</sup></label>
                                        <select name="teacher_status" class="form-control" required>
                                            <option></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Present Address </label>
                                        <textarea name="present_address" class="form-control" rows="3"><?php echo e($teacherPersonalInfoById->present_address); ?></textarea>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('present_address')?$errors->first('present_address'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Permanent Address <sup>*</sup></label>
                                        <textarea name="parmanent_address" class="form-control" rows="3" required><?php echo e($teacherPersonalInfoById->parmanent_address); ?></textarea>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('parmanent_address')?$errors->first('parmanent_address'):''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Serial Number </label>
                                            <input type="number" name="serial_no" value="<?php echo e($teacherPersonalInfoById->serial_no); ?>" min="1" class="form-control">
                                        <span class="text-danger">
                                            <?php echo e($errors->has('serial_no')?$errors->first('serial_no'):''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                        </div><!--personal-info==========-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="hidden" name="teacher_id" value="<?php echo e($teacherPersonalInfoById->id); ?>" />
                                    <input type="submit" name="submit"  value="Update Teacher Information" class="btn btn-warning btn-lg btn-block" />
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo e(url('/manage-teacher')); ?>" class="btn btn-success btn-md">&laquo; Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editTeacherPersonalInfo'].elements['gender'].value='<?php echo e($teacherPersonalInfoById->gender); ?>'
        document.forms['editTeacherPersonalInfo'].elements['religion'].value='<?php echo e($teacherPersonalInfoById->religion); ?>'
        document.forms['editTeacherPersonalInfo'].elements['marital_status'].value='<?php echo e($teacherPersonalInfoById->marital_status); ?>'
        document.forms['editTeacherPersonalInfo'].elements['teacher_status'].value='<?php echo e($teacherPersonalInfoById->teacher_status); ?>'
    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>