
<?php $__env->startSection('title'); ?>
    Administrator Information | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="well">
                    <h2 class="teacher-info-title"> Information About <br> <span class="text-warning"><?php echo e($administratorInfoById->name); ?></span></h2>
                    <ul class="teacher-info-nav clearfix">
                        <li>
                            <a href="#personal-info" class="tablink active-info-nav" onclick="openTab(event, 'personal-info')">Details Information</a>
                        </li>
                    </ul>

                    <div class="row teacher" id="personal-info">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="<?php echo e(asset($administratorInfoById->image)); ?>" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">
                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Name </strong></td>
                                    <td> : <?php echo e($administratorInfoById->name); ?> </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Designation </strong></td>
                                    <td> : <?php echo e($administratorInfoById->administratorDesignation->designation_name); ?> </td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : <?php echo e($administratorInfoById->father_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : <?php echo e($administratorInfoById->mother_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> Gender </strong></td>
                                    <td> : <?php echo e($administratorInfoById->gender); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-md" aria-hidden="true"></i> Blood Group </strong></td>
                                    <td> : <?php echo e($administratorInfoById->blood_group); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : <?php echo e($administratorInfoById->religion); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star-o" aria-hidden="true"></i> Maritial Status </strong></td>
                                    <td> : <?php echo e($administratorInfoById->marital_status); ?></td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-mobile" aria-hidden="true"></i> Mobile </strong></td>
                                    <td> : <?php echo e($administratorInfoById->mobile); ?></td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-star-o" aria-hidden="true"></i> Administrator Type </strong></td>
                                    <td> : <?php echo e($administratorInfoById->administrator_type=='Teacher'?'Teacher':'Managing Committee Member'); ?></td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Highest </strong></td>
                                    <td> : <?php echo e($administratorInfoById->education); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> eMail </strong></td>
                                    <td> : <?php echo e($administratorInfoById->email); ?></td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-gift" aria-hidden="true"></i>  Date of Birth </strong></td>
                                    <td> : <?php echo e(\Carbon\Carbon::parse($administratorInfoById->date_of_birth)->format('Y-m-d')); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Present Address </strong></td>
                                    <td> : <?php echo e($administratorInfoById->present_address); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Permanent Address </strong></td>
                                    <td> : <?php echo e($administratorInfoById->parmanent_address); ?></td>
                                </tr>
                            </table>
                            <a href="<?php echo e(url('/administration')); ?>" class="btn btn-success">&laquo; Back</a>
                        </div>

                    </div><!-- end  personal info-->


                </div> <!-- end well -->

            </div><!-- end col-md-12-->
        </div><!-- end first row -->
    </div><!-- end container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>