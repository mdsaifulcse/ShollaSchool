<?php $__env->startSection('title'); ?>
    Notices download | Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="overview">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <br/>
                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Notice List </em></h3>
                        </div>

                        <div class="panel panel-body table-responsive">
                            <table id="table" class="notice-table table  table-striped table-hover">
                                <thead>
                                <tr class="bg-warning">
                                    <th>Sl No</th>
                                    <th>Subject</th>
                                    <th>Published Date</th>
                                    <th>View</th>
                                    <th>Download</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php ($i=1); ?>
                                    <?php $__currentLoopData = $publishedNotices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishedNotice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($publishedNotice->subject); ?> </td>
                                        <td><?php echo e(date('d-m-Y',strtotime($publishedNotice->created_at))); ?></td>
                                        <td>
                                            <a href="http://docs.google.com/gview?url=<?php echo e(asset($publishedNotice->notice_file)); ?>&embedded=true" target="blank"><i class="fa fa-eye" aria-hidden="true"></i> view</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(asset($publishedNotice->notice_file)); ?>" download=""><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> download</a>
                                        </td>
                                    </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>