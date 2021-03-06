<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - Ace Admin</title>

    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    {{-- cai nay la thong báo https://github.com/CodeSeven/toastr --}}
    <link rel="stylesheet" href="/storage/assets/css/toastr.min.css" />
    {{-- inline editTable  https://github.com/vitalets/x-editable --}}
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-editable.css" />
    {{-- icon link ngoài của vinh --}}
    {{-- nên lấy icon có sẵn từ đây https://fontawesome.com/v3.2/icons/ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('headThisPage')

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
    @section('header')
        {{-- phan nay la Header --}}
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="{{ route('Home.index') }}" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            Ace Admin
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        {{-- <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="progress-bar "></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See tasks with details
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-warning-sign"></i>
                                    8 Notifications
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink icon-comment"></i>
                                                New Comments
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary icon-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all notifications
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-envelope-alt"></i>
                                    5 Messages
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="/storage/assets/avatars/avatar.png" class="msg-photo"
                                            alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="/storage/assets/avatars/avatar3.png" class="msg-photo"
                                            alt="Susan's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Susan:</span>
                                                Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>20 minutes ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="/storage/assets/avatars/avatar4.png" class="msg-photo"
                                            alt="Bob's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Bob:</span>
                                                Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>3:15 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="inbox.html">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- Tin Nhan chat --}}
                        <li class="blue">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-comment icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-comment-alt"></i>
                                    1 Tin nhắn
                                </li>

                                <li>
                                    <a href="{{ route('Message.index') }}?TaiKhoanId=99">
                                        <img src="#" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">
                                                    Username:
                                                </span>
                                                {{-- nếu tin nhắn cuối cùng là bản thân thì để chữ "Bạn: cho nó giống facebook" --}}
                                                Bạn: abc
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>khoảng mấy phút trước</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('Message.index') }}">
                                        Xem tất cả tin nhắn
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="@auth{{ Auth::user()->HinhAnh }}@endauth" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    @auth
                                        {{ Auth::user()->Username }}
                                    @endauth

                                    @guest
                                        Chưa đăng nhập
                                    @endguest
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="{{ route('Login.logout') }}">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>
    @show

    {{-- BODY START --}}
    <div class="main-container" id="main-container">
        {{-- MENU Start --}}
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>

        <div class="main-container-inner">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

            <div class="sidebar" id="sidebar">
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {}
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="icon-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="icon-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="icon-group"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="icon-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- #sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="{{ request()->is('Admin') ? 'active' : '' }}">
                        <a href="{{ route('Home.index') }}">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Trang chủ </span>
                        </a>
                    </li>

                    <li class="{{ request()->is('Admin/HoaDon') ? 'active' : '' }}">
                        <a href="{{ route('HoaDon.index') }}">
                            <i class="icon-text-width"></i>
                            <span class="menu-text"> Hóa đơn bán </span>
                        </a>
                    </li>

                    <li class="{{ request()->is('Admin/SanPham') || request()->is('Admin/LoaiSanPham') ? 'active open' : '' }}">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span class="menu-text"> Quản lý sản phẩm </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li class="{{ request()->is('Admin/SanPham') ? 'active' : '' }}">
                                <a href="{{ route('SanPham.index') }}">
                                    <i class="icon-double-angle-right"></i>
                                    Sản phẩm
                                </a>
                            </li>

                            <li class="{{ request()->is('Admin/LoaiSanPham') ? 'active' : '' }}">
                                <a href="{{ route('LoaiSanPham.index') }}">
                                    <i class="icon-double-angle-right"></i>
                                    Loại sản phẩm
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ request()->is('Admin/HoaDonNhap') ? 'active' : '' }}">
                        <a href="{{ route('HoaDonNhap.index') }}">
                            <i class="icon-list"></i>
                            <span class="menu-text"> Hóa đơn nhập </span>
                        </a>
                    </li>

                    <li class="{{ request()->is('Admin/San_Pham/Sao') || request()->is('Admin/San_Pham/Sao') ? 'active open' : '' }}">

                        <a href="{{ route('SanPham.SoSao') }}">
                            <i class="icon-star"></i>
                            <span class="menu-text"> Đánh giá sản phẩm </span>
                        </a>
                    </li>

                    <li class="{{ request()->is('Admin/KhuyenMai') || request()->is('Admin/CTKhuyenMai') ? 'active open' : '' }}">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-certificate"></i>
                            <span class="menu-text"> Khuyến mãi </span>
                            <b class="arrow icon-angle-down"></b>

                            <ul class="submenu">
                                <li class="{{ request()->is('Admin/KhuyenMai') ? 'active' : '' }}">
                                    <a href="{{ route('KhuyenMai.index') }}">
                                        <i class="icon-double-angle-right"></i>
                                        Chương Trình Khuyến Mãi
                                    </a>
                                </li>
                                <li class="{{ request()->is('Admin/CTKhuyenMai') ? 'active' : '' }}">
                                    <a href="{{ route('CTKhuyenMai.index') }}">
                                        <i class="icon-check"></i>
                                        Chi tiết CT-Khuyến mãi
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="{{ request()->is('Admin/HangSanXuat') ? 'active' : '' }}">
                        <a href="{{ route('HangSanXuat.index') }}">
                            <i class="icon-list-alt"></i>
                            <span class="menu-text"> Hãng Sản Xuất </span>
                        </a>
                    </li>
                    {{-- Van chuyen --}}
                    <li class="{{ request()->is('Admin/DonViVanChuyen') || request()->is('Admin/NguoiVanChuyen') ? 'active open' : '' }}">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-fighter-jet"></i>
                            <span class="menu-text"> Vận chuyển </span>
                            <b class="arrow icon-angle-down"></b>

                            <ul class="submenu">
                                <li class="{{ request()->is('Admin/DonViVanChuyen') ? 'active' : '' }}">
                                    <a href="{{ route('DonViVanChuyen.index') }}">
                                        <i class="icon-double-angle-right"></i>
                                        Đơn vị vận chuyển
                                    </a>
                                </li>
                                <li class="{{ request()->is('Admin/NguoiVanChuyen') ? 'active' : '' }}">
                                    <a href="{{ route('NguoiVanChuyen.index') }}">
                                        <i class="icon-check"></i>
                                        Người vận chuyển
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    {{-- binh luan --}}
                    <li class="{{ request()->is('Admin/BinhLuan') ? 'active' : '' }}">
                        <a href="{{ route('BinhLuan.index') }}">
                            <i class="icon-edit "></i>
                            <span class="menu-text"> Bình Luận SP</span>

                        </a>
                    </li>
                    {{-- binh luan --}}
                    <li class="{{ request()->is('Admin/TaiKhoan') ? 'active' : '' }}">
                        <a href="{{ route('TaiKhoan.index') }}">
                            <i class="icon-user"></i>
                            <span class="menu-text"> Khách Hàng</span>

                        </a>
                    </li>
                </ul><!-- /.nav-list -->

                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                </div>

                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {}
                </script>
            </div>
            {{-- MENU END --}}
            {{-- phan nay la main-content, BODY --}}
            @yield('body')

            @section('settingicon')
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                    </div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="default" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div>
                </div><!-- /#ace-settings-container -->
            @show
        </div><!-- /.main-container-inner -->
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>

    </div><!-- /.main-container -->
    {{-- BODY END --}}

    @section('footer')
        {{-- phan nay la FOOTER --}}
        <!-- Footer Area Start -->

        <!-- Footer Area End -->
    @show
    @section('script')
        {{-- phan nay la Script --}}
        <!-- basic scripts -->
        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='/storage/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
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

        {{-- https://www.webslesson.info/2020/10/how-to-make-editable-datatable-in-php-using-x-editable-plugin.html --}}
        {{-- https://viblo.asia/p/cach-su-dung-thu-vien-jquery-x-editable-zb7vDVEOMjKd --}}
        <script src="/storage/assets/js/bootstrap-editable.js"></script>
        <script src="/storage/assets/js/vendor/toastr.min.js"></script>
    @show

    @yield('scriptThisPage')
</body>

</html>
