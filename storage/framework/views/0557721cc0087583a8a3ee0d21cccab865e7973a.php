

<?php $__env->startSection('title'); ?>
    Update Overview | sholla School & College
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
        <div class="col-md-8 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-edit"></span> Update School Overview</h3>
                </div>
                <div class="panel-body">
                    <form id="editOverviewForm" class="form-horizontal" action="<?php echo e(url('/update-Overview')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-3">President's  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="president" value="<?php echo e($overviewInfoById->president); ?>" class="form-control" required placeholder="enter President's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Principal's  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="principal" value="<?php echo e($overviewInfoById->principal); ?>" class="form-control" required placeholder="enter Principal's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Students  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="total_student" value="<?php echo e($overviewInfoById->total_student); ?>" class="form-control" required placeholder="enter Total Students's">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Teachers  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="total_teacher" value="<?php echo e($overviewInfoById->total_teacher); ?>" class="form-control" required placeholder="enter Total Teachers's">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="mobile" value="<?php echo e($overviewInfoById->mobile); ?>" class="form-control" required placeholder="enter mobile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="email" name="email" value="<?php echo e($overviewInfoById->email); ?>" class="form-control" required placeholder="enter President's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="address" rows="4"><?php echo e($overviewInfoById->address); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-sm-9 col-sm-offset-3">
                                <input type="hidden" name="overview_id" value="<?php echo e($overviewInfoById->id); ?>" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update School Overview Information"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    document.forms['editOverviewForm'].elements['published_status'].value='<?php echo e($overviewInfoById->published_status); ?>';
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>