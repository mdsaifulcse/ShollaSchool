

<?php $__env->startSection('title'); ?>
    Update Overview | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
                <?php endif; ?>

                <div class="panel-heading">
                    <h3 class="page-header">Sholl School & College Management</h3>
                    <h3>About School Information</h3>
                </div>

            </div>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <table class="table table-bordered">
                    <thead>
                    <tr class="bg-primary">
                        <th>President's</th>
                        <th>Principal's</th>
                        <th>Total Students</th>
                        <th>Total Teachers</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo e($overview->president); ?></td>
                        <td><?php echo e($overview->principal); ?></td>
                        <td><?php echo e($overview->total_student); ?></td>
                        <td><?php echo e($overview->total_teacher); ?></td>
                        <td><?php echo e($overview->mobile); ?></td>
                        <td><?php echo e($overview->email); ?></td>
                        <td><?php echo e($overview->address); ?></td>
                        <td>
                            <a href="<?php echo e(url('/update-overview/'.$overview->id)); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>