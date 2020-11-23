

<?php $__env->startSection('title'); ?>
    President speech speech of Sholla Scholl and College | speech
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="overview history">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College</h4>
                        </div>
                        <div class="panel panel-body">
                            <h3 class="text-primary">President Speech</h3><hr>
                            <img src="<?php echo e(asset($presidentSpeech->person_image)); ?>" title="SHOLLA HIGHER SECONDARY SCHOOL & College Precident's images" class="img-responsive img-thumbnail center-block"> <br><br>
                            <p style="width: 80%; margin: 0 auto">
                                <?php echo $presidentSpeech->speech_content;?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>