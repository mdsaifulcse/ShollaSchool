

<?php $__env->startSection('title'); ?>
    Admin Sholla School & College
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top: 2%; background-color: #33b7a5">
        <div class="col-md-12">
            <hr/><h2 class="text-success text-center "> <b class="text-primary"><i class="fa fa-heart-o" aria-hidden="true"></i> Welcome To <i class="fa fa-heart-o" aria-hidden="true"></i></b> <br/> Sholla High School & College
                <br/><strong class="badge">Management Systme</strong> </h2><hr/>

        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>