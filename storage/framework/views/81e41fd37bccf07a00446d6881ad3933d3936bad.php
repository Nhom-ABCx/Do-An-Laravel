<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/jquery.gritter.css" />
    <style>
        .spinner-preview {
            width: 100px;
            height: 100px;
            text-align: center;
            margin-top: 60px;
        }

        .dropdown-preview {
            margin: 0 5px;
            display: inline-block;
        }

        .dropdown-preview>.dropdown-menu {
            display: block;
            position: static;
            margin-bottom: 5px;
        }

    </style>
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
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo e(route('HoaDon.index')); ?>">Quản lý hóa đơn</a>
                </li>
                <li class="active">Chi tiết hóa đơn</li>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a data-toggle="tab" href="#ChiTiet">
                                    <i class="green icon-home bigger-150"></i>
                                    Thông tin đơn hàng
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#DanhSachSanPham">
                                    <i class="pink icon-gittip bigger-150"></i>
                                    Danh sách sản phẩm
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="ChiTiet" class="tab-pane in active">
                                <form class="form-horizontal" role="form" action="<?php echo e(route('SanPham.store')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Mã đơn hàng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->id); ?></b> </label>

                                        <label class="col-sm-2" for="form-field-1"> Người vận chuyển </label>
                                        <label class="col-sm-5"> <b>Tên của người vận chuyển (chưa update)</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Khách hàng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->KhachHang->HoTen ?? $hoaDon->DiaChi->KhachHang->Username); ?></b> </label>

                                        <label class="col-sm-2" for="form-field-1"> Trạng thái vận chuyển </label>
                                        <label class="col-sm-5"> <b>Trạng thái đang vận chuyển lúc này (chưa update)</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Người nhận dùm </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->TenNguoiNhan); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Địa chỉ giao </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->DiaChiChiTiet); ?>

                                                <?php if(!empty($hoaDon->DiaChi->PhuongXa)): ?>, <?php echo e($hoaDon->DiaChi->PhuongXa); ?>  <?php endif; ?>
                                                <?php if(!empty($hoaDon->DiaChi->QuanHuyen)): ?>, <?php echo e($hoaDon->DiaChi->QuanHuyen); ?>  <?php endif; ?>
                                                <?php if(!empty($hoaDon->DiaChi->TinhThanhPho)): ?>, <?php echo e($hoaDon->DiaChi->TinhThanhPho); ?>  <?php endif; ?></b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Số điện thoại </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->Phone); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Phương thức thanh toán </label>
                                        <label class="col-sm-3">
                                            <b>
                                                <?php switch($hoaDon->PhuongThucThanhToan):
                                                    case (1): ?>
                                                        Thanh toán khi nhận hàng
                                                    <?php break; ?>
                                                    <?php case (2): ?>
                                                        Thẻ tín dụng
                                                    <?php break; ?>
                                                    <?php case (3): ?>
                                                        MOMO
                                                    <?php break; ?>
                                                    <?php case (4): ?>
                                                        ViettelPay
                                                    <?php break; ?>
                                                    <?php case (5): ?>
                                                        ZaloPay
                                                    <?php break; ?>
                                                    <?php default: ?>

                                                <?php endswitch; ?>
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Ngày đặt </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->created_at); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Trạng thái </label>
                                        <label class="col-sm-3">
                                                <?php switch($hoaDon->TrangThai):
                                                case (1): ?>
                                                    <span class="label arrowed">1 Đang xử lý</span>
                                                <?php break; ?>
                                                <?php case (2): ?>
                                                    <span class="label label-info arrowed-right arrowed-in">2 Đã xử lý</span>
                                                <?php break; ?>
                                                <?php case (3): ?>
                                                    <span class="label label-warning arrowed arrowed-right">3 Đang giao</span>
                                                <?php break; ?>
                                                <?php case (4): ?>
                                                    <span class="label label-success arrowed-in arrowed-in-right">4 Đã giao</span>
                                                <?php break; ?>
                                                <?php default: ?>

                                            <?php endswitch; ?>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Tổng số lượng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->TongSoLuong); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->TongTien); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="clearfix form-actions">
                                        <div class="col-md-9">
                                            <button class="btn btn-info" type="submit">
                                                <i class="icon-ok bigger-110"></i>
                                                Submit
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="icon-undo bigger-110"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                    <!-- PAGE CONTENT ENDS -->

                                </form>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                <?php echo $__env->make("layouts.Table-SanPham", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- /span -->
            </div>

        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, null,
                    {
                        "bSortable": false
                    }, //mota
                    null, null, null,
                    {
                        "bSortable": false
                    }, //hinh anh
                    null, null, null, null, null,
                    {
                        "bSortable": false
                    }
                ]
            });

            $('table th input:checkbox').on('click', function() {
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function() {
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });

            });


            $('[data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });

            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                return 'left';
            }
        })
        $('[data-rel=tooltip]').tooltip({
            container: 'body'
        });
        $(".chosen-select").chosen();
        $('#chosen-multiple-style').on('click', function(e) {
            var target = $(e.target).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
            else $('#form-field-select-4').removeClass('tag-input-style');
        });
    </script>
    

    
    <!-- page specific plugin scripts -->
    <!--[if lte IE 8]>
                                                  <script src="assets/js/excanvas.min.js"></script>
                                                  <![endif]-->

    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/bootbox.min.js"></script>
    <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/storage/assets/js/jquery.gritter.min.js"></script>
    <script src="/storage/assets/js/spin.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    $.gritter.add({
                    title: 'Có lỗi xảy ra',
                    text: '<?php echo e($error); ?>',
                    class_name: 'gritter-error'
                    });
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/HoaDon/HoaDon-show.blade.php ENDPATH**/ ?>