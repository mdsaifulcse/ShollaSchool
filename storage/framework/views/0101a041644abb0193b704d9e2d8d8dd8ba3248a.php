<?php $__env->startSection('title'); ?>
    Manage Result | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Managementt</h3>
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Manage Your Result Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Routie As</th>
                            <th>Status</th>
                            <th>Update Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($result->title); ?></td>
                                <td class="bg-success"><?php echo e($result->result_as); ?></td>
                                <td class="center"><?php echo e($result->published_status ==1?'Published':'Unpublised'); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($result->updated_at)->diffForHumans()); ?></td>
                                <td>
                                    <?php
                                    $resultName=$result->result_file;
                                    $resultFileExtention=explode('.', $resultName);
                                    ?>

                                    <?php if($resultFileExtention[1]=='pdf'): ?>
                                            <a href="http://docs.google.com/gview?url=<?php echo e(asset($result->result_file)); ?>&embedded=true" target="blank" class="btn btn-info btn-xs" title="Details about result">
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                            </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(asset($result->result_file)); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    <?php endif; ?>




                                    <?php if($result->published_status == 1): ?>
                                        <a href="<?php echo e(url('/unpublished-result/'.$result->id)); ?>" class="btn btn-success btn-xs" title="Published result">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/published-result/'.$result->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished result">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php echo e(url('/edit-result/'.$result->id)); ?>" class="btn btn-warning btn-xs" title="Edit result">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-result/'.$result->id)); ?>" class="btn btn-danger btn-xs" title="Delete result" onclick="return confirm('Are you sure to delete this'); ">
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