<?php echo $__env->make('front.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- ============== Slider and Notice area start form here  =========== -->

<?php echo $__env->yieldContent('content'); ?>


<!--================== About Institute End is Here  ====================-->

<?php echo $__env->make('front.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>