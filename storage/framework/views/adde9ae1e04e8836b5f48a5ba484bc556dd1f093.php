<?php $__env->startSection('title', 'Trang chủ'); ?>

<?php $__env->startSection('headThisPage'); ?>
    
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="<?php echo e(route('Home.index')); ?>">Home</a>
                </li>
                <li class="active">Thống kê</li>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Thống kê tiêu chí</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" action="<?php echo e(route('Home.index')); ?>" method="get">
                                    
                                    <label> Thống kê theo đoạn thời gian: </label>
                                    <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="<?php echo e($request['NgayDat']); ?>" data-rel="tooltip" title="Tháng-Ngày-Năm"
                                        data-placement="top" />

                                    <button type="submit" class="btn btn-purple btn-sm">
                                        Lọc
                                        <i class="icon-search icon-on-right bigger-110"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="lighter red center">
                            <i class="icon-calendar"></i>
                            <?php
                                $catChuoi = explode(' - ', $request->input('NgayDat'));
                                //neu'co' thoi gian ko rong~ va` dung' dinh dang datetime thi` tim` kiem' theo moc' thoi gian
    if (!empty($request->input('NgayDat')) && date_create($catChuoi[0]) != false && date_create($catChuoi[1]) != false) {
        echo 'Thống kê từ ' . $catChuoi[0] . ' đến ' . $catChuoi[1];
    } else {
        echo 'Thống kê trong tháng';
                                }
                                unset($catChuoi);
                            ?>
                        </h4>
                        <div class="space-6"></div>
                        <div class="col-sm-7 infobox-container">
                            <div class="infobox infobox-green  ">
                                <div class="infobox-icon">
                                    <i class="icon-comments"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number"><?php echo e($thongKe['LuotBinhLuan']); ?></span>
                                    <div class="infobox-content">Lượt bình luận</div>
                                </div>
                                <div class="stat stat-success">8%</div>
                            </div>

                            <div class="infobox infobox-blue  ">
                                <div class="infobox-icon">
                                    <i class="icon-star"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number"><?php echo e($thongKe['LuotDanhGia']); ?></span>
                                    <div class="infobox-content">Lượt đánh giá</div>
                                </div>

                                <div class="badge badge-success">
                                    +32%
                                    <i class="icon-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-pink  ">
                                <div class="infobox-icon">
                                    <i class="icon-shopping-cart"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number"><?php echo e($thongKe['DonDatHang']); ?></span>
                                    <div class="infobox-content">Đơn đặt hàng</div>
                                </div>
                                <div class="stat stat-important">4%</div>
                            </div>

                            

                            <div class="infobox infobox-orange2  ">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">9,999</span>
                                    <div class="infobox-content">Lượt truy cập</div>
                                </div>

                                <div class="badge badge-success">
                                    7.2%
                                    <i class="icon-arrow-up"></i>
                                </div>
                            </div>

                            

                            <div class="space-6"></div>

                            <div class="infobox infobox-green infobox-dark">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage"
                                        data-percent="<?php echo e($thongKe['DonDatHang'] != 0? number_format(($thongKe['DonGiaoThanhCong'] / $thongKe['DonDatHang']) * 100): 0); ?>" data-size="55">
                                        <span class="percent"><?php echo e($thongKe['DonDatHang'] != 0? number_format(($thongKe['DonGiaoThanhCong'] / $thongKe['DonDatHang']) * 100): 0); ?></span>%
                                    </div>
                                </div>

                                <div class="infobox-data" style="margin: 7px 0px 0px 15px">
                                    <div class="infobox-content"><?php echo e($thongKe['DonGiaoThanhCong'] . '/' . $thongKe['DonDatHang']); ?></div>
                                    <div class="infobox-content">Đơn giao thành công</div>
                                </div>
                            </div>

                            <div class="infobox infobox-blue infobox-dark">
                                <div class="infobox-chart" style="margin-top: 5px">
                                    <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                </div>

                                <div class="infobox-data" style="position: absolute; top: 12px">
                                    <div class="infobox-content">Thu nhập</div>
                                    <div class="infobox-content"><?php echo e(number_format($thongKe['ThuNhap'])); ?></div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="vspace-sm"></div>

                        <div class="col-sm-5">
                            <div class="widget-box">
                                <div class="widget-header widget-header-flat widget-header-small">
                                    <h5>
                                        <i class="icon-signal"></i>
                                        Top 5 loại sản phẩm mua nhiều nhất
                                    </h5>

                                    
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div id="piechart-placeholder"></div>

                                        <div class="hr hr8 hr-double"></div>

                                        <div class="clearfix">
                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-renren icon-2x blue"></i>
                                                    &nbsp; <?php echo e($thongKe['LoaiSanPham'][0]['TenLoai']); ?>

                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['LoaiSanPham'][0]['LuotMua']); ?></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-bug icon-2x green"></i>
                                                    &nbsp; <?php echo e($thongKe['LoaiSanPham'][1]['TenLoai']); ?>

                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['LoaiSanPham'][1]['LuotMua']); ?></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-anchor icon-2x purple"></i>
                                                    &nbsp; <?php echo e($thongKe['LoaiSanPham'][2]['TenLoai']); ?>

                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['LoaiSanPham'][2]['LuotMua']); ?></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-weibo icon-2x red"></i>
                                                    &nbsp; <?php echo e($thongKe['LoaiSanPham'][3]['TenLoai']); ?>

                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['LoaiSanPham'][3]['LuotMua']); ?></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-sun icon-2x orange"></i>
                                                    &nbsp; <?php echo e($thongKe['LoaiSanPham'][4]['TenLoai']); ?>

                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['LoaiSanPham'][4]['LuotMua']); ?></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="icon-compass icon-2x"></i>
                                                    &nbsp; Tổng
                                                </span>
                                                <h4 class="bigger pull-right"><?php echo e($thongKe['SoLuongChiTietHoaDon']); ?></h4>
                                            </div>
                                        </div>
                                    </div><!-- /widget-main -->
                                </div><!-- /widget-body -->
                            </div><!-- /widget-box -->
                        </div><!-- /span -->
                    </div><!-- /row -->

                    <div class="hr hr32 hr-dotted"></div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-flat">
                                    <h4 class="lighter">
                                        <i class="icon-star orange"></i>
                                        Top 10 khách hàng mua nhiều nhất
                                    </h4>

                                    <div class="widget-toolbar">
                                        <a href="#" data-action="collapse">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <table class="table table-bordered table-striped">
                                            <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Tên
                                                    </th>

                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Tổng lượng mua
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="icon-caret-right blue"></i>
                                                        Trạng thái hóa đơn hiện tại
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $__currentLoopData = $thongKe['KhachHangMuaNhieuNhat']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($item->HoTen ?? $item->Username); ?></td>

                                                        <td>
                                                            <b class="green"><?php echo e($item->TongSoLuongMua); ?></b>
                                                        </td>

                                                        <td class="hidden-480">
                                                            <?php switch($item->TrangThaiHDHienTai):
                                                                case (App\Enums\TrangThaiHD::DangXacNhan): ?>
                                                                    <span class="label label-danger arrowed"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangXacNhan)); ?></span>
                                                                <?php break; ?>

                                                                <?php case (App\Enums\TrangThaiHD::DangXuLy): ?>
                                                                    <span class="label arrowed"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangXuLy)); ?></span>
                                                                <?php break; ?>

                                                                <?php case (App\Enums\TrangThaiHD::DaXuLy): ?>
                                                                    <span class="label label-info arrowed-right arrowed-in"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DaXuLy)); ?></span>
                                                                <?php break; ?>

                                                                <?php case (App\Enums\TrangThaiHD::DangGiao): ?>
                                                                    <span class="label label-warning arrowed arrowed-right"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangGiao)); ?></span>
                                                                <?php break; ?>

                                                                <?php case (App\Enums\TrangThaiHD::DaGiao): ?>
                                                                    <span
                                                                        class="label label-success arrowed-in arrowed-in-right"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DaGiao)); ?></span>
                                                                <?php break; ?>

                                                                <?php default: ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /widget-main -->
                                </div><!-- /widget-body -->
                            </div><!-- /widget-box -->
                        </div>

                        <div class="col-sm-7">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-flat">
                                    <h4 class="lighter">
                                        <i class="icon-signal"></i>
                                        Doanh thu <small>((Giá bán-Giá nhập) * Số lượng)</small>
                                    </h4>

                                    <div class="widget-toolbar">
                                        <a href="#" data-action="collapse">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div id="lineDoanhThu"></div>
                                    </div><!-- /widget-main -->
                                </div><!-- /widget-body -->
                            </div><!-- /widget-box -->
                        </div>
                    </div>

                    <div class="hr hr32 hr-dotted"></div>

                    <div class="row">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-flat">
                                <h4 class="lighter">
                                    <i class="icon-rss orange"></i>
                                    Top 10 Sản phẩm bán chạy
                                </h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <table class="table table-bordered table-striped">
                                        <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="icon-caret-right blue"></i>
                                                    Tên sản phẩm
                                                </th>

                                                <th>
                                                    <i class="icon-caret-right blue"></i>
                                                    Hình ảnh
                                                </th>

                                                <th class="hidden-480">
                                                    <i class="icon-caret-right blue"></i>
                                                    Tổng số lượng bán
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $thongKe['dsSanPhamBanChay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($item->TenSanPham); ?></td>

                                                    <td>
                                                        <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->id); ?>)" role="button" data-toggle="modal" class="tooltip-info"
                                                            data-rel="tooltip" title="Xem chi tiết">
                                                            <img src='<?php echo e($item->HinhAnh); ?>' alt="<?php echo e($item->HinhAnh); ?>" width='100' height='100'>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <b class="green"><?php echo e($item->TongSoLuongBan); ?></b>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div><!-- /widget-main -->
                            </div><!-- /widget-body -->
                        </div><!-- /widget-box -->
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div id="showModal"></div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <script src="/storage/assets/js/vendor/apexcharts.min.js"></script>
    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
                                                                                                                                                                                          <script src="/storage/assets/js/excanvas.min.js"></script>
                                                                                                                                                                                          <![endif]-->

    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/storage/assets/js/jquery.sparkline.min.js"></script>
    <script src="/storage/assets/js/flot/jquery.flot.min.js"></script>
    <script src="/storage/assets/js/flot/jquery.flot.pie.min.js"></script>
    <script src="/storage/assets/js/flot/jquery.flot.resize.min.js"></script>
    
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <script src="/storage/assets/js/date-time/moment.min.js"></script>
    <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
    <script src="/storage/assets/js/jquery.autosize.min.js"></script>
    <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript">
        $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });
    </script>
    

    <script type="text/javascript">
        jQuery(function($) {
            $('.easy-pie-chart.percentage').each(function() {
                var $box = $(this).closest('.infobox');
                var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                var size = parseInt($(this).data('size')) || 50;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size / 10),
                    animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                    size: size
                });
            });

            $('.sparkline').each(function() {
                var $box = $(this).closest('.infobox');
                var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                $(this).sparkline('html', {
                    tagValuesAttribute: 'data-values',
                    type: 'bar',
                    barColor: barColor,
                    chartRangeMin: $(this).data('min') || 0,
                    height: 50
                });
            });

            var placeholder = $('#piechart-placeholder').css({
                'width': '90%',
                'min-height': '150px'
            });
            var data = [{
                    label: "<?php echo e($thongKe['LoaiSanPham'][0]['TenLoai']); ?>",
                    data: <?php echo e($thongKe['SoLuongChiTietHoaDon'] != 0? number_format(($thongKe['LoaiSanPham'][0]['LuotMua'] / $thongKe['SoLuongChiTietHoaDon']) * 100, 2): 0); ?>,
                    color: "#2091CF"
                },
                {
                    label: "<?php echo e($thongKe['LoaiSanPham'][1]['TenLoai']); ?>",
                    data: <?php echo e($thongKe['SoLuongChiTietHoaDon'] != 0? number_format(($thongKe['LoaiSanPham'][1]['LuotMua'] / $thongKe['SoLuongChiTietHoaDon']) * 100, 2): 0); ?>,
                    color: "#68BC31"
                },
                {
                    label: "<?php echo e($thongKe['LoaiSanPham'][2]['TenLoai']); ?>",
                    data: <?php echo e($thongKe['SoLuongChiTietHoaDon'] != 0? number_format(($thongKe['LoaiSanPham'][2]['LuotMua'] / $thongKe['SoLuongChiTietHoaDon']) * 100, 2): 0); ?>,
                    color: "#AF4E96"
                },
                {
                    label: "<?php echo e($thongKe['LoaiSanPham'][3]['TenLoai']); ?>",
                    data: <?php echo e($thongKe['SoLuongChiTietHoaDon'] != 0? number_format(($thongKe['LoaiSanPham'][3]['LuotMua'] / $thongKe['SoLuongChiTietHoaDon']) * 100, 2): 0); ?>,
                    color: "#DA5430"
                },
                {
                    label: "<?php echo e($thongKe['LoaiSanPham'][4]['TenLoai']); ?>",
                    data: <?php echo e($thongKe['SoLuongChiTietHoaDon'] != 0? number_format(($thongKe['LoaiSanPham'][4]['LuotMua'] / $thongKe['SoLuongChiTietHoaDon']) * 100, 2): 0); ?>,
                    color: "#FEE074"
                },
            ];

            function drawPieChart(placeholder, data, position) {
                $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt: 0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne",
                        labelBoxBorderColor: null,
                        margin: [-30, 15]
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                })
            }
            drawPieChart(placeholder, data);

            /**
            we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
            so that's not needed actually.
            */
            placeholder.data('chart', data);
            placeholder.data('draw', drawPieChart);



            var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
            var previousPoint = null;

            placeholder.on('plothover', function(event, pos, item) {
                if (item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({
                        top: pos.pageY + 10,
                        left: pos.pageX + 10
                    });
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }

            });






            var d1 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d1.push([i, Math.sin(i)]);
            }

            var d2 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d2.push([i, Math.cos(i)]);
            }

            var d3 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.2) {
                d3.push([i, Math.tan(i)]);
            }

            $('#recent-box [data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });

            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('.tab-content')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                return 'left';
            }


            $('.dialogs,.comments').slimScroll({
                height: '300px'
            });


            //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
            //so disable dragging when clicking on label
            var agent = navigator.userAgent.toLowerCase();
            if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                $('#tasks').on('touchstart', function(e) {
                    var li = $(e.target).closest('#tasks li');
                    if (li.length == 0) return;
                    var label = li.find('label.inline').get(0);
                    if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
                });

            $('#tasks').sortable({
                opacity: 0.8,
                revert: true,
                forceHelperSize: true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize: true,
                tolerance: 'pointer',
                stop: function(event, ui) { //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                    $(ui.item).css('z-index', 'auto');
                }
            });
            $('#tasks').disableSelection();
            $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
                if (this.checked) $(this).closest('li').addClass('selected');
                else $(this).closest('li').removeClass('selected');
            });

        });
        //bieu do`
    var lineOptions = {
        chart: {
            type: "line",
        },
        series: [{
            name: "Số tiền kiếm được",
            data: [
                <?php $__currentLoopData = $thongKe['DoanhThu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($item['DoanhThu'] . ','); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
        }, ],
        xaxis: {
            categories: [
                <?php $__currentLoopData = $thongKe['DoanhThu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($item['Year'] . ','); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
        },
    };
    var line = new ApexCharts(document.querySelector("#lineDoanhThu"), lineOptions);
    line.render();
    //bieu do` end
    </script>
    <?php echo $__env->make('Admin.SanPham.script.SanPham-show-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DDDD\WEB\Laravel\Do-An-Laravel\resources\views/Admin/Home.blade.php ENDPATH**/ ?>