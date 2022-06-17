<?php $__env->startSection('title', 'Hóa đơn nhập'); ?>

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
                <?php if(request()->is('Admin/HoaDonNhapp/DaHuy')): ?>
                    <li>
                        <a href="<?php echo e(route('HoaDonNhap.index')); ?>">Quản lý hóa đơn nhập</a>
                    </li>
                    <li class="active">Đã hủy</li>
                <?php else: ?>
                    <li class="active">Quản lý hóa đơn nhập</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý Hóa đơn nhập</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <?php if(!request()->is('Admin/HoaDonNhapp/DaHuy')): ?>
                                    <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm hóa đơn nhập
                                    </a>
                                    <a href="<?php echo e(route('HoaDonNhap.DaHuy')); ?>" class="btn btn-inverse">
                                        <i class="icon-trash"></i>
                                        Hóa đơn nhập đã hủy
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng Hóa đơn nhập
                        <form class="form-inline" action="<?php echo e(request()->is('Admin/HoaDonNhapp/DaHuy') ? route('HoaDonNhap.DaHuy') : route('HoaDonNhap.index')); ?>" method="get" style="margin-top: 10px">
                            
                            <label> Tên nhân viên: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="TaiKhoanId">
                                <option value="">All</option>
                                <?php $__currentLoopData = $dsTaiKhoan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php if($item->id == $request['TaiKhoanId']): ?> selected <?php endif; ?>>
                                        <?php echo e($item->HoTen ?? $item->Username); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <label> Trạng thái: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                <option value="">All</option>
                                <option value="0" <?php if('0' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                    Chưa thành công
                                </option>
                                <option value="1" <?php if('1' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                    Đã thành công
                                </option>
                            </select>

                            <label for=""> Lọc theo ngày: </label>
                            <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="<?php echo e($request['NgayDat']); ?>" data-rel="tooltip" title="Tháng-Ngày-Năm" data-placement="top" />

                            <button type="submit" class="btn btn-purple btn-sm">
                                Lọc
                                <i class="icon-search icon-on-right bigger-110"></i>
                            </button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-user"></i>Người lập</th>
                                    <th><i class="icon-cogs"></i>Nhà cung cấp</th>
                                    <th><i class="icon-phone"></i>Phone</th>
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
                                        <td><?php echo e($item->TaiKhoan->HoTen ?? $item->TaiKhoan->Username); ?></td>
                                        <td><?php echo e($item->NhaCungCap->TenNhaCungCap); ?></td>
                                        <td><?php echo e($item->NhaCungCap->Phone); ?></td>
                                        <td><?php echo e($item->TongSoLuong ?? 0); ?></td>
                                        <td><?php echo e(number_format($item->TongTien)); ?></td>
                                        <td>
                                            <?php if($item->TrangThai): ?>
                                                <span class="label label-success arrowed-in arrowed-in-right"> Đã thành công</span>
                                            <?php else: ?>
                                                <span class="label arrowed"> Chưa thành công</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <?php if(request()->is('Admin/HoaDonNhapp/DaHuy')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('HoaDonNhap.KhoiPhuc', $item->id)); ?>" method="post">
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
                                                                <form action="<?php echo e(route('HoaDonNhap.KhoiPhuc', $item->id)); ?>" method="post">
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
                                                    <?php if(!$item->TrangThai): ?>
                                                        <span class="dropdown-hover dropup dropdown-pink">
                                                            <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="<?php echo e(route('HoaDonNhap.edit', $item)); ?>?TrangThai=0" tabindex="-1"> Chưa thành công</a>
                                                                    <a href="<?php echo e(route('HoaDonNhap.edit', $item)); ?>?TrangThai=1" tabindex="-1"> Đã thành công</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    <?php endif; ?>

                                                    <?php if(!$item->TrangThai): ?>
                                                        <form action="<?php echo e(route('HoaDonNhap.destroy', $item)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-130"></i></button>
                                                        </form>
                                                    <?php endif; ?>

                                                    <a class="blue" href="<?php echo e(route('HoaDonNhap.show', $item)); ?>" data-rel="tooltip" title="Xem hoặc thêm chi tiết hóa đơn nhập">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <?php if(!$item->TrangThai): ?>
                                                                <span class="dropdown-hover dropup dropdown-pink">
                                                                    <i class="icon-cog green bigger-150" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="<?php echo e(route('HoaDonNhap.edit', $item)); ?>?TrangThai=0" tabindex="-1"> Chưa thành công</a>
                                                                            <a href="<?php echo e(route('HoaDonNhap.edit', $item)); ?>?TrangThai=1" tabindex="-1"> Đã thành công</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            <?php endif; ?>

                                                            <?php if(!$item->TrangThai): ?>
                                                                <li>
                                                                    <form action="<?php echo e(route('HoaDonNhap.destroy', $item)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Hủy"><i
                                                                                class="icon-trash bigger-120"></i></button>
                                                                    </form>
                                                                </li>
                                                            <?php endif; ?>

                                                            <li>
                                                                <a href="<?php echo e(route('HoaDonNhap.show', $item)); ?>" class="tooltip-info" data-rel="tooltip" title="Xem hoặc thêm chi tiết hóa đơn nhập">
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

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">Thêm mới hóa đơn nhập</h4>
                        </div>

                        <div class="modal-body overflow-visible">
                            <form action="<?php echo e(route('HoaDonNhap.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <label>Nhà cung cấp nào ?</label>
                                    <input class="form-control" type="text" placeholder="Tên nhà cung cấp" value="<?php echo e(old('NhaCungCap')); ?>" name="NhaCungCap" />
                                    <?php if($errors->has('NhaCungCap')): ?>
                                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('NhaCungCap')); ?></i>
                                    <?php endif; ?>

                                    <label>Điện thoại liên lạc</label>
                                    <input class="form-control" type="number" placeholder="Điện thoại" value="<?php echo e(old('Phone')); ?>" name="Phone" />
                                    <?php if($errors->has('Phone')): ?>
                                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('Phone')); ?></i>
                                    <?php endif; ?>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-sm" data-dismiss="modal">
                                        <i class="icon-remove"></i>
                                        Hủy
                                    </button>

                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="icon-ok"></i>
                                        Lưu
                                    </button>
                                </div>
                            </form>
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
                    "aoColumns": [{
                            "type": "num"
                        }, null, null, null,
                        null, null, null, null,
                        {
                            "bSortable": false
                        },
                        null
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

            /////////modal combobox fix
            //chosen plugin inside a modal will have a zero width because the select element is originally hidden
            //and its width cannot be determined.
            //so we set the width after modal is show
            $('#modal-form').on('shown.bs.modal', function() {
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            })
        </script>
        

        
        <script type="text/javascript">
            jQuery(function($) {
                <?php if($errors->any()): ?>
                    $('#modal-form').modal('show');
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        toastr.error('<?php echo e($error); ?>', 'Có lỗi xảy ra', {
                            timeOut: 3000
                        });
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            });
        </script>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/HoaDon/HoaDonNhap-index.blade.php ENDPATH**/ ?>