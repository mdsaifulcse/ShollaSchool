<?php $__env->startSection('title'); ?>
    School Students Info | Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <br/>
                <div class="well student-info table-responsive">
                    <h3 class="text-success text-center"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <strong class="text-warning">School</strong> Student Information</h3><br/>
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr class="bg-warning">
                            <th>SL No</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Roll</th>
                            <th>Profile</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $schoolStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($schoolStudent->student_id); ?></td>
                            <td><?php echo e($schoolStudent->student_name); ?> </td>
                            <td><?php echo e($schoolStudent->classOfSchool->class_name); ?></td>
                            <td><?php echo e($schoolStudent->sectionOfClass->section_name); ?></td>
                            <td><?php echo e($schoolStudent->student_roll); ?></td>
                            <td>
                                <a href="<?php echo e(url('/school-student-profile/'.$schoolStudent->id)); ?>" data-toggle="modal" data-target="">Details
                                    <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>

                    </table>
                </div><!-- student-info -->
            </div>
            <div class="col-md-3">
                <br/>
                <div class="well">
                    <br/>
                    <br/>
                    <?php echo $__env->make('front.includes.related', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>