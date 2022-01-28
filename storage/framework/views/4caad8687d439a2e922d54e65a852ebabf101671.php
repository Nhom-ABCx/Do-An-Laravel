


<?php $__env->startSection('title', 'Hóa đơn'); ?>

<?php $__env->startSection('headThisPage'); ?>
    
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    

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
                <?php if(request()->is('HoaDonn/DaGiao')): ?>
                    <li>
                        <a href="<?php echo e(route('HoaDon.index')); ?>">Quản lý hóa đơn</a>
                    </li>
                    <li class="active">Đã giao</li>
                <?php elseif(request()->is('HoaDonn/DaHuy')): ?>
                    <li>
                        <a href="<?php echo e(route('HoaDon.index')); ?>">Quản lý hóa đơn</a>
                    </li>
                    <li class="active">Đã hủy</li>
                <?php else: ?>
                    <li class="active">Quản lý hóa đơn</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý Hóa đơn</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline"
                                    action="<?php echo e(request()->is('HoaDonn/DaGiao') ? route('HoaDon.DaGiao') : (request()->is('HoaDonn/DaHuy') ? route('HoaDon.DaHuy') : route('HoaDon.index'))); ?>"
                                    method="get">
                                    <?php if(request()->is('HoaDonn/DaGiao')): ?>
                                        <a href="<?php echo e(route('HoaDon.DaHuy')); ?>" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Hóa đơn đã hủy
                                        </a>
                                    <?php elseif(request()->is('HoaDonn/DaHuy')): ?>

                                        <a href="<?php echo e(route('HoaDon.DaGiao')); ?>" class="btn btn-success">
                                            <i class="icon-check-sign"></i>
                                            Hóa đơn đã giao
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('HoaDon.DaGiao')); ?>" class="btn btn-success">
                                            <i class="icon-check-sign"></i>
                                            Hóa đơn đã giao
                                        </a>
                                        <a href="<?php echo e(route('HoaDon.DaHuy')); ?>" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Hóa đơn đã hủy
                                        </a>
                                    <?php endif; ?>


                                    
                                    <label for=""> Phương thức thanh toán: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="PhuongThucThanhToan">
                                        <option value="">All</option>
                                        <option value="1" <?php if('1' == $request['PhuongThucThanhToan']): ?> selected <?php endif; ?>>
                                            Khi nhận hàng
                                        </option>
                                        <option value="2" <?php if('2' == $request['PhuongThucThanhToan']): ?> selected <?php endif; ?>>
                                            Thẻ tín dụng
                                        </option>
                                        <option value="3" <?php if('3' == $request['PhuongThucThanhToan']): ?> selected <?php endif; ?>>
                                            MOMO
                                        </option>
                                        <option value="4" <?php if('4' == $request['PhuongThucThanhToan']): ?> selected <?php endif; ?>>
                                            ViettelPay
                                        </option>
                                        <option value="5" <?php if('5' == $request['PhuongThucThanhToan']): ?> selected <?php endif; ?>>
                                            ZaloPay
                                        </option>
                                    </select>
                                    <?php if(request()->is('HoaDonn/DaGiao')): ?>
                                    <?php else: ?>
                                        <label for=""> Trạng thái: </label>
                                        <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                            <option value="">All</option>
                                            <option value="0" <?php if('0' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                                Đang chờ xác nhận
                                            </option>
                                            <option value="1" <?php if('1' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                                Đang xử lý
                                            </option>
                                            <option value="2" <?php if('2' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                                Đã xử lý
                                            </option>
                                            <option value="3" <?php if('3' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                                Đang giao
                                            </option>
                                            <option value="4" <?php if('4' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                                Đã giao
                                            </option>
                                        </select>
                                    <?php endif; ?>
                                    <label for=""> Lọc theo ngày: </label>
                                    <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="<?php echo e($request['NgayDat']); ?>" data-rel="tooltip" title="Tháng-Ngày-Năm"
                                        data-placement="top" />

                                    <button type="submit" class="btn btn-purple btn-sm">
                                        Search
                                        <i class="icon-search icon-on-right bigger-110"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng Hóa đơn
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-user"></i>Khách hàng</th>
                                    <th><i class="icon-credit-card"></i>Phương thức thanh toán</th>
                                    <th><i class="icon-bar-chart"></i>Tổng số lượng</th>
                                    <th><i class="icon-money"></i>Tổng tiền</th>
                                    <th><i class="icon-exclamation-sign"></i>Trạng thái</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Ngày đặt
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Chỉnh sửa lần cuối
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $hoaDon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->DiaChi->KhachHang->HoTen ?? $item->DiaChi->KhachHang->Username); ?></td>
                                        <td>
                                            <?php switch($item->PhuongThucThanhToan):
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
                                        </td>
                                        <td><?php echo e($item->TongSoLuong); ?></td>
                                        <td><?php echo e(number_format($item->TongTien)); ?></td>
                                        <td>
                                            <?php switch($item->TrangThai):
                                                case (0): ?>
                                                    <span class="label label-danger arrowed">0 Đang chờ xác nhận</span>
                                                <?php break; ?>
                                                <?php case (1): ?>
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
                                        </td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <?php if(request()->is('HoaDonn/DaHuy')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('HoaDon.KhoiPhuc', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="<?php echo e(route('HoaDon.KhoiPhuc', $item->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    
                                                                    <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">

                                                    
                                                    <?php if($item->TrangThai != 4): ?>
                                                        <span class="dropdown-hover dropup dropdown-pink">
                                                            <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=0" tabindex="-1">0 Đang chờ xác nhận</a>
                                                                    <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=1" tabindex="-1">1 Đang xử lý</a>
                                                                    <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=2" tabindex="-1">2 Đã xử lý</a>
                                                                    <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=3" tabindex="-1">3 Đang giao</a>
                                                                    <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=4" tabindex="-1">4 Đã giao</a>
                                                                </li>
                                                            </ul>
                                                        </span>

                                                        <form action="<?php echo e(route('HoaDon.destroy', $item)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-130"></i></button>
                                                        </form>

                                                    <?php endif; ?>
                                                    <a class="blue" href="<?php echo e(route('HoaDon.show', $item)); ?>" data-rel="tooltip" title="Xem chi tiết">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <?php if($item->TrangThai != 4): ?>
                                                                <li>
                                                                    <span class="dropdown-hover dropup dropdown-pink">
                                                                        <i class="icon-cog green bigger-150" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li>
                                                                                <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=0" tabindex="-1">0 Đang chờ xác nhận</a>
                                                                                <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=1" tabindex="-1">1 Đang xử lý</a>
                                                                                <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=2" tabindex="-1">2 Đã xử lý</a>
                                                                                <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=3" tabindex="-1">3 Đang giao</a>
                                                                                <a href="<?php echo e(route('HoaDon.edit', $item)); ?>?TrangThai=4" tabindex="-1">4 Đã giao</a>
                                                                            </li>
                                                                        </ul>
                                                                    </span>
                                                                </li>

                                                                <li>
                                                                    <form action="<?php echo e(route('HoaDon.destroy', $item)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Hủy"><i
                                                                                class="icon-trash bigger-120"></i></button>
                                                                    </form>
                                                                </li>
                                                            <?php endif; ?>

                                                            <li>
                                                                <a href="<?php echo e(route('HoaDon.show', $item)); ?>" class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!-- /.page-content -->
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
    <script type="text/javascript">
        $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });
    </script>
    
    <!-- inline scripts related to this page -->
    
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, null, null, null,
                    null, null, null, null,
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

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/HoaDon/HoaDon-index.blade.php ENDPATH**/ ?>