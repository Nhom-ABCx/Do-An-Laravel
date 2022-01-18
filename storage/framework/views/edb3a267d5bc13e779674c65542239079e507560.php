<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ace Admin</title>

    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->
    <link href="/storage/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/storage/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="/storage/assets/css/font-awesome-ie7.min.css" />
      <![endif]-->

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/ui.jqgrid.css" />
    <?php echo $__env->yieldContent('headThisPage'); ?>

    <!-- fonts -->

    <link rel="stylesheet" href="/storage/assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/storage/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="/storage/assets/css/ace-ie.min.css" />
      <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/storage/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
      <script src="/storage/assets/js/html5shiv.js"></script>
      <script src="/storage/assets/js/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    
    <div class="main-container" id="main-container">
        <?php echo $__env->yieldContent('body'); ?>
    </div><!-- /.main-container -->
    

    
    <!-- basic scripts -->

    <!--[if !IE]> -->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='/storage/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
                        <script type="text/javascript">
                            window.jQuery || document.write("<script src='/storage/assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
                        </script>
                        <![endif]-->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='/storage/assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
    </script>

    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='/storage/assets/js/jquery.mobile.custom.min.js'>" + "<" +
            "/script>");
    </script>
    <script src="/storage/assets/js/bootstrap.min.js"></script>
    <script src="/storage/assets/js/typeahead-bs2.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="/storage/assets/js/jquery.dataTables.min.js"></script>
    <script src="/storage/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="/storage/assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="/storage/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
    <script src="/storage/assets/js/jqGrid/i18n/grid.locale-en.js"></script>
    <!-- ace scripts -->

    <script src="/storage/assets/js/ace-elements.min.js"></script>
    <script src="/storage/assets/js/ace.min.js"></script>
    <script src="/storage/assets/js/jquery.dataTables.min.js"></script>

    <?php echo $__env->yieldContent('scriptThisPage'); ?>
</body>

</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/HoaDon/pdf.blade.php ENDPATH**/ ?>