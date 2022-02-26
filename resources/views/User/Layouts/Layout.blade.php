<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
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
    @yield('headThisPage')
</head>

<body>
    @section('header')
        <!-- Start Header Area -->
        <header class="header_area sticky-header">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light main_box">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{ route('User.home') }}"><img src="/storage/assets/user/img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{ route('User.home') }}">Trang chủ</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('User.home') }}">Loại sản phẩm</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item"><a href="{{ route('User.GioHang.index') }}" class="cart" data-rel="tooltip" title="Giỏ hàng" data-placement="top"><span
                                            class="ti-bag"></span></a>
                                </li>
                                <li class="nav-item">
                                    <button class="search"><span class="lnr lnr-magnifier" id="search" data-rel="tooltip" title="Tìm kiếm" data-placement="top"></span></button>
                                </li>
                                <li class="nav-item {{ request()->is('User') ? 'active' : '' }}">

                                    <a href="{{ route('User.KhachHang.index') }}" class="user" data-rel="tooltip" title="Tài khoản" data-placement="top"><span
                                            class="fa fa-user-o"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        @yield('banner')
    @show

    @yield('body')

    @section('footer')
        <!-- start footer Area -->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Shop việt</h6>
                            <p>
                                Nói về bản thân của Shop...
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Bản tin</h6>
                            <p>Cập nhật thông tin mới nhất của chúng tôi</p>
                            <div class="" id="mc_embed_signup">

                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get"
                                    class="form-inline">

                                    <div class="d-flex flex-row">

                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required=""
                                            type="email">


                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>

                                        <!-- <div class="col-lg-4 col-md-4">
                                                                                                                                                                                                                     <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                                                                                                                                                                                                    </div>  -->
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Instragram Feed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="/storage/assets/user/img/i1.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i2.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i3.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i4.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i5.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i6.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i7.jpg" alt=""></li>
                                <li><img src="/storage/assets/user/img/i8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Theo dõi</h6>
                            <p>Thông qua các kênh</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->
    @show
    @section('script')
        <script src="/storage/assets/user/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
        </script>
        <script src="/storage/assets/user/js/vendor/bootstrap.min.js"></script>
        <script src="/storage/assets/user/js/jquery.ajaxchimp.min.js"></script>
        <script src="/storage/assets/user/js/jquery.nice-select.min.js"></script>
        <script src="/storage/assets/user/js/jquery.sticky.js"></script>
        <script src="/storage/assets/user/js/nouislider.min.js"></script>
        <script src="/storage/assets/user/js/jquery.magnific-popup.min.js"></script>
        <script src="/storage/assets/user/js/owl.carousel.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="/storage/assets/user/js/gmaps.min.js"></script>
        <script src="/storage/assets/user/js/main.js"></script>

        <script src="/storage/assets/js/vendor/toastr.min.js"></script>
        <script>
            $('[data-rel="tooltip"]').tooltip({});
        </script>
    @show

    @yield('scriptThisPage')
</body>

</html>
