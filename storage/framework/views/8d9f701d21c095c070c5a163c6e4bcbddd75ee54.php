

<?php $__env->startSection('title'); ?>
    HSC Result| Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="well">
                    <h3 class="text-center"><strong class="text-primary">Higher School Certificate (HSC) </strong> Result - <?php echo e(date('Y')); ?> </h3> <br/>
                    <?php $__currentLoopData = $hscResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hscResult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="result">
                        <span>
                        <h4><?php echo e($hscResult->title); ?></h4>
                        <a href="<?php echo e(asset($hscResult->result_file)); ?>" download title="<?php echo e($hscResult->title); ?>">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                    </span>
                            <?php
                            $resultName=$hscResult->result_file;
                            $resultFileExtention=explode('.', $resultName);
                            ?>

                            <?php if($resultFileExtention[1]=='pdf'): ?>
                                <iframe src="http://docs.google.com/gview?url=<?php echo e(asset($hscResult->result_file)); ?>&embedded=true" style="width:100%; height:350px;" frameborder="0"></iframe>
                            <?php else: ?>
                                <img src="<?php echo e(asset($hscResult->result_file)); ?>" class="img-responsive center-block" alt="<?php echo e($hscResult->title); ?>">
                            <?php endif; ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>