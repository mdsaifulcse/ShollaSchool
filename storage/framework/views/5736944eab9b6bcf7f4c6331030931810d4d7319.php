

<?php $__env->startSection('title'); ?>
    Manage Schol | sholla School & College
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
                    <h3> School Information </h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $schoolInfoRules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolInfoRule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="odd gradeX">
                            <td><?php echo e($i++); ?></td>
                            <td class="bg-info"><?php echo e($schoolInfoRule->title); ?></td>
                            <td><img src="<?php echo e(asset($schoolInfoRule->image)); ?>" width="200"></td>
                            <td> <?php echo e($schoolInfoRule->contents); ?> </td>
                            <td>

                                <a href="<?php echo e(url('/edit-school-info/'.$schoolInfoRule->id)); ?>" class="btn btn-warning btn-xs" title="Edit slider">
                                    <span class="glyphicon glyphicon-edit"></span>
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