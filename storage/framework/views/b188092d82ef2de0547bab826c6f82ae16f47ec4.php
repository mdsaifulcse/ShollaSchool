<?php $__env->startSection('title'); ?>
    Meritorious of the Year <?php echo e(date('Y')); ?> | Sholla School and College
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <ul class="teacher-info-nav clearfix">
                        <li>
                            <a href="#personal-info" class="tablink active-info-nav">Details Information</a>
                        </li>
                    </ul>

                    <div class="row teacher" id="personal-info">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="<?php echo e(asset($meritStudentInfoById->student_image)); ?>" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">

                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Name </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->full_name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->father_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->mother_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Previous Class </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->previousClass->class_name); ?></td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Running Class </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->runningClass->class_name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Session Year </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->session_year); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Result Year </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->result_year); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Result Place </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->result_place); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Grate Point </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->grate_point); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Total Number </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->total_number); ?> </td>
                                </tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> gender </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->gender); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->religion); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Address </strong></td>
                                    <td> : <?php echo e($meritStudentInfoById->address); ?></td>
                                </tr>
                            </table>
                            <a href="<?php echo e(url('/meritorious-students')); ?>" class="btn btn-warning "><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back </a>
                        </div>

                    </div><!-- end  personal info-->

                </div><!-- end col-md-12-->
            </div><!-- end row -->

        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>