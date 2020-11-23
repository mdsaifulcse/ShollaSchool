<?php $__env->startSection('title'); ?>
    Third Grade Employee list | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College Third Grade Employee</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Office-assistanta">OFFICE ASSISTANT  </li>
                            <li type="button" data-filter=".Assistant-librarian" >ASSISTANT LIBRARIAN</li>
                            <li type="button" data-filter=".Computer-operator" >COMPUTER OPERATOR</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                <?php $__currentLoopData = $activeStuffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeStuff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mix <?php echo e($activeStuff->stuff_type); ?>">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="<?php echo e(asset($activeStuff->image)); ?>" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span><?php echo e($activeStuff->name); ?></span>
                            <strong><?php echo e($activeStuff->stuff_type); ?> </strong>

                        </p>
                        <div class="content">
                            <a href="<?php echo e(url('/stuff-info/'.$activeStuff->id)); ?>">Details
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