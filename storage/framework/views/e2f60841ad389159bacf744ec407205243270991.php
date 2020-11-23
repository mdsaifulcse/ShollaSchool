<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('/admin/')); ?>/img/logo.jpg" class="img-circle">

    <title>Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin/')); ?>/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image:url(<?php echo e(asset('/admin/')); ?>/img/background0.PNG) ">
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Admin Login</div>

                        <div class="panel-body">
                                <?php echo Form::open(['url' => 'login', 'method'=>'POST','class'=>'form-horizontal']); ?>

                                <?php echo e(csrf_field()); ?>


                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">

                                        <?php echo e(Form::email('email', $value=NULL, ['class'=>'form-control', 'required' ])); ?>


                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">

                                        <?php echo e(Form::password('password',  ['class'=>'form-control', 'required' ])); ?>


                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- jQuery -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>






</body>

</html>


