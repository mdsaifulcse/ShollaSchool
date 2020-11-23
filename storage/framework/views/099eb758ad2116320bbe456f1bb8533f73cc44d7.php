<?php $__env->startSection('title'); ?>
    Teacher Information | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="well">
                    <h2 class="teacher-info-title">Information About  <?php echo e($teacherInfoById->name); ?></h2>
                    <ul class="teacher-info-nav clearfix">
                        <li>
                            <a href="#personal-info" class="tablink active-info-nav" onclick="openTab(event, 'personal-info')">Parsonal Information</a>
                        </li>
                        <li>
                            <a href="#educational-info" class="tablink " onclick="openTab(event, 'educational-info')">Educational Qualification</a>
                        </li>
                        <li>
                            <a href="#teaching-info" class="tablink " onclick="openTab(event, 'teaching-info')">Teaching Information</a>
                        </li>
                    </ul>

                    <div class="row teacher" id="personal-info">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="<?php echo e(asset($teacherInfoById->image)); ?>" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">
                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Name </strong></td>
                                    <td> : <?php echo e($teacherInfoById->name); ?> </td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : <?php echo e($teacherInfoById->father_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : <?php echo e($teacherInfoById->mother_name); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> Gender </strong></td>
                                    <td> : <?php echo e($teacherInfoById->gender); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-md" aria-hidden="true"></i> Blood Group </strong></td>
                                    <td> : <?php echo e($teacherInfoById->blood_group); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : <?php echo e($teacherInfoById->religion); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star-o" aria-hidden="true"></i> Maritial Status </strong></td>
                                    <td> : <?php echo e($teacherInfoById->marital_status); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-gift" aria-hidden="true"></i>  Date of Birth </strong></td>
                                    <td> :  <?php echo e(\Carbon\Carbon::parse($teacherInfoById->date_of_birth)->format('d-m-Y')); ?>   </td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-mobile" aria-hidden="true"></i> Mobile </strong></td>
                                    <td> : <?php echo e($teacherInfoById->mobile); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> eMail </strong></td>
                                    <td> : <?php echo e($teacherInfoById->email); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star-o" aria-hidden="true"></i> Status </strong></td>
                                    <td> : <?php echo e($teacherInfoById->teacher_status==1?'Running Teacher':'Retired'); ?></td>
                                </tr>


                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Present Address </strong></td>
                                    <td> : <?php echo e($teacherInfoById->present_address); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Permanent Address </strong></td>
                                    <td> : <?php echo e($teacherInfoById->parmanent_address); ?></td>
                                </tr>
                            </table>
                        </div>

                    </div><!-- end  personal info-->


                    <div class="row teacher" id="educational-info" style="display: none;">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="<?php echo e(asset($teacherInfoById->image)); ?>" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table table-bordered table-striped  table-hover ">
                                <thead>
                                <tr class="bg-warning">
                                    <th>Education Type</th>
                                    <th>Group/Mejor Subject</th>
                                    <th>Board/Institute</th>
                                    <th>GPA/Division</th>
                                    <th>Passing Year</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="bg-info"><?php echo e($teacherInfoById->b_ed); ?></td>
                                    <td><?php echo e($teacherInfoById->bed_subject); ?></td>
                                    <td><?php echo e($teacherInfoById->bed_board); ?></td>
                                    <td><?php echo e($teacherInfoById->bed_result); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($teacherInfoById->bed_passing_year)->format('Y')); ?></td>
                                </tr>
                                <tr>
                                    <td class="bg-info"><?php echo e($teacherInfoById->masters); ?></td>
                                    <td><?php echo e($teacherInfoById->masters_subject); ?></td>
                                    <td><?php echo e($teacherInfoById->masters_board); ?></td>
                                    <td>F<?php echo e($teacherInfoById->masters_result); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($teacherInfoById->masters_passing_year)->format('Y')); ?></td>
                                </tr>
                                <tr>
                                    <td class="bg-info"><?php echo e($teacherInfoById->graduation); ?></td>
                                    <td><?php echo e($teacherInfoById->graduation_subject); ?></td>
                                    <td><?php echo e($teacherInfoById->graduation_board); ?></td>
                                    <td><?php echo e($teacherInfoById->graduation_result); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($teacherInfoById->graduation_passing_year)->format('Y')); ?></td>
                                </tr>
                                <tr>
                                    <td class="bg-info"><?php echo e($teacherInfoById->hsc); ?></td>
                                    <td><?php echo e($teacherInfoById->hsc_group); ?></td>
                                    <td><?php echo e($teacherInfoById->hsc_board); ?></td>
                                    <td><?php echo e($teacherInfoById->hsc_result); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($teacherInfoById->hsc_passing_year)->format('Y')); ?></td>
                                </tr>
                                <tr>
                                    <td class="bg-info"><?php echo e($teacherInfoById->ssc); ?></td>
                                    <td><?php echo e($teacherInfoById->ssc_group); ?></td>
                                    <td><?php echo e($teacherInfoById->ssc_board); ?></td>
                                    <td><?php echo e($teacherInfoById->ssc_result); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($teacherInfoById->ssc_passing_year)->format('Y')); ?></td>
                                </tr>
                                </tbody>


                            </table>
                        </div>

                    </div><!-- end  personal info-->



                    <div class="row teacher" id="teaching-info" style="display: none;">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="<?php echo e(asset('/front/')); ?>/img/teachers/t_job.jpg" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">

                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Designation </strong></td>
                                    <td> : <?php echo e($teacherInfoById->designation); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-heart-o" aria-hidden="true"></i> Specialist In</strong></td>
                                    <td> : <?php echo e($teacherInfoById->special_in); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-pagelines" aria-hidden="true"></i> Teacher Type </strong></td>
                                    <td> : <?php echo e($teacherInfoById->teacher_type); ?></td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Joining Date </strong></td>
                                    <td> :  <?php echo e(\Carbon\Carbon::parse($teacherInfoById->join_date)->format('d-m-Y')); ?>  </td>
                                </tr>


                            </table>
                        </div>

                    </div><!-- end  personal info-->


                </div> <!-- end well -->

            </div><!-- end col-md-12-->
        </div><!-- end first row -->
    </div><!-- end container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>