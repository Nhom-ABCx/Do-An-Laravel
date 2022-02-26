<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=<section class="                             vh-100"
        style="background-color: #508bfc;">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/storage/assets/user/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="/storage/assets/user/css/linearicons.css">
    <link rel="stylesheet" href="/storage/assets/user/css/owl.carousel.css">
    <link rel="stylesheet" href="/storage/assets/user/css/font-awesome.min.css">
    <link rel="stylesheet" href="/storage/assets/user/css/themify-icons.css">
    <link rel="stylesheet" href="/storage/assets/user/css/nice-select.css">
    <link rel="stylesheet" href="/storage/assets/user/css/nouislider.min.css">
    <link rel="stylesheet" href="/storage/assets/user/css/bootstrap.css">
    <link rel="stylesheet" href="/storage/assets/user/css/main.css">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

    </style>
</head>

<body>

    <section class="vh-100 p-5 ">
        <div class=" container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Đăng nhập</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fa fa-facebook-square"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fa fa-google"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Tài khoản</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Mật khẩu</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Lưu tài khoản
                                </label>
                            </div>
                            <a href="#!" class="text-secondary">Quên mật khẩu?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                            <hr>
                            <p>Chưa có tài khoản <a href="#!" class="text-danger">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
