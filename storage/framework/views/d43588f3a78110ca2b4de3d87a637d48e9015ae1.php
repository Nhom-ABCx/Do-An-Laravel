<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> - Ace Admin</title>

    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

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
    
    <link rel="stylesheet" href="/storage/assets/css/toastr.min.css" />
    
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-editable.css" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <?php $__env->startSection('header'); ?>
        
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="<?php echo e(route('Home.index')); ?>" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            Ace Admin
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        

                        

                        
                        
                        <li class="blue">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-comment icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-comment-alt"></i>
                                    1 Tin nh???n
                                </li>

                                <li>
                                    <a href="<?php echo e(route('Message.index')); ?>?TaiKhoanId=99">
                                        <img src="#" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">
                                                    Username:
                                                </span>
                                                
                                                B???n: abc
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>kho???ng m???y ph??t tr?????c</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('Message.index')); ?>">
                                        Xem t???t c??? tin nh???n
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php if(auth()->guard()->check()): ?><?php echo e(Auth::user()->HinhAnh); ?><?php endif; ?>" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php echo e(Auth::user()->Username); ?>

                                    <?php endif; ?>

                                    <?php if(auth()->guard()->guest()): ?>
                                        Ch??a ????ng nh???p
                                    <?php endif; ?>
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
                                    <a href="<?php echo e(route('Login.logout')); ?>">
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
    <?php echo $__env->yieldSection(); ?>

    
    <div class="main-container" id="main-container">
        
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
                    <li class="<?php echo e(request()->is('Admin') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('Home.index')); ?>">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Trang ch??? </span>
                        </a>
                    </li>

                    <li class="<?php echo e(request()->is('Admin/HoaDon') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('HoaDon.index')); ?>">
                            <i class="icon-text-width"></i>
                            <span class="menu-text"> H??a ????n b??n </span>
                        </a>
                    </li>

                    <li class="<?php echo e(request()->is('Admin/SanPham') || request()->is('Admin/LoaiSanPham') ? 'active open' : ''); ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span class="menu-text"> Qu???n l?? s???n ph???m </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li class="<?php echo e(request()->is('Admin/SanPham') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('SanPham.index')); ?>">
                                    <i class="icon-double-angle-right"></i>
                                    S???n ph???m
                                </a>
                            </li>

                            <li class="<?php echo e(request()->is('Admin/LoaiSanPham') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('LoaiSanPham.index')); ?>">
                                    <i class="icon-double-angle-right"></i>
                                    Lo???i s???n ph???m
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo e(request()->is('Admin/HoaDonNhap') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('HoaDonNhap.index')); ?>">
                            <i class="icon-list"></i>
                            <span class="menu-text"> H??a ????n nh???p </span>
                        </a>
                    </li>

                    <li class="<?php echo e(request()->is('Admin/San_Pham/Sao') || request()->is('Admin/San_Pham/Sao') ? 'active open' : ''); ?>">

                        <a href="<?php echo e(route('SanPham.SoSao')); ?>">
                            <i class="icon-star"></i>
                            <span class="menu-text"> ????nh gi?? s???n ph???m </span>
                        </a>
                    </li>

                    <li class="<?php echo e(request()->is('Admin/KhuyenMai') || request()->is('Admin/CTKhuyenMai') ? 'active open' : ''); ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-certificate"></i>
                            <span class="menu-text"> Khuy???n m??i </span>
                            <b class="arrow icon-angle-down"></b>

                            <ul class="submenu">
                                <li class="<?php echo e(request()->is('Admin/KhuyenMai') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('KhuyenMai.index')); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        Ch????ng Tr??nh Khuy???n M??i
                                    </a>
                                </li>
                                <li class="<?php echo e(request()->is('Admin/CTKhuyenMai') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('CTKhuyenMai.index')); ?>">
                                        <i class="icon-check"></i>
                                        Chi ti???t CT-Khuy???n m??i
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="<?php echo e(request()->is('Admin/HangSanXuat') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('HangSanXuat.index')); ?>">
                            <i class="icon-list-alt"></i>
                            <span class="menu-text"> H??ng S???n Xu???t </span>
                        </a>
                    </li>
                    
                    <li class="<?php echo e(request()->is('Admin/DonViVanChuyen') || request()->is('Admin/NguoiVanChuyen') ? 'active open' : ''); ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-fighter-jet"></i>
                            <span class="menu-text"> V???n chuy???n </span>
                            <b class="arrow icon-angle-down"></b>

                            <ul class="submenu">
                                <li class="<?php echo e(request()->is('Admin/DonViVanChuyen') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('DonViVanChuyen.index')); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        ????n v??? v???n chuy???n
                                    </a>
                                </li>
                                <li class="<?php echo e(request()->is('Admin/NguoiVanChuyen') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('NguoiVanChuyen.index')); ?>">
                                        <i class="icon-check"></i>
                                        Ng?????i v???n chuy???n
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    
                    <li class="<?php echo e(request()->is('Admin/BinhLuan') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('BinhLuan.index')); ?>">
                            <i class="icon-edit "></i>
                            <span class="menu-text"> B??nh Lu???n SP</span>

                        </a>
                    </li>
                    
                    <li class="<?php echo e(request()->is('Admin/TaiKhoan') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('TaiKhoan.index')); ?>">
                            <i class="icon-user"></i>
                            <span class="menu-text"> Kh??ch H??ng</span>

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
            
            
            <?php echo $__env->yieldContent('body'); ?>

            <?php $__env->startSection('settingicon'); ?>
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
            <?php echo $__env->yieldSection(); ?>
        </div><!-- /.main-container-inner -->
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>

    </div><!-- /.main-container -->
    

    <?php $__env->startSection('footer'); ?>
        
        <!-- Footer Area Start -->

        <!-- Footer Area End -->
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('script'); ?>
        
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

        
        
        <script src="/storage/assets/js/bootstrap-editable.js"></script>
        <script src="/storage/assets/js/vendor/toastr.min.js"></script>
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->yieldContent('scriptThisPage'); ?>
</body>

</html>
<?php /**PATH E:\DDDD\WEB\Laravel\Do-An-Laravel\resources\views/Admin/layouts/Layout.blade.php ENDPATH**/ ?>