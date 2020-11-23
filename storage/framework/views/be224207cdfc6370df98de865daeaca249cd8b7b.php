

<?php $__env->startSection('title'); ?>
    Course Of Studies | Sholla School & College
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br/>
    <div class="well">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo e(asset($coursesStudies->image)); ?>" class="img-responsive img-thumbnail">
            </div>
            <div class="col-md-6">
                <div class="course-content">
                    <h2><?php echo e($coursesStudies->title); ?></h2><hr>
                    <p>
                        <?php echo $coursesStudies->contents;?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <?php echo $__env->make('front.includes.related', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>