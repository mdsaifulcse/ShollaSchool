
<?php $__env->startSection('title'); ?>
    Administrator list | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College Aministration</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Teacher">Teacher </li>
                            <li type="button" data-filter=".Managing-Committee" >Managing Committee</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                <?php $__currentLoopData = $activeAdministrators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeAdministrator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mix <?php echo e($activeAdministrator->administrator_type); ?>">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="<?php echo e(asset($activeAdministrator->image)); ?>" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span><?php echo e($activeAdministrator->name); ?></span>
                            <strong><?php echo e($activeAdministrator->administratorDesignation->designation_name); ?> </strong>

                        </p>
                        <div class="content">
                            <a href="<?php echo e(url('/administration-info/'.$activeAdministrator->id)); ?>">Details
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