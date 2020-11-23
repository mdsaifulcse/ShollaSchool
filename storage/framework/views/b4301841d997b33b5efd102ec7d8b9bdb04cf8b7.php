<?php $__env->startSection('title'); ?>
    Teachers list |sholla School & College
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College All Teacher List</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Principal">Principal </li>
                            <li type="button" data-filter=".Assistant-professor">Assistant-professor </li>
                            <li type="button" data-filter=".Lecturer">Lecturer </li>
                            <li type="button" data-filter=".Headmaster">Headmaster </li>
                            <li type="button" data-filter=".Assistant-Headmaster" >Assistant Headmaster </li>
                            <li type="button" data-filter=".Assistant-Teacher">Assistant Teacher </li>
                            <li type="button" data-filter=".Assistant-laibrarian">LAB REPRESENTATIVE </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mix <?php echo e($teacher->designation); ?>">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="<?php echo e(asset($teacher->image)); ?>" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span><?php echo e($teacher->name); ?></span>
                            <strong><?php echo e($teacher->designation); ?> </strong>

                        </p>
                        <div class="content">
                            <a href="<?php echo e(url('/teacher-info/'.$teacher->id)); ?>">Details
                                <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div> <!--end container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>