<div class="notice-list ">
    <h3><i class="fa fa-tags"></i> Notice</h3>
    <ul class="list-group">
        <?php $__currentLoopData = $publishedNotices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishedNotice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <a href="http://docs.google.com/gview?url=<?php echo e(asset($publishedNotice->notice_file)); ?>&embedded=true" target="blank"><span>&raquo;</span> <?php echo e($publishedNotice->subject); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</div>