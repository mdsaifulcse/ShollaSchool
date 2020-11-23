

<?php $__env->startSection('title'); ?>
    Other Photo | Sholla School adn College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-warning">SHOLLA HIGHER SECONDARY SCHOOL & College Share The <br/> <em class="text-success">Other Related Photo</em> </h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $otherPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherPhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="single-teacher">
                            <p class="text-center">
                                <a class="fancybox-button" rel="fancybox-button" href="<?php echo e(asset($otherPhoto->gallery_photo)); ?>" class="img-responsive center-block" alt="<?php echo e($otherPhoto->caption); ?>">
                                    <img src="<?php echo e(asset($otherPhoto->gallery_photo)); ?>" class="img-responsive center-block" alt="<?php echo e($otherPhoto->caption); ?>">
                                </a>
                                <span><a href="<?php echo e(asset($otherPhoto->gallery_photo)); ?>" download="do">Download <i class="fa fa-download" aria-hidden="true"></i></a></span>
                                <strong><?php echo e($otherPhoto->caption); ?></strong><br/>

                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!--end row================-->
        </div><!--all-teacher-->
    </div> <!--end container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>