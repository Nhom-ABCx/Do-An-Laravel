<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous" />

    <!--[if IE 7]>
  <link rel="stylesheet" href="/storage/assets/css/font-awesome-ie7.min.css" />
  <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/storage/assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link href="https://unpkg.com/ace-css/css/ace.min.css" rel="stylesheet">
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
                                <span class="red">Hi! <?php echo e($Data->Username); ?></span>
                            </h1>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">

                            <div id="forgot-box" class="forgot-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">

                                        <h4>You want to change the password, if not you, please ignore the email</h4>

                                        <div class="space-6"></div>

                                        <form role="form" method="post" action="#">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <h2 class="page-header"><i class="fa fa-lock"></i> Enter your new password</h2>
                                                    <div class="pull-right">
                                                        <button type="button" name="Submit" value="Save" class="btn btn-danger"><i class="livicon" data-n="pen" data-s="16" data-c="#fff"
                                                                data-hc="0"></i> Save</button>
                                                        <button type="reset" name="Reset" value="Clear" class="btn btn-primary"><i class="livicon" data-n="trash" data-s="16" data-c="#fff"
                                                                data-hc="0"></i> Clear</button>
                                                    </div>
                                                </div>
                                                <!-- /.box-header -->

                                                <div class="space-6"></div>

                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                                            <label>New Password</label>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </div>
                                                                <input class="form-control" id="newPassword" name="MatKhau" value="" placeholder="Enter the New Password" type="password">
                                                            </div>
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                    <br />
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                                            <label>Confirm Password</label>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </div>
                                                                <input class="form-control" id="confirmPassword" name="XacNhan_MatKhau" value="" placeholder="Re-enter the New Password"
                                                                    type="password">
                                                            </div>
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                </div>
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
</body>

</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Login/User-reset.blade.php ENDPATH**/ ?>