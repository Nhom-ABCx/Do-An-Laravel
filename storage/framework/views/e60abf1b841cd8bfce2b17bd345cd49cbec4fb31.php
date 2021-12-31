<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/storage/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/storage/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
  <link rel="stylesheet" href="/storage/assets/css/font-awesome-ie7.min.css" />
  <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/storage/assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/storage/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
  <link rel="stylesheet" href="/storage/assets/css/ace-ie.min.css" />
  <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
  <script src="/storage/assets/js/html5shiv.js"></script>
  <script src="/storage/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i class="icon-leaf green"></i>
                                <span class="red">Ace</span>
                                <span class="white">Application</span>
                            </h1>
                            <h4 class="blue">&copy; Hi! <?php echo e($khachHang->Username); ?></h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">

                            <div id="forgot-box" class="forgot-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger">
                                            <i class="icon-key"></i>
                                            Retrieve Password
                                        </h4>

                                        <div class="space-6"></div>
                                        <p>
                                            Enter your email and to receive instructions
                                        </p>

                                        <form action="<?php echo e(route('KhachHang.actionReset', $khachHang)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Password" name="MatKhau" />
                                                        <i class="icon-key"></i>
                                                    </span>
                                                    <?php if($errors->has('MatKhau')): ?>
                                                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('MatKhau')); ?></i>
                                                    <?php endif; ?>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Confirm password" name="XacNhan_MatKhau" />
                                                        <i class="icon-lock"></i>
                                                    </span>
                                                    <?php if($errors->has('XacNhan_MatKhau')): ?>
                                                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('XacNhan_MatKhau')); ?></i>
                                                    <?php endif; ?>
                                                </label>

                                                <div class="clearfix">
                                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                                                        <i class="icon-lightbulb"></i>
                                                        Save!
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- /widget-main -->
                                </div><!-- /widget-body -->
                            </div><!-- /forgot-box -->

                        </div><!-- /position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
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
        if ("ontouchend" in document) document.write("<script src='/storage/assets/js/jquery.mobile.custom.min.js'>" + "<" +
            "/script>");
    </script>
</body>

</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Login/ResetPassword.blade.php ENDPATH**/ ?>