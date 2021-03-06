{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('User.layouts.Layout')

@section('title', 'Shop')

@section('headThisPage')
    <link rel="stylesheet" href="/storage/assets/user/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="/storage/assets/user/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="/storage/assets/user/css/magnific-popup.css">
@endsection

@section('banner')
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Sản phẩm mới <br>mua ngay!</h1>
                                    <p>Sản phẩm này rất nổi bật trong thị trường hiện nay.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="/storage/assets/user/img/banner/banner-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Nike New <br>Collection!</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="/storage/assets/user/img/banner/banner-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('body')
    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="/storage/assets/user/img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Miễn phí vận chuyển</h6>
                        <p>Miễn phí trên tất cả đơn hàng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="/storage/assets/user/img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Hoàn trả dễ dàng</h6>
                        <p>Tự do hoàn trả khi không vừa ý dễ dàng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="/storage/assets/user/img/features/f-icon3.png" alt="">
                        </div>
                        <h6>Hỗ trợ 24/7</h6>
                        <p>Luôn luôn hỗ trợ tận răng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="/storage/assets/user/img/features/f-icon4.png" alt="">
                        </div>
                        <h6>Thanh toán an toàn</h6>
                        <p>Dễ dàng thanh toán đơn hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/storage/assets/user/img/category/c1.jpg" alt="">
                                <a href="/storage/assets/user/img/category/c1.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/storage/assets/user/img/category/c2.jpg" alt="">
                                <a href="/storage/assets/user/img/category/c2.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/storage/assets/user/img/category/c3.jpg" alt="">
                                <a href="/storage/assets/user/img/category/c3.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Product for Couple</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/storage/assets/user/img/category/c4.jpg" alt="">
                                <a href="/storage/assets/user/img/category/c4.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="/storage/assets/user/img/category/c5.jpg" alt="">
                        <a href="/storage/assets/user/img/category/c5.jpg" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Sản phẩm bán chạy</h1>
                            <p>Top 8 sản phẩm bán chạy nhất từ trước đến nay.</p>
                        </div>
                    </div>
                </div>
                <div class="row spBanChay"></div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Sản phẩm mới</h1>
                            <p>Top 8 sản phẩm mới nhất được thêm vào.</p>
                        </div>
                    </div>
                </div>
                <div class="row spMoi"></div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Ưu đãi độc quyền sẽ sớm kết thúc!</h1>
                            <p>Nhanh tay mua sắm ngay!</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="primary-btn">Shop Now</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="/storage/assets/user/img/product/e-p1.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>$150.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <h4>addidas New Hammer sole
                                    for Sports person</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="/storage/assets/user/img/product/e-p1.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>$150.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <h4>addidas New Hammer sole
                                    for Sports person</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/brand/1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/brand/2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/brand/3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/brand/4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/brand/5.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->

    <!-- Start related-product Area -->
    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Ưu đãi hiện có</h1>
                        <p>Giảm giá đến 90% các mặt hàng.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($dsKhuyenMai as $item)
                            @php
                                App\Http\Controllers\Admin\SanPhamController::fixImage($item->SanPham);
                            @endphp
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="{{ $item->SanPham->HinhAnh }}" alt="" width="100" height="100"></a>
                                    <div class="desc">
                                        <a href="#" class="title">{{ $item->SanPham->TenSanPham }}</a>
                                        <div class="price">
                                            <h6>{{ number_format($item->SanPham->GiaBan) }} VNĐ</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="/storage/assets/user/img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->
@endsection

@section('scriptThisPage')
    <script src="/storage/assets/user/js/countdown.js"></script>
    <script>
        $(document).ready(function() {
            function buildSanPham(value) {
                return `<!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img src="/storage/assets/images/product-image/` + value.HinhAnh + `" alt="" width="100" height="200">
                                <div class="product-details">
                                    <h6>` + value.TenSanPham + `</h6>
                                    <div class="price">
                                        <h6>` + parseInt(value.GiaBan).toLocaleString() + ` VNĐ</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">Thêm</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-heart"></span>
                                            <p class="hover-text">Yêu thích</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-sync"></span>
                                            <p class="hover-text">So sánh</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">Xem chi tiết</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            }
            $.ajax({
                //gui di voi phuong thuc' cua Form
                method: "GET",
                //url = duong dan cua form
                url: "{{ route('API.SanPham-top') }}",
                //du lieu gui di
                data: {},
                //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                processData: false,
                // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la rong~
                contentType: false,
                //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                //dataType: 'json',
                //truoc khi gui di thi thuc hien gi do'
                beforeSend: function() {

                },
                success: function(response) {
                    console.log("request ok");
                    $.each(response, function(key, value) {
                        var spBanChay = buildSanPham(value);
                        $(".spBanChay").append(spBanChay);
                    });
                },
                error: function(response) {
                    console.log("request lỗi");
                    //console.log(response.responseJSON.Username[0]);
                    $.each(response.responseJSON, function(key, val) {
                        toastr.error(val, 'Có lỗi xảy ra', {
                            timeOut: 3000
                        });
                    });
                },
            });
            $.ajax({
                //gui di voi phuong thuc' cua Form
                method: "GET",
                //url = duong dan cua form
                url: "{{ route('API.SanPham-moi') }}",
                //du lieu gui di
                data: {},
                //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                processData: false,
                // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la rong~
                contentType: false,
                //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                //dataType: 'json',
                //truoc khi gui di thi thuc hien gi do'
                beforeSend: function() {

                },
                success: function(response) {
                    console.log("request ok");
                    $.each(response, function(key, value) {
                        var spBanChay = buildSanPham(value);
                        $(".spMoi").append(spBanChay);
                    });
                },
                error: function(response) {
                    console.log("request lỗi");
                    //console.log(response.responseJSON.Username[0]);
                    $.each(response.responseJSON, function(key, val) {
                        toastr.error(val, 'Có lỗi xảy ra', {
                            timeOut: 3000
                        });
                    });
                },
            });
        });
    </script>
@endsection
