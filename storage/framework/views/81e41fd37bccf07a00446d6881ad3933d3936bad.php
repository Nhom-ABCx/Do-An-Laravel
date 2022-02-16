<?php $__env->startSection('title', 'Chi tiết hóa đơn'); ?>

<?php $__env->startSection('headThisPage'); ?>

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

                            <li>
                                <a data-toggle="tab" href="#LichSuVanChuyen">
                                    <i class="blue icon-archive bigger-150"></i>
                                    Lịch sử vận chuyển
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="ChiTiet" class="tab-pane in active">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-adn red"></i> Mã đơn hàng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->id); ?></b> </label>

                                        <label class="col-sm-2" for="form-field-1"><i class="icon-female pink"></i> Người vận chuyển lần cuối </label>
                                        <label class="col-sm-5"> <b><?php echo e($hoaDon->LichSuVanChuyen->last()->NguoiVanChuyen->HoTen ?? ''); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Khách hàng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->KhachHang->HoTen ?? $hoaDon->DiaChi->KhachHang->Username); ?></b> </label>

                                        <label class="col-sm-2" for="form-field-1"><i class="icon-fighter-jet blue"></i> Trạng thái vận chuyển </label>
                                        <label class="col-sm-5">
                                            <b>
                                                <?php switch($hoaDon->LichSuVanChuyen->last()->TrangThai??-1):
                                                    case (0): ?>
                                                        <span class="label arrowed">Chưa thành công</span>
                                                    <?php break; ?>
                                                    <?php case (1): ?>
                                                        <span class="label label-success arrowed-in arrowed-in-right">Thành công</span>
                                                    <?php break; ?>
                                                    <?php default: ?>
                                                        Chưa giao
                                                <?php endswitch; ?>
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Người nhận dùm </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->TenNguoiNhan); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-location-arrow purple"></i> Địa chỉ giao </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->DiaChiChiTiet); ?>

                                                <?php if(!empty($hoaDon->DiaChi->PhuongXa)): ?>
                                                    , <?php echo e($hoaDon->DiaChi->PhuongXa); ?>

                                                <?php endif; ?>
                                                <?php if(!empty($hoaDon->DiaChi->QuanHuyen)): ?>
                                                    , <?php echo e($hoaDon->DiaChi->QuanHuyen); ?>

                                                <?php endif; ?>
                                                <?php if(!empty($hoaDon->DiaChi->TinhThanhPho)): ?>
                                                    , <?php echo e($hoaDon->DiaChi->TinhThanhPho); ?>

                                                <?php endif; ?>
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-mobile-phone green"></i> Số điện thoại </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->DiaChi->Phone); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-credit-card green"></i> Phương thức thanh toán </label>
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
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-calendar purple"></i> Ngày đặt </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->created_at); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-exclamation-sign"></i> Trạng thái </label>
                                        <label class="col-sm-3">
                                            <?php switch($hoaDon->TrangThai):
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
                                                    <span class="label label-success arrowed-in arrowed-in-right"><?php echo e(App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DaGiao)); ?></span>
                                                <?php break; ?>
                                                <?php default: ?>
                                            <?php endswitch; ?>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-bar-chart"></i> Tổng số lượng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDon->TongSoLuong); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-money red"></i> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b><?php echo e(number_format($hoaDon->TongTien)); ?> VNĐ</b> </label>
                                    </div>

                                    <?php if($hoaDon->TrangThai != App\Enums\TrangThaiHD::DaGiao): ?>
                                        <div class="space-4"></div>

                                        <div class="clearfix form-actions">
                                            <div class="col-md-9">
                                                <form action="<?php echo e(route('HoaDon.destroy', $hoaDon)); ?>" method="post" style="display: inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger">Hủy   <i class="icon-trash bigger-130"></i></button>
                                                </form>

                                                <form action="<?php echo e(route('HoaDon.update', $hoaDon)); ?>" method="post" style="display: inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <button class="btn btn-success" type="submit">
                                                        Xác nhận chuyển tiếp trạng thái   
                                                        <i class="icon-ok bigger-110"></i>
                                                    </button>
                                                </form>

                                                <a href="<?php echo e(route('HoaDon.PDF', $hoaDon)); ?>" class="btn btn-info">
                                                    Xuất file PDF   
                                                    <i class="icon-file-text bigger-110"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- PAGE CONTENT ENDS -->
                                </div>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                <p><i class="icon-ok bigger-110 green"></i> Giá bán ra = Giá gốc - Giá đang khuyến mãi</p>
                                <p><i class="icon-ok bigger-110 green"></i> Thành tiền = Số lượng * (Giá bán - Giá giảm voucher)</p>
                                <div class="table-responsive">
                                    <table id="chi-tiet-san-pham" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i>Id</th>
                                                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                <th><i class="icon-picture"></i>Hình ảnh</th>
                                                <th><i class="icon-bar-chart"></i>Số lượng</th>
                                                <th><i class="icon-money"></i>Giá gốc</th>
                                                <th><i class="icon-money"></i>Giá đang khuyến mãi</th>
                                                <th><i class="icon-money"></i>Giá bán ra</th>
                                                <th><i class="icon-money"></i>Giá giảm voucher</th>
                                                <th><i class="icon-bar-chart"></i>Thành tiền</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $dsChiTietHD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    App\Http\Controllers\SanPhamController::fixImage($item->SanPham);
                                                ?>
                                                <tr>
                                                    <td class="center"><?php echo e($item->SanPham->id); ?></td>
                                                    <td><?php echo e($item->SanPham->TenSanPham); ?></td>
                                                    <td>
                                                        <img src='<?php echo e($item->SanPham->HinhAnh); ?>' alt="<?php echo e($item->SanPham->HinhAnh); ?>" width='100' height='100'>
                                                    </td>
                                                    <td><?php echo e($item->SoLuong); ?></td>
                                                    <td><?php echo e(number_format($item->SanPham->GiaBan)); ?></td>
                                                    <td><?php echo e(count($item->SanPham->CTChuongTrinhKM)? number_format($item->SanPham->CTChuongTrinhKM->first()->GiamGia): 0); ?></td>
                                                    <td><?php echo e(number_format($item->GiaBan)); ?></td>
                                                    <td><?php echo e(number_format($item->GiaGiam)); ?></td>
                                                    <td><?php echo e(number_format($item->ThanhTien)); ?></td>
                                                    <td>
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->SanPham->id); ?>)" role="button" data-toggle="modal"
                                                                data-rel="tooltip" title="Xem chi tiết">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->SanPham->id); ?>)" role="button" data-toggle="modal"
                                                                            class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="LichSuVanChuyen" class="tab-pane">
                                <div class="table-responsive">
                                    <table id="lich-su-nguoi-van-chuyen" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i> Đơn vị vận chuyển</th>
                                                <th><i class="icon-user"></i> Người vận chuyển</th>
                                                <th><i class="icon-calendar"></i> Ngày sinh</th>
                                                <th><i class="fa fa-transgender"></i> Giới tính</th>
                                                <th><i class="icon-align-left"></i> Địa chỉ</th>
                                                <th><i class="icon-phone"></i> Điện thoại</th>
                                                <th><i class="icon-align-left"></i> Mô tả</th>
                                                <th><i class="icon-check"></i> Trạng thái</th>
                                                <th><i class="icon-time bigger-110 hidden-480"></i> Ngày giao</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $lichSuVanChuyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="center"><?php echo e($item->NguoiVanChuyen->DonViVanChuyen->TenDonViVanChuyen); ?></td>
                                                    <td><?php echo e($item->NguoiVanChuyen->HoTen); ?></td>
                                                    <td><?php echo e(date_format(date_create($item->NguoiVanChuyen->NgaySinh), 'Y-m-d')); ?></td>
                                                    <td>
                                                        <?php if($item->NguoiVanChuyen->GioiTinh): ?>
                                                            Nam
                                                        <?php else: ?>
                                                            Nữ
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($item->NguoiVanChuyen->DiaChi); ?></td>
                                                    <td><?php echo e($item->NguoiVanChuyen->Phone); ?></td>
                                                    <td><?php echo e($item->MoTa); ?></td>
                                                    <td>
                                                        <?php if($item->TrangThai): ?>
                                                            <span class="label label-success arrowed-in arrowed-in-right">Thành công</span>
                                                        <?php else: ?>
                                                            <span class="label arrowed">Chưa thành công</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($item->created_at); ?></td>
                                                    <td></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /span -->
            </div>

            <div id="showModal"></div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#chi-tiet-san-pham').dataTable({
                "aoColumns": [
                    null, null,
                    {
                        "bSortable": false
                    }, //hinh anh
                    null, null, null, null, null, null,
                    {
                        "bSortable": false
                    },
                ]
            });

            var oTable2 = $('#lich-su-nguoi-van-chuyen').dataTable({
                "aoColumns": [{
                        "bSortable": false
                    }, null, null, null, null,
                    null, null, null, null,
                    {
                        "bSortable": false
                    },
                ],
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
    
    <?php echo $__env->make("SanPham.script.SanPham-show-script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/HoaDon/HoaDon-show.blade.php ENDPATH**/ ?>