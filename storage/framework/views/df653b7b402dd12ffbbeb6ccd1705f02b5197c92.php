
<?php $__env->startSection('title'); ?>
    Alumni Students | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="well overview history">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive center-block img-circle overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">

                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Alumni students List </em></h3>
                        </div>
                        <div class="panel panel-body">
                            <div class="table-responsive">
                                <table id="table" width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr class="bg-success">
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>University</th>
                                        <th>Profession</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Blood_group</th>
                                        <th>Education</th>
                                        <th>Image</th>
                                        <th>Present Address</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1;?>
                                    <?php $__currentLoopData = $publishedalumniStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishedalumniStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($publishedalumniStudent->name); ?></td>
                                            <td><?php echo e($publishedalumniStudent->university); ?></td>
                                            <td><?php echo e($publishedalumniStudent->profession); ?></td>
                                            <td><?php echo e($publishedalumniStudent->mobile); ?></td>
                                            <td><?php echo e($publishedalumniStudent->email); ?></td>
                                            <td><?php echo e($publishedalumniStudent->blood_group); ?></td>
                                            <td><?php echo e($publishedalumniStudent->education); ?></td>
                                            <td><img src="<?php echo e(asset($publishedalumniStudent->image)); ?>" width="50" height="50"> </td>
                                            <td><?php echo e($publishedalumniStudent->present_address); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>