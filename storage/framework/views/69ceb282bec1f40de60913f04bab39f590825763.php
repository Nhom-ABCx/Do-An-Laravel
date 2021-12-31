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
                            <h4 class="blue">&copy; Company Name</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">

                            <div id="signup-box" class="signup-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="icon-group blue"></i>
                                            New User Registration
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Enter your details to begin: </p>

                                        <form action="<?php echo e(route('Login.store')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            
                                            <fieldset>
                                                <?php if($errors->has('Username')): ?>
                                                    <i class="icon-remove bigger-110 red"><?php echo e($errors->first('Username')); ?></i>
                                                <?php endif; ?>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="form-control" placeholder="Username" value="<?php echo e(old('Username')); ?>" name="Username" />
                                                        <i class="icon-user"></i>
                                                    </span>
                                                </label>

                                                <?php if($errors->has('Email')): ?>
                                                    <i class="icon-remove bigger-110 red"><?php echo e($errors->first('Email')); ?></i>
                                                <?php endif; ?>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email" value="<?php echo e(old('Email')); ?>" name="Email" />
                                                        <i class="icon-envelope"></i>
                                                    </span>
                                                </label>

                                                <?php if($errors->has('Phone')): ?>
                                                    <i class="icon-remove bigger-110 red"><?php echo e($errors->first('Phone')); ?></i>
                                                <?php endif; ?>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="tel" pattern="[0-9]{10}" class="form-control" placeholder="Phone 10 number" value="<?php echo e(old('Phone')); ?>" name="Phone" />
                                                        <i class="icon-phone"></i>
                                                    </span>
                                                </label>

                                                <?php if($errors->has('MatKhau')): ?>
                                                    <i class="icon-remove bigger-110 red"><?php echo e($errors->first('MatKhau')); ?></i>
                                                <?php endif; ?>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Password" name="MatKhau" />
                                                        <i class="icon-lock"></i>
                                                    </span>
                                                </label>

                                                <?php if($errors->has('XacNhan_MatKhau')): ?>
                                                    <i class="icon-remove bigger-110 red"><?php echo e($errors->first('XacNhan_MatKhau')); ?></i>
                                                <?php endif; ?>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Repeat password" name="XacNhan_MatKhau" />
                                                        <i class="icon-retweet"></i>
                                                    </span>
                                                </label>

                                                <label class="block">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl">
                                                        I accept the
                                                        <a href="#">User Agreement</a>
                                                    </span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="icon-refresh"></i>
                                                        Reset
                                                    </button>

                                                    <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                        Register
                                                        <i class="icon-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar center">
                                        <a href="<?php echo e(route('Login.index')); ?>" class="back-to-login-link">
                                            <i class="icon-arrow-left"></i>
                                            Back to login
                                        </a>
                                    </div>
                                </div><!-- /widget-body -->
                            </div><!-- /signup-box -->
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
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Login/Login-create.blade.php ENDPATH**/ ?>