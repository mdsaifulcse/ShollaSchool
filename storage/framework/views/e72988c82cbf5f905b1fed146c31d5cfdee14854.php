

<?php $__env->startSection('title'); ?>
    Manage Meritorious Student | sholla School & College
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
                    <h3> Meritorious Student list</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Fater's Name</th>
                            <th>Mother's Name</th>
                            <th>Result Year</th>
                            <th>Running Class</th>
                            <th>Grate Point</th>
                            <th>Result</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $meritoriousStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meritoriousStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?> </td>
                                <td><?php echo e($meritoriousStudent->full_name); ?> </td>
                                <td><?php echo e($meritoriousStudent->father_name); ?> </td>
                                <td><?php echo e($meritoriousStudent->mother_name); ?> </td>
                                <td class="bg-primary"><?php echo e($meritoriousStudent->result_year); ?> </td>
                                <td class="bg-info"><?php echo e($meritoriousStudent->runningClass->class_name); ?> </td>
                                <td><?php echo e($meritoriousStudent->grate_point); ?> </td>
                                <td class="bg-info"><?php echo e($meritoriousStudent->result_place); ?> </td>
                                <td><?php echo e($meritoriousStudent->address); ?> </td>

                                <td><img src="<?php echo e(asset($meritoriousStudent->student_image)); ?>" alt="Student" width="50"> </td>

                                <td class="center"><?php echo e($meritoriousStudent->published_status ==1?'Published':'Unpublised'); ?></td>
                                <td>

                                    <?php if($meritoriousStudent->published_status == 1): ?>
                                        <a href="<?php echo e(url('/unpublished-mrt-student/'.$meritoriousStudent->id)); ?>" class="btn btn-success btn-xs" title="Published Student">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/published-mrt-student/'.$meritoriousStudent->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished Student">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php echo e(url('/edit-mrt-student/'.$meritoriousStudent->id)); ?>" class="btn btn-warning btn-xs" title="Edit Student">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-mrt-student/'.$meritoriousStudent->id)); ?>" class="btn btn-danger btn-xs" title="Delete Student" onclick="return confirm('Are you sure to delete this'); ">
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