

<?php $__env->startSection('title'); ?>
    Add new Result | sholla School & College
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
        <div class="col-md-10 col-md-offset-1 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Result</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(url('/new-result')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-4">Result Title <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" required placeholder="Max: 50 Character">
                                <span>
                                    <?php echo e($errors->has('title')?$errors->first('title'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Result File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="result_file" class="form-control" required>
                                <span class="text-danger">
                                    <?php echo e($errors->has('result_file')?$errors->first('result_file'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Result as <sup>*</sup></label>
                            <div class="col-md-8">
                                <select name="result_as" class="form-control" required>
                                    <option></option>
                                    <option value="academic-result">Academic-Result</option>
                                    <option value="jsc-result">JSC-Result</option>
                                    <option value="ssc-result">SSC-Result</option>
                                    <option value="hsc-result">HSC-Result</option>
                                </select>
                                <span>
                                    <?php echo e($errors->has('result_as')?$errors->first('result_as'):''); ?>

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
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Result"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>