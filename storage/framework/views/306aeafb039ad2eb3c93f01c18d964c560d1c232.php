<?php $__env->startSection('title'); ?>
Lectures Download | sholla School & College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="overview">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="<?php echo e(asset('/front/')); ?>/img/logo.jpg" class="img-responsive center-block img-circle overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">

                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Lecture List </em></h3>
                        </div>
                        <div class="panel panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered  table-hover">
                                    <thead>
                                    <tr class="bg-warning">
                                        <th>Sl No</th>
                                        <th>Depertment </th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Teacher  </th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Download Link</th>
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
                                            <td><?php echo e(\Carbon\Carbon::parse($lecture->updated_at)->diffForHumans()); ?></td>
                                            <td>
                                                <?php
                                                $lectureName=$lecture->lecture_file;
                                                $lectureFileExtention=explode('.', $lectureName);
                                                ?>

                                                <?php if($lectureFileExtention[1]=='pdf'): ?>
                                                        <a href="http://docs.google.com/gview?url=<?php echo e(asset($lecture->lecture_file)); ?>&embedded=true" target="blank" title="Details about Lecture" target="blank">
                                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                                        </a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(asset($lecture->lecture_file)); ?>" target="blank"> <i class="fa fa-eye" aria-hidden="true"></i>  View</a>
                                                <?php endif; ?>

                                            </td>
                                            <td><a href="<?php echo e(asset($lecture->lecture_file)); ?>" download>  <i class="fa fa-download" aria-hidden="true"></i> Download </a> </td>

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
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>