<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" href="/storage/assets/css/toastr.min.css" />
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
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="icon-coffee green"></i>
                                            Please Enter Your Information
                                        </h4>

                                        <div class="space-6"></div>

                                        <form action="{{ route('Login.show') }}" method="post" id="submitForm">
                                            @csrf
                                            <fieldset>
                                                <span class="error-text Username-error"></span>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="form-control" placeholder="Username" name="Username" value="Admin" />
                                                        <i class="icon-user"></i>
                                                    </span>
                                                </label>

                                                <span class="error-text MatKhau-error"></span>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Password" name="MatKhau" value="Admin" />
                                                        <i class="icon-lock"></i>
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="center">
                                                    <button type="submit" class="width-35 btn btn-sm btn-primary">
                                                        <i class="icon-key"></i>
                                                        Login
                                                    </button>
                                                </div>
                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <span class="bigger-110">Or Login Using</span>
                                        </div>

                                        <div class="social-login center">
                                            <a class="btn btn-primary">
                                                <i class="icon-facebook"></i>
                                            </a>

                                            <a class="btn btn-info">
                                                <i class="icon-twitter"></i>
                                            </a>

                                            <a class="btn btn-danger" href="{{ route('Login.social', 'Google') }}">
                                                <i class="icon-google-plus"></i>
                                            </a>
                                            <a class="btn btn-dark" href="{{ route('Login.social', 'Github') }}">
                                                <i class="icon-github-sign"></i>
                                            </a>
                                        </div>
                                    </div><!-- /widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" class="forgot-password-link">
                                                <i class="icon-arrow-left"></i>
                                                I forgot my password
                                            </a>
                                        </div>

                                        <div>
                                            <a href="{{ route('Login.create') }}" class="user-signup-link">
                                                I want to register
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /widget-body -->
                            </div><!-- /login-box -->

                            <div id="forgot-box" class="forgot-box widget-box no-border">
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

                                        <form>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email" />
                                                        <i class="icon-envelope"></i>
                                                    </span>
                                                </label>

                                                <div class="clearfix">
                                                    <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                        <i class="icon-lightbulb"></i>
                                                        Send Me!
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- /widget-main -->

                                    <div class="toolbar center">
                                        <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                            Back to login
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div><!-- /widget-body -->
                            </div><!-- /forgot-box -->
                        </div><!-- /position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.main-container -->

    <!-- basic scripts -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='/storage/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='/storage/assets/js/jquery.mobile.custom.min.js'>" + "<" +
            "/script>");
    </script>

    <script src="/storage/assets/js/vendor/toastr.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        //ajax
        $('#submitForm').on('submit', function(e) {
            //ngan chan form gui di
            e.preventDefault();
            let form = this;
            $.ajax({
                //gui di voi phuong thuc' cua Form
                method: $(form).attr('method'),
                //url = duong dan cua form
                url: $(form).attr('action'),
                //du lieu gui di
                data: new FormData(form),
                //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                processData: false,
                // Kiểu nội dung của dữ liệu được gửi lên server. mac dinh la json, minh gui len la FormData nen de false
                contentType: false,
                //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                //dataType: 'json',
                //truoc khi gui di thi thuc hien gi do', o day chinh loi~ = rong~
                beforeSend: function() {
                    $(form).find('span.error-text').empty();
                },
                success: function(response) {
                    console.log("request ok");
                    window.location.href = response;
                },
                error: function(response) {
                    console.log("request lỗi");
                    //console.log(response.responseJSON.Username[0]);
                    $.each(response.responseJSON, function(key, val) {
                        $(form).find('span.' + key + '-error').html('<i class="icon-remove bigger-110 red">' + val[0] + '</i>');
                        toastr.error(val[0], 'Có lỗi xảy ra', {
                            timeOut: 3000
                        });
                    });
                },
            });
        });
    </script>
</body>

</html>
