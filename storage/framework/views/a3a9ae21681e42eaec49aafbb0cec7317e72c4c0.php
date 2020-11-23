<?php $__env->startSection('title'); ?>
    School Student Profile | Sholla School and College
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
                            <img src="<?php echo e(asset($schoolStudentProfile->student_image)); ?>" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">
                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Student Name </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->student_name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->father_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->mother_name); ?></td>
                                </tr>
                                

                                <tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> Gender </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->gender); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->religion); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Birth Cirtificate Number </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->birth_reg_number); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Address </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->village); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-envelope" aria-hidden="true"></i> Post Office </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->post_office); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Thana / Upajila </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->thana); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Grate Point </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->district); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Student as  </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->student_as); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student ID </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->student_id); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Student Roll </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->student_roll); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Class Name </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->classOfSchool->class_name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Section Name </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->sectionOfClass->section_name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Study group </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->study_group); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Session </strong></td>
                                    <td> : <?php echo e($schoolStudentProfile->session_year); ?> </td>
                                </tr>
                            </table>
                            <a href="<?php echo e(url('/school-student')); ?>" class="btn btn-warning "><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back </a>
                        </div>

                    </div><!-- end  personal info-->

                </div><!-- end col-md-12-->
            </div><!-- end row -->

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>