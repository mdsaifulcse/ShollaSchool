

<?php $__env->startSection('title'); ?>
    Manage College Student Info | sholla School & College
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
                    <h3>Manage College Students Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>SId</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Roll</th>
                            <th>Image</th>
                            <th>Mobile</th>
                            <th>Group</th>
                            <th>Session</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $collegeStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collegeStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td> <?php echo e($collegeStudent->student_name); ?> </td>
                                <td> <?php echo e($collegeStudent->student_id); ?> </td>
                                <td> <?php echo e($collegeStudent->class_id); ?> </td>
                                <td> <?php echo e($collegeStudent->section_name); ?> </td>
                                <td> <?php echo e($collegeStudent->student_roll); ?> </td>
                                <td> <img src="<?php echo e(asset($collegeStudent->student_image)); ?>" width="80" height="80"> </td>
                                <td> <?php echo e($collegeStudent->guardian_mobile); ?> </td>
                                <td> <?php echo e($collegeStudent->study_group); ?> </td>
                                <td> <?php echo e($collegeStudent->session_year); ?> </td>
                                <td>

                                    <a href="<?php echo e(url('/details-collete-student/'.$collegeStudent->id)); ?>" class="btn btn-success btn-xs" title="Edit College-Student">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>

                                    <a href="<?php echo e(url('/edit-collete-student/'.$collegeStudent->id)); ?>" class="btn btn-warning btn-xs" title="Edit College-Student">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-collete-student/'.$collegeStudent->id)); ?>" class="btn btn-danger btn-xs" title="Delete College-Student" onclick="return confirm('Are you sure you want to delete this ? You Can not undo it!')">
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