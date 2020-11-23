

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
                    <h3>Manage Teacher Educational Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Special In</th>
                            <th>Teacher Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $teacherEducationInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacherEducationInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td> <?php echo e($teacherEducationInfo->name); ?> </td>
                                <td> <?php echo e($teacherEducationInfo->designation); ?> </td>
                                <td> <?php echo e($teacherEducationInfo->special_in); ?> </td>
                                <td> <?php echo e($teacherEducationInfo->teacher_type); ?> </td>
                                <td>

                                    <a href="<?php echo e(url('/edit-teacher-education/'.$teacherEducationInfo->id)); ?>" class="btn btn-warning btn-xs" title="Edit Teacher Information">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-teacher-education/'.$teacherEducationInfo->id)); ?>" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-xs" title="Delete Teacher Information">
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