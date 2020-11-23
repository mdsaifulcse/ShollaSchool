

<?php $__env->startSection('title'); ?>
    Manage Lecture | sholla School & College
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Manage Lectures Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="bg-warning">
                            <th>Sl No</th>
                            <th>Department</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Teacher</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($lecture->departemen); ?></td>
                                <td class="bg-success"><?php echo e($lecture->subject); ?></td>
                                <td><?php echo e($lecture->classOfSchool->class_name); ?></td>
                                <td class="bg-success"><?php echo e($lecture->sectionOfClass->section_name); ?></td>
                                <td><?php echo e($lecture->teacher->name); ?></td>
                                <td class="bg-success"><?php echo e($lecture->published_status ==1?'Published':'Unpublised'); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($lecture->updated_at)->diffForHumans()); ?></td>
                                <td>
                                    <?php
                                    $lectureName=$lecture->lecture_file;
                                    $lectureFileExtention=explode('.', $lectureName);
                                    ?>

                                    <?php if($lectureFileExtention[1]=='pdf'): ?>
                                        <a href="http://docs.google.com/gview?url=http://shollaschoolcollege.edu.bd/<?php echo e($lecture->lecture_file); ?> &embedded=true" target="blank" class="btn btn-info btn-xs" title="Details about Lecture">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(asset($lecture->lecture_file)); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    <?php endif; ?>

                                    <?php if($lecture->published_status == 1): ?>
                                        <a href="<?php echo e(url('/unpublished-lecture/'.$lecture->id)); ?>" class="btn btn-success btn-xs" title="Published Lecture">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/published-lecture/'.$lecture->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished Lecture">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php echo e(url('/edit-lecture/'.$lecture->id)); ?>" class="btn btn-warning btn-xs" title="Edit Lecture">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="<?php echo e(url('/delete-lecture/'.$lecture->id)); ?>" class="btn btn-danger btn-xs" title="Delete Lecture" onclick="return confirm('Are you sure to delete this'); ">
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