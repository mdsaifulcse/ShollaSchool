

<?php $__env->startSection('title'); ?>
    School Overview | Sholla School
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="overview">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College</h4>
                        </div>
                        <div class="panel panel-body">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <table class="table">
                                        <tr>
                                            <td><strong>EIIN &raquo;</strong></td>
                                            <td> : <a href="http://deb108321.dhakaeducationboard.gov.bd/" target="blank">108321</a> </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Established Year &raquo;</strong></td>
                                            <td> : 01-01-1945</td>
                                        </tr>
                                        <tr>
                                            <td><strong>President's &raquo;</strong></td>
                                            <td>: <?php echo e($overview->president); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Principal's &raquo;</strong></td>
                                            <td>: <?php echo e($overview->principal); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Students &raquo;</strong></td>
                                            <td>: <?php echo e($overview->total_student); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Teachers &raquo;</strong></td>
                                            <td>: <?php echo e($overview->total_teacher); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mobile &raquo;</strong></td>
                                            <td>: <?php echo e($overview->mobile); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email &raquo;</strong></td>
                                            <td>: <?php echo e($overview->email); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Address &raquo;</strong> </td>
                                            <td>: <?php echo e($overview->address); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>