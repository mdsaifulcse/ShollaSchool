<?php $__env->startSection('title'); ?>
    Contact us info | Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <br/>
        <div class="well">
            <div class="row">
                <div class="contact-area">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h4><i class="fa fa-home" aria-hidden="true"></i> Mailing Address</h4><hr/>
                            <p class="text-warning">Contact us with following address:</p>
                            <p>
                                <?php echo $contactInfo->content_address;?>
                            </p>
                            <p>
                                <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo e($contactInfo->first_mobile); ?></span><br/>
                                <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo e($contactInfo->second_mobile); ?></span>
                            </p>
                            <p>
                                Email: <?php echo e($contactInfo->contact_email); ?> <br/>
                                Web: <a href="http://shollaschoolcollege.edu.bd">shollaschoolcollege.edu.bd</a>
                            </p>
                        </div>
                    </div><!-- end col-md-4 -->

                    <div class="col-md-8">
                        <div class="contact-form">
                            <h4>Write to us <i class="fa fa-pencil" aria-hidden="true"></i> |
                            <?php if($message=Session::get('message')): ?>
                                <?php echo e($message); ?>

                                <?php endif; ?>
                            </h4><hr/>
                            <p>You may use the following form to contact us.</p>
                            <?php echo Form::open(['url'=>'/new-message', 'method'=>'POST']); ?>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::text('name', $value=Null, ['class'=>'form-control','placeholder'=>'Your name','required'=>'required'])); ?>

                                            <span class="text-danger">
                                                <?php echo e($errors->has('name')?$errors->first('name'):''); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::email('email',$value=Null, ['placeholder'=>'Your eMail','class'=>'form-control','required'=>'required'])); ?>

                                            <span class="text-danger">
                                                <?php echo e($errors->has('email')?$errors->first('email'):''); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::number('mobile', $value=Null, ['placeholder'=>'mobile number','class'=>'form-control','required'=>'required'])); ?>

                                            <span class="text-danger">
                                                <?php echo e($errors->has('mobile')?$errors->first('mobile'):''); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::text('location',$value=Null, ['placeholder'=>'Your location','class'=>'form-control','required'=>'required'])); ?>

                                            <span class="text-danger">
                                                <?php echo e($errors->has('location')?$errors->first('location'):''); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php echo e(Form::textarea('message',$value=Null, ['placeholder'=>'Write your Opinion','class'=>'form-control','required'=>'required','rows'=>'4'])); ?>

                                            <span class="text-danger">
                                                <?php echo e($errors->has('message')?$errors->first('message'):''); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php echo e(Form::submit('Message-Send', ['class'=>'btn btn-success'])); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div><!-- end contact-area -->
            </div><!-- end row -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.5388092841279!2d90.18440728050572!3d23.708922075611337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375592536391ab25%3A0x67d4c8cf888532e6!2sSholla+High+School+and+College!5e0!3m2!1sen!2sbd!4v1507532945536" frameborder="0" style="border:0;width: 100%;height: 340px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br/>

    </div><!-- end container -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>