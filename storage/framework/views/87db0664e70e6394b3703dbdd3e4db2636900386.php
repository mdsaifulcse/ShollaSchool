

<?php $__env->startSection('title'); ?>
    Meritorious of the Year <?php echo e(date('Y')); ?> | Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College All Meritorious Students</h2>

                        <br/>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <?php $__currentLoopData = $runingClassIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $runingClassId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li type="button" data-filter=".<?php echo e($runingClassId->runningClass->class_name); ?>"><?php echo e($runingClassId->runningClass->class_name); ?> </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                <?php $__currentLoopData = $publisheMeritStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisheMeritStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mix <?php echo e($publisheMeritStudent->runningClass->class_name); ?>">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="<?php echo e(asset($publisheMeritStudent->student_image)); ?>" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span><?php echo e($publisheMeritStudent->full_name); ?></span>
                            <strong>Class : <?php echo e($publisheMeritStudent->runningClass->class_name); ?></strong><br/>
                            <strong>Place: <?php echo e($publisheMeritStudent->result_place); ?></strong><br/>
                            <strong><?php echo e($publisheMeritStudent->result_year); ?> </strong>

                        </p>
                        <div class="content">
                            <a href="<?php echo e(url('merit-student/'.$publisheMeritStudent->id)); ?>">Details
                                <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div><!-- teacher-list -->

            <!-- Modal -->
        </div><!--all-teacher-->


    </div>
    </div> <!--end container-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>