<?php $__env->startSection('title'); ?>
    Add New Teacher | sholla School & College
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
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Update Stuff Information</h3>
                </div>
                <div class="panel-body">
                    <form id="editStuffForm" action="<?php echo e(url('/update-stuff')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="personal-info">
                            <h3 class="text-primary">Stuff personal Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Name <sup>*</sup></label>
                                        <input type="text" name="name" value="<?php echo e($stuffInfoById->name); ?>" class="form-control" required />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('name')?$errors->first('name'):''); ?>

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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">  Blood Group </label>
                                        <input type="text" name="blood_group" value="<?php echo e($stuffInfoById->blood_group); ?>" class="form-control" />
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
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Mobile</label>
                                        <input type="number" name="mobile" value="<?php echo e($stuffInfoById->mobile); ?>" class="form-control" />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('mobile')?$errors->first('mobile'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Email </label>
                                        <input type="email" name="email" value="<?php echo e($stuffInfoById->email); ?>" class="form-control" />
                                        <span class="text-danger">
                                            <?php echo e($errors->has('email')?$errors->first('email'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Stuff Type <sup>*</sup></label>
                                        <select name="stuff_type" class="form-control" required>
                                            <option></option>
                                            <option value="Office-assistanta">Office-assistanta</option>
                                            <option value="Assistant-librarian">Assistant-librarian</option>
                                            <option value="Computer-operator">Computer-operator</option>
                                        </select>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('stuff_type')?$errors->first('stuff_type'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Select Image <sup>*</sup></label>
                                        <input type="file" name="image" class="form-control"  accept="image/*" />
                                        <div>
                                            <img src="<?php echo e(asset($stuffInfoById->image)); ?>" width="100">
                                        </div>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('image')?$errors->first('image'):''); ?>

                                        </span>
                                    </div>
                                </div>

                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Present Address <sup>*</sup></label>
                                        <textarea name="present_address" class="form-control" rows="3" required><?php echo e($stuffInfoById->present_address); ?></textarea>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('present_address')?$errors->first('present_address'):''); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Permanent Address</label>
                                        <textarea name="parmanent_address" class="form-control" rows="3"><?php echo e($stuffInfoById->parmanent_address); ?></textarea>
                                        <span class="text-danger">
                                            <?php echo e($errors->has('parmanent_address')?$errors->first('parmanent_address'):''); ?>

                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Stuff Status <sup>*</sup></label>
                                        <select name="stuff_status" class="form-control" required>
                                            <option></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                        </div><!--personal-info==========-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="hidden" name="stuff_id" value="<?php echo e($stuffInfoById->id); ?>" />
                                    <input type="submit" name="submit"  value="Update Stuff Information" class="btn btn-warning btn-lg btn-block" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo e(url('/manage-stuff')); ?>" class="btn btn-success">&laquo; Back</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editStuffForm'].elements['gender'].value='<?php echo e($stuffInfoById->gender); ?>';
        document.forms['editStuffForm'].elements['religion'].value='<?php echo e($stuffInfoById->religion); ?>';
        document.forms['editStuffForm'].elements['stuff_type'].value='<?php echo e($stuffInfoById->stuff_type); ?>';
        document.forms['editStuffForm'].elements['stuff_status'].value='<?php echo e($stuffInfoById->stuff_status); ?>';
        document.forms['editStuffForm'].elements['gender'].value='<?php echo e($stuffInfoById->gender); ?>';
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>