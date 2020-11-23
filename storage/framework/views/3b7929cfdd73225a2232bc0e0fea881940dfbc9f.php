

<?php $__env->startSection('title'); ?>
    Manage Teacher Personal Info | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"><?php echo e($message); ?> </h3>
                <?php endif; ?>
                <div class="panel-heading">
                    <h3>Manage Teacher Personal Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Blood Group</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Present Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $teacherspersonalInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacherpersonalInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td> <?php echo e($teacherpersonalInfo->name); ?> </td>
                                <td><img src="<?php echo e(asset($teacherpersonalInfo->image)); ?>" width="50"></td>
                                <td> <?php echo e($teacherpersonalInfo->blood_group); ?> </td>
                                <td> <?php echo e($teacherpersonalInfo->mobile); ?> </td>
                                <td> <?php echo e($teacherpersonalInfo->email); ?> </td>
                                <td>
                                    <?php if($teacherpersonalInfo->teacher_status==1): ?>
                                        <span class="bg-primary">
                                            <?php echo e('Active'); ?>

                                        </span>
                                        <?php else: ?>
                                        <span class="bg-danger">
                                            <?php echo e('Inactive'); ?>

                                        </span>
                                    <?php endif; ?>

                                </td>
                                <td> <?php echo e($teacherpersonalInfo->present_address); ?> </td>
                                <td>

                                    <a href="<?php echo e(url('/edit-teacher-personal-info/'.$teacherpersonalInfo->id)); ?>" class="btn btn-warning btn-xs" title="Edit Teacher Information">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-teacher-personal-info/'.$teacherpersonalInfo->id)); ?>" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-xs" title="Delete Teacher Information">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>