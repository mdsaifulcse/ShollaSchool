

<?php $__env->startSection('title'); ?>
    Add new slider | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if($message=Session::get('message')): ?>
                <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
            <?php endif; ?>
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-8 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-edit"></span> Update Notice</h3>
                </div>
                <div class="panel-body">
                    <form id="editNoticeForm" class="form-horizontal" action="<?php echo e(url('/update-notice')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="control-label col-md-3">Subject <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="subject" value="<?php echo e($noticeById->subject); ?>" class="form-control" required placeholder="enter notice subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Select PDF File</label>
                            <div class="col-lg-9">
                                <input type="file" name="notice_file" class="form-control">
                                <span class="text-danger">
                                    <?php echo e($errors->has('notice_file')?$errors->first('notice_file'):''); ?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Published Status</label>
                            <div class="col-sm-9">
                                <select name="published_status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-sm-9 col-sm-offset-3">
                                <input type="hidden" name="notice_id" value="<?php echo e($noticeById->id); ?>" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update Notice File"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editNoticeForm'].elements['published_status'].value = '<?php echo e($noticeById->published_status); ?>';
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>