
<?php $__env->startSection('title'); ?>
    Exam Routine | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="routine">
        <div class="container">
            <div class="well">
                <div class="routing-heading">
                    <h2 class="text-info">SHOLLA HIGHER SECONDARY SCHOOL & College
                        <span class="text-warning">Exam Routine</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-8"> <!-- for slider =========== -->
                        <div id="main-slider" class="flexslider routine-slider">
                            <ul class="slides">
                            <?php $__currentLoopData = $examRoutines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examRoutine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                   <?php
                                    $routineName=$examRoutine->routine_file;
                                    $routineName=explode('.', $routineName);

                                    if ( $routineName[1]=="pdf") { ?>

                                       <iframe src="http://docs.google.com/gview?url=<?php echo e(asset($examRoutine->routine_file)); ?>&embedded=true" style="width:100%; height:370px;" frameborder="0"></iframe>

                                       <?php }else { ?>
                                       <img src="<?php echo e(asset($examRoutine->routine_file)); ?>" class="img-responsive" alt="Exam Routine">
                                    <?php } ?>

                                       <div class="flex-caption routine">

                                        <h3><?php echo e($examRoutine->subject); ?></h3>

                                        <a href="<?php echo e(asset($examRoutine->routine_file)); ?>" download><p><i class="fa fa-cloud-download fa-lg" aria-hidden="true"></i> Download</p> </a>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div> <!-- for end slider =========== -->

                    <div class="col-md-4"> <!-- for Notice============ -->
                        <?php echo $__env->make('front.includes.notices', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div> <!-- end  Notice============ -->
                </div> <!-- end rwo -->

            </div><!-- end container -->
        </div>
    </section>
    <!-- ========== Slider and Notice area end is here  =========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>