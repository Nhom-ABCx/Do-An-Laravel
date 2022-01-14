<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    
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
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Quản lý Hóa đơn</li>
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
                                <form class="form-inline" action="<?php echo e(route('HoaDon.index')); ?>" method="get">
                                    <a href="<?php echo e(route('HoaDon.DaHuy')); ?>" class="btn btn-inverse">
                                        <i class="icon-trash"></i>
                                        Hóa đơn đã hủy
                                    </a>

                                    
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
                                    <label for=""> Trạng thái: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                        <option value="">All</option>
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
                                    <label for=""> Lọc theo ngày: </label>
                                    <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="<?php echo e($request["NgayDat"]); ?>" />

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
                                        </td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>

                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="icon-zoom-in bigger-130"></i>
                                                </a>

                                                <a class="green" href="<?php echo e(route('HoaDon.edit', $item)); ?>" data-rel="tooltip" title="Chỉnh sửa">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>

                                                <form action="<?php echo e(route('HoaDon.destroy', $item)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-130"></i></button>
                                                </form>
                                                
                                            </div>

                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                    <i class="icon-zoom-in bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo e(route('HoaDon.edit', $item)); ?>" class="tooltip-success" data-rel="tooltip" title="Chỉnh sửa">
                                                                <span class="green">
                                                                    <i class="icon-edit bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="<?php echo e(route('HoaDon.destroy', $item)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-120"></i></button>
                                                            </form>
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
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/HoaDon/HoaDon-index.blade.php ENDPATH**/ ?>