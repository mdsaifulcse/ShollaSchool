<?php $__env->startSection('title'); ?>
    Add New Teacher | sholla School & College
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <div class="panel">
                <?php if($message=Session::get('message')): ?>
                    <h3 class="text-success text-center"> <?php echo e($message); ?> </h3>
                <?php endif; ?>
                <div class="panel-heading">
                    <h3><i class="fa fa-edit" aria-hidden="true"></i> Update Teacher Educational Information </h3>
                </div>
                <div class="panel-body">
                    <form  id="editEducationIfno" action="<?php echo e(url('/update-teacher-education')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="educational-info">
                            <h3 class="text-success">Educational Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label text-success"> Teacher Name <sup>*</sup></label>
                                        <select name="teacher_id" class="form-control select"  required>
                                            <option>---Select Teacher---</option>
                                            <?php $__currentLoopData = $teachersPersonalInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teachersPersonalInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($teachersPersonalInfo->id); ?>"><?php echo e($teachersPersonalInfo->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="b_ed" value="B.ED" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="bed_subject" value="<?php echo e($teacherEducationInfoById->bed_subject); ?>" class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Boart / Institute</label>
                                                <input type="text" name="bed_board" value="<?php echo e($teacherEducationInfoById->bed_board); ?>" class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="bed_result" value="<?php echo e($teacherEducationInfoById->bed_result); ?>" class="form-control" placeholder="(5.00) / 1st Class" />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="bed_passing_year" autocomplete="off" value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->bed_passing_year)->format('d-m-Y')); ?>" class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-info">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="masters" value="Masters" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="masters_subject" value="<?php echo e($teacherEducationInfoById->masters_subject); ?>" class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board / Institute</label>
                                                <input type="text" name="masters_board" value="<?php echo e($teacherEducationInfoById->masters_board); ?>" class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="masters_result" value="<?php echo e($teacherEducationInfoById->masters_result); ?>" class="form-control" placeholder="(5.00) / 1st Class" />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="masters_passing_year" autocomplete="off" value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->masters_passing_year)->format('d-m-Y')); ?>" class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="graduation" value="Graduation" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="graduation_subject" value="<?php echo e($teacherEducationInfoById->graduation_subject); ?>"  class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board / Institute</label>
                                                <input type="text" name="graduation_board" value="<?php echo e($teacherEducationInfoById->graduation_board); ?>"  class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="graduation_result" value="<?php echo e($teacherEducationInfoById->graduation_result); ?>"  class="form-control" placeholder="(5.00) / 1st Class"  />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="graduation_passing_year" autocomplete="off" value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->graduation_passing_year)->format('d-m-Y')); ?>"  class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-info">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="hsc" value="HSC" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject <sup>*</sup></label>
                                                <input type="text" name="hsc_group" value="<?php echo e($teacherEducationInfoById->hsc_group); ?>" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board <sup>*</sup></label>
                                                <input type="text" name="hsc_board" value="<?php echo e($teacherEducationInfoById->hsc_board); ?>" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division <sup>*</sup></label>
                                                <input type="text" name="hsc_result" value="<?php echo e($teacherEducationInfoById->hsc_result); ?>"   class="form-control" placeholder="(5.00) / 1st Class" required />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year <sup>*</sup></label>
                                                <input type="text" name="hsc_passing_year" autocomplete="off" value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->hsc_passing_year)->format('d-m-Y')); ?>" required class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="ssc" value="SSC" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject <sup>*</sup></label>
                                                <input type="text" name="ssc_group" value="<?php echo e($teacherEducationInfoById->ssc_group); ?>" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board <sup>*</sup></label>
                                                <input type="text" name="ssc_board" value="<?php echo e($teacherEducationInfoById->ssc_board); ?>" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division <sup>*</sup></label>
                                                <input type="text" name="ssc_result" value="<?php echo e($teacherEducationInfoById->ssc_board); ?>"   class="form-control" placeholder="(5.00) / 1st Class" required />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year <sup>*</sup></label>
                                                <input type="text" name="ssc_passing_year" autocomplete="off" value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->ssc_passing_year)->format('d-m-Y')); ?>" required class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                        </div> <!--educational-info=========================================-->
                        <div class="teachint-info">
                            <h3 class="text-success">Teaching Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Designation <sup>*</sup></label>
                                        <select name="designation" class="form-control" required>
                                            <option></option>
                                            <option value="Principal">Principal</option>
                                            <option value="Assistant-professor">Assistant-professor</option>
                                            <option value="Lecturer">Lecturer</option>
                                            <option value="Headmaster">Headmaster</option>
                                            <option value="Assistant-Headmaster">Assistant-Headmaster</option>
                                            <option value="Assistant-Teacher">Assistant-Teacher</option>
                                            <option value="Assistant-laibrarian">Assistant-laibrarian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Special in</label>
                                        <input type="text" name="special_in" value="<?php echo e($teacherEducationInfoById->special_in); ?>" class="form-control" placeholder="can be math, english,accounting"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Teacher Type <sup>*</sup></label>
                                        <input type="text" name="teacher_type" value="<?php echo e($teacherEducationInfoById->teacher_type); ?>" class="form-control" placeholder="parmanent / internship / Other" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Joining Date </label>
                                        <input type="text" name="join_date" autocomplete="off"  value="<?php echo e(\Carbon\Carbon::parse($teacherEducationInfoById->join_date)->format('d-m-Y')); ?>" class="form-control datepicker" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="hidden" name="education_id" value="<?php echo e($teacherEducationInfoById->id); ?>" />
                                    <input type="submit" name="teacher_education"  value="Update Teacher Educational Information" class="btn btn-warning btn-lg btn-block" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo e(url('/manage-education')); ?>" class="btn btn-success btn-md">&laquo; Back</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editEducationIfno'].elements['teacher_id'].value='<?php echo e($teacherEducationInfoById->teacher_id); ?>';
        document.forms['editEducationIfno'].elements['designation'].value='<?php echo e($teacherEducationInfoById->designation); ?>';
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>