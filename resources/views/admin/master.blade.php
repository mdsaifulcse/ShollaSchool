<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/admin/')}}/img/logo.jpg" class="img-circle">

    <title>@yield('title')</title>

    <!--for Select box search (select2)-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/admin/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin/')}}/date-picker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="{{asset('/admin/')}}/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('/admin/')}}/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/admin/')}}/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{asset('/admin/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/')}}/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    @include('admin.includes.header')
    <!-- /.navbar-top-links -->

    @include('.admin.includes.sidebar')
    <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="{{asset('/admin/')}}/date-picker/js/bootstrap-datepicker.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('/admin/')}}/vendor/raphael/raphael.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="{{asset('/admin/')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/admin/')}}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="{{asset('/admin/')}}/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/admin/')}}/dist/js/admin.js"></script>
<script src="{{asset('/admin/')}}/ckeditor/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

@yield('script')

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    // datepicker ------------------------
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
    });

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

<script>
    $('.select').select2({
        placeholder:'Try to type name',
        allowClear:true

    });
</script>


</body>

</html>
