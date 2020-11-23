

<?php $__env->startSection('title'); ?>
    Add new slider | sholla School & College
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
        <div class="col-md-8 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Slider Image</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(url('/new-slider')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-3">Title <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="title" class="form-control" required placeholder="enter slider title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Caption <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="caption" class="form-control" required placeholder="enter slider caption">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Select Image <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="file" name="slider_image" class="form-control" required accept="image/*">
                                <span class="text-danger">
                                    <?php echo e($errors->has('slider_image')?$errors->first('slider_image'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Published Status</label>
                            <div class="col-sm-9">
                                <select name="published_status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-sm-9 col-sm-offset-3">
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Slider Image"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>