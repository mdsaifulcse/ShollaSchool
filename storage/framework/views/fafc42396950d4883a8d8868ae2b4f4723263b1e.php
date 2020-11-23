<?php $__env->startSection('title'); ?>
    Sholla School and College | Home page
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section id="slider-notic-area" xmlns:http="http://www.w3.org/1999/xhtml">
        <div class="container">


            <div class="marquee"> <!-- for marquee notice ===========  -->
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <h5 class="notic"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Latest Notice</h5>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-8">
                        <marquee  onmouseover="stop();" onmouseout="start();">
                            <h5>
                                <?php $__currentLoopData = $latestNotitices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestNotitice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="http://docs.google.com/gview?url=<?php echo e(asset($latestNotitice->notice_file)); ?>&embedded=true" target="blank"><span>&raquo;</span> <?php echo e($latestNotitice->subject); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </h5>
                        </marquee>
                    </div>
                </div>
            </div> <!-- end marquee notice===========-->

            <div class="row">
                <div class="col-md-7"> <!-- for slider =========== -->
                    <div id="main-slider" class="flexslider">
                        <ul class="slides">
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="<?php echo e(asset($slider->slider_image)); ?>" alt="" />
                                <div class="flex-caption">
                                    <h3><?php echo e($slider->title); ?></h3>
                                    <p><?php echo e($slider->caption); ?></p>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div> <!-- for end slider =========== -->

                <div class="col-md-5"> <!-- for Notice============ -->
                   <?php echo $__env->make('front.includes.notices', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div> <!-- end  Notice============ -->
            </div> <!-- end rwo -->
        </div><!-- end container -->
    </section>
    <!-- ================== Slider and Notice area end is here  ============== -->


    <!--================== About Institute start From Here  ====================-->

    <section id="about-institute">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="institute-info">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Institute Information</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?php echo e(url('/school-overview')); ?>"><span>&raquo;</span>  Institute Overview</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/history')); ?>"><span>&raquo;</span> History</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/building-info')); ?>"><span>&raquo;</span> Building Information</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/land-info')); ?>"><span>&raquo;</span> Land Information</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/rules')); ?>"><span>&raquo;</span> Law & Condition</a> </li>

                        </ul>
                    </div> <!-- institute-info -->

                    <div class="teacher-employee">
                        <h4><i class="fa fa-users" aria-hidden="true"></i> Teacher & Employee </h4>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?php echo e(url('/teachers')); ?>"><span>&raquo;</span> Teachers</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/administration')); ?>"><span>&raquo;</span>  Administration Committee</a> </li>
                            <li class="list-group-item"><a href="<?php echo e(url('/third-grade-emp')); ?>"><span>&raquo;</span> Third Grade Employee</a> </li>
                        </ul>
                    </div>

                </div> <!-- end col-md-3  -->

                <div class="col-md-7">
                    <div class="about-school-college">
                        <h4><i class="fa fa-university" aria-hidden="true"></i> About School & College</h4>
                        <div class="well">
                            <img src="<?php echo e(asset($aboutSchoolInfo->school_image)); ?>" style="width: 100%" alt="about Sholla school & college" class="img-responsive img-thumbnail center-block">
                            <blockquote>
                                    <?php echo $aboutSchoolInfo->short_description; ?>
                                 <a href="<?php echo e(url('/more-about-school/'.$aboutSchoolInfo->id)); ?>" class="btn btn-warning">Read More</a>

                            </blockquote>
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="president-speech">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> President's</h4>
                        <div>
                            <a href="<?php echo e(url('/president-speech/')); ?>">
                                <img src="<?php echo e(asset($presidentSpeech->person_image)); ?>" alt="Sholla School College President Image"  title="Sholla School College President Image" class="img-responsive img-thumbnail center-block">
                                <p>Read Speech</p>
                            </a>
                        </div>
                    </div>
                    <div class="headmaster-speech">
                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Principal's</h4>
                        <div>

                            <a href="<?php echo e(url('/principal-speech')); ?>">
                                <img src="<?php echo e(asset($principalSpeech->person_image)); ?>" alt="Sholla School College Principal Image" title="Sholla School College Principal Image" class="img-responsive img-thumbnail center-block">
                                <p>Read Speech</p>
                            </a>


                        </div>
                    </div>
                </div> <!-- end col-md-3 -->
            </div>
        </div>
    </section>

    <section id="student-of-the-year">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-success">Meritorious Students of the Year <?php echo e(date('Y')); ?> </h2>
                    <div class="talent-student-list">
                        <?php $__currentLoopData = $firstPlaceStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $firstPlaceStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-student">
                            <div class="">
                                <a href="<?php echo e(url('/merit-student/'.$firstPlaceStudent->id)); ?>"><img src="<?php echo e(asset($firstPlaceStudent->student_image)); ?>" alt="Meritotious Student Sholla School and College <?php echo e(date('Y')); ?>" class="img-responsive img-circle"></a>
                            </div>
                            <p><?php echo e($firstPlaceStudent->full_name); ?><br/>
                                <strong class="text-warning">Class : <?php echo e($firstPlaceStudent->runningClass->class_name); ?></strong> <br/>
                                <strong>Result Place: <?php echo e($firstPlaceStudent->result_place); ?></strong>
                            </p>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>