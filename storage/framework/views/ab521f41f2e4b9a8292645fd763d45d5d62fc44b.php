<?php $__env->startSection('title'); ?>
    Manage Notice | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"><?php echo e($message); ?> </h3>
                <?php endif; ?>
                <div class="panel-heading">
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Notice Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($notice->subject); ?></td>
                                <td class="center"><?php echo e($notice->published_status ==1?'Published':'Unpublised'); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($notice->updated_at)->diffForHumans()); ?></td>
                                <td>
                                    <a href="http://docs.google.com/gview?url=<?php echo e(asset($notice->notice_file)); ?>&embedded=true" target="_blank" class="btn btn-info btn-xs" title="Details about Notic">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                    </a>

                                    <?php if($notice->published_status == 1): ?>
                                        <a href="<?php echo e(url('/unpublished-notice/'.$notice->id)); ?>" class="btn btn-success btn-xs" title="Published Notice">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/published-notice/'.$notice->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished Notice">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php echo e(url('/edit-notice/'.$notice->id)); ?>" class="btn btn-warning btn-xs" title="Edit Notice">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-notice/'.$notice->id)); ?>" class="btn btn-danger btn-xs" title="Delete Notice" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>