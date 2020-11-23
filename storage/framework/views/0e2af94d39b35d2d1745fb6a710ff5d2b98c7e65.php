

<?php $__env->startSection('title'); ?>
    Add new Routine | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($message=Session::get('message')): ?>
                <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
            <?php endif; ?>
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-10 col-md-offset-1 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Routine</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(url('/new-routine')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-4">Subject <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="subject" class="form-control" required placeholder="enter notice subject">
                                <span>
                                    <?php echo e($errors->has('subject')?$errors->first('subject'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Routine File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="routine_file" class="form-control" required>
                                <span class="text-danger">
                                    <?php echo e($errors->has('routine_file')?$errors->first('routine_file'):''); ?>

                                </span>
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
                                    <?php echo e($errors->has('routine_as')?$errors->first('routine_as'):''); ?>

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
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Routine"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>