

<?php $__env->startSection('title'); ?>
    Add new Lecture | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($message=Session::get('message')): ?>
                <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
            <?php endif; ?>
            <h3 class="page-header">SHOLLA HIGHER SECONDARY SCHOOL & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-10 col-md-offset-1 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Lecture</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(url('/new-lecture')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-4">Departemen Name</label>
                            <div class="col-md-8">
                                <input type="text" name="departemen" value="All Departemen" class="form-control" placeholder="Class nine, ten,& College only">
                                <span>
                                    <?php echo e($errors->has('departemen')?$errors->first('departemen'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Subject Name <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="text" name="subject" class="form-control" required placeholder="Lecture related subject">
                                <span>
                                    <?php echo e($errors->has('subject')?$errors->first('subject'):''); ?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Select Class <sup>*</sup></label>
                            <div class="col-md-8">
                                <?php echo e(Form::select('class_id',$classes,[],["onchange"=>"loadSection(this.value)",'class'=>'form-control','placeholder'=>'-- Select Class--','required'=>true])); ?>

                                <span>
                                    <?php echo e($errors->has('class_id')?$errors->first('class_id'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Section <sup>*</sup></label>
                            <div class="col-md-8" id="sectionOfClass">
                                <?php echo e(Form::select('section_id',[],[],['class'=>'form-control','placeholder'=>'--First Select Class--','required'=>true])); ?>

                                <span>
                                    <?php echo e($errors->has('section_id')?$errors->first('section_id'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Teacher Name <sup>*</sup></label>
                            <div class="col-md-8">
                                <?php echo e(Form::select('teacher_id',$teachers,[],['class'=>'form-control select','placeholder'=>'--Select Teacher--','required'=>true])); ?>

                                <span>
                                    <?php echo e($errors->has('teacher_id')?$errors->first('teacher_id'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Lecture File / Image <sup>*</sup></label>
                            <div class="col-md-8">
                                <input type="file" name="lecture_file" class="form-control" required>
                                <span class="text-danger">
                                    <?php echo e($errors->has('lecture_file')?$errors->first('lecture_file'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Published Status</label>
                            <div class="col-md-8">
                                <select name="published_status" class="form-control" required>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-md-8 col-sm-offset-4">
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Save Lactuer"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function loadSection(id) {
            var classId=id;
            $('#sectionOfClass').load('<?php echo e(URL::to("load-section-of-class")); ?>/'+classId);
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>