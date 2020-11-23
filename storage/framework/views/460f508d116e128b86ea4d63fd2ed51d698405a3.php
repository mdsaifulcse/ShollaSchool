

<?php $__env->startSection('title'); ?>
    Manage slider | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <br/>
            <div class="panel">
                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"><?php echo e($message); ?> </h3>
                <?php endif; ?>
                <div class="panel-heading">
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Your Slider Information List</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="odd gradeX">
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($slider->title); ?></td>
                            <td><?php echo e($slider->caption); ?></td>
                            <td class="center"><img src="<?php echo e(asset($slider->slider_image)); ?>" width="80" alt=""> </td>
                            <td class="center"><?php echo e($slider->published_status ==1?'Published':'Unpublised'); ?></td>
                            <td>

                                <?php if($slider->published_status == 1): ?>
                                    <a href="<?php echo e(url('/unpublished-slider/'.$slider->id)); ?>" class="btn btn-success btn-xs" title="Published slider">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('/published-slider/'.$slider->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished slider">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                <?php endif; ?>

                                    <a href="<?php echo e(url('/edit-slider/'.$slider->id)); ?>" class="btn btn-warning btn-xs" title="Edit slider">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-slider/'.$slider->id)); ?>" class="btn btn-danger btn-xs" title="Delete slider" onclick="return confirm('Are you sure to delete this'); ">
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