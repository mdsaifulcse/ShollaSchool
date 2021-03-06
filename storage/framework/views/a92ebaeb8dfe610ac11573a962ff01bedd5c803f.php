<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="<?php echo e(asset('/admin/')); ?>/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo e(asset('/admin/')); ?>/vendor//morrisjs/morris.css" rel="stylesheet">

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
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo e(url('/login')); ?>" class="btn btn-warning">&laquo; Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo e(asset('/admin/')); ?>/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo e(asset('/admin/')); ?>/data/morris-data.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('/admin/')); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo e(asset('/admin/')); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo e(asset('/admin/')); ?>/dist/js/admin.js"></script>
<script src="<?php echo e(asset('/admin/')); ?>/ckeditor/ckeditor.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace( 'short-content', 'long-content' );
    CKEDITOR.replace( 'long-content' );
</script>

</body>

</html>


