

<?php $__env->startSection('title'); ?>
    Academic Curriculum | Sholla School and College
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="well overview history">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel panel-heading">
                        <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive img-circle center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                        <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College <br/> <strong>Academic Curriculum</strong> </h4>
                    </div>
                    <div class="panel panel-body">
                        <h3 class="text-default"><?php echo e($curriculumContent->title); ?></h3><hr>
                        <img src="<?php echo e(asset($curriculumContent->image)); ?>" title="SHOLLA HIGHER SECONDARY SCHOOL & College Principal's images" class="img-responsive img-thumbnail" width="100%"> <br><br>
                        <p><?php echo $curriculumContent->contents;?></p>
                    </div>
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