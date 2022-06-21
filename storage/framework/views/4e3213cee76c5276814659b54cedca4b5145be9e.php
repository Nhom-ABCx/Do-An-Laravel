<?php $__env->startSection('title', 'Chi tiết hóa đơn nhập'); ?>

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
                <li>
                    <a href="<?php echo e(route('HoaDonNhap.index')); ?>">Quản lý hóa đơn nhập</a>
                </li>
                <li class="active">Chi tiết hóa đơn nhập</li>
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
                                <div class="form-horizontal">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-adn red"></i> Mã đơn hàng </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDonNhap->id); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Người lập </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDonNhap->TaiKhoan->HoTen ?? $hoaDonNhap->TaiKhoan->Username); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Nhà cung cấp </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDonNhap->NhaCungCap->TenNhaCungCap); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-mobile-phone green"></i> Số điện thoại </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDonNhap->NhaCungCap->Phone); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-calendar purple"></i> Ngày đặt </label>
                                        <label class="col-sm-3"> <b><?php echo e($hoaDonNhap->created_at); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-exclamation-sign"></i> Trạng thái </label>
                                        <label class="col-sm-3">
                                            <?php if($hoaDonNhap->TrangThai): ?>
                                                <span class="label label-success arrowed-in arrowed-in-right"> Đã thành công</span>
                                            <?php else: ?>
                                                <span class="label arrowed"> Chưa thành công</span>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-bar-chart"></i> Tổng số lượng </label>
                                        <label class="col-sm-3"> <b id="TongSoLuong"><?php echo e($hoaDonNhap->TongSoLuong); ?></b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-money red"></i> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b id="TongTien"><?php echo e(number_format($hoaDonNhap->TongTien)); ?> VNĐ</b> </label>
                                    </div>

                                    <?php if(!$hoaDonNhap->TrangThai): ?>
                                        <div class="space-4"></div>

                                        <div class="clearfix form-actions">
                                            <div class="col-md-9">
                                                <form action="<?php echo e(route('HoaDonNhap.destroy', $hoaDonNhap)); ?>" method="post" style="display: inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger">Hủy   <i class="icon-trash bigger-130"></i></button>
                                                </form>

                                                <form class="form-horizontal" role="form" action="<?php echo e(route('HoaDonNhap.CapNhatTrangThai', $hoaDonNhap)); ?>" method="post"
                                                    enctype="multipart/form-data" style="display: inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PATCH'); ?>
                                                    <button class="btn btn-success" type="submit">
                                                        Xác nhận hóa đơn
                                                        <i class="icon-ok bigger-110"></i>
                                                    </button>
                                                </form>

                                                
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- PAGE CONTENT ENDS -->
                                </div>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                <?php if(!$hoaDonNhap->TrangThai): ?>
                                    <a href="#modal-form" role="button" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Chọn sản phẩm thêm vào
                                    </a>

                                    <div class="space"></div>
                                <?php endif; ?>

                                <div class="table-responsive">
                                    <table id="ChiTietHoaDonNhap" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i>Id</th>
                                                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                <th><i class="icon-cog"></i>Tổ hợp</th>
                                                <th style="width: 150px"><i class="icon-picture"></i>Hình ảnh</th>
                                                <th><i class="icon-bar-chart"></i>Số lượng</th>
                                                <th><i class="icon-money"></i>Giá nhập</th>
                                                <th><i class="icon-bar-chart"></i>Thành tiền</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /span -->
            </div>

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog" style="width: 90%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">Chọn sản phẩm</h4>
                        </div>

                        <div class="modal-body overflow-visible">
                            <div class="row">
                                <div class="table-responsive">
                                    <table id="ChonSanPham" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i>Id</th>
                                                <th style="width: 175px"><i class="icon-picture"></i>Hình ảnh</th>
                                                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                <th><i class="icon-file-text-alt"></i>Thuộc tính</th>
                                                <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                                <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                                <th><i class="icon-android"></i>Loại sản phẩm</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $dsSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr onclick="showChonChiTietSanPham(<?php echo e($item->id); ?>)" data-toggle="modal" data-backdrop="static">
                                                    <td class="center"><?php echo e($item->id); ?></td>
                                                    <td style="width: 150px">
                                                        <?php $__currentLoopData = $item->HinhAnh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hinhAnh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <img src='<?php echo e($hinhAnh->HinhAnh); ?>' width='50' height='50'>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td><?php echo e($item->TenSanPham); ?></td>
                                                    <td>
                                                        <?php $__currentLoopData = $item->ThuocTinhToHop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thuocTinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <p><i class=" icon-asterisk smaller-75 green"></i> <?php echo e($thuocTinh); ?></p>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td><?php echo e($item->tongSoLuongTon()); ?></td>
                                                    <td><?php echo e($item->HangSanXuatId); ?></td>
                                                    <td><?php echo e($item->LoaiSanPhamId); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

            </div><!-- /.page-content -->

            <div id="showModal"></div>
        </div><!-- /.main-content -->

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scriptThisPage'); ?>
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        <script src="/storage/assets/js/date-time/moment.min.js"></script>
        <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
        <script src="/storage/assets/js/jquery.autosize.min.js"></script>
        <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>

        <script type="text/javascript">
            $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
                $(this).next().focus();
            });
        </script>
        
        <!-- inline scripts related to this page -->
        
        <?php echo $__env->make('Admin.HoaDon.script.HoaDonNhap-show-script', ['hoaDonNhap' => $hoaDonNhap], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('Admin.SanPham.script.SanPham-show-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/HoaDon/HoaDonNhap-show.blade.php ENDPATH**/ ?>