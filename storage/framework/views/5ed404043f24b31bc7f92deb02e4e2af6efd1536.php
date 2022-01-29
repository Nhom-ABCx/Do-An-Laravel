<?php $__env->startSection('title', 'Chi tiết hóa đơn nhập'); ?>

<?php $__env->startSection('headThisPage'); ?>
    
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    
    <style>
        /* hien thi hinh anh khi select */
        .hinhAnh {
            display: none;
        }

        select option:first-child {
            display: none;
        }

        /* .hinhAnh img {
                                                                    max-width: 150px;
                                                                } */
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
                    <a href="<?php echo e(route('HoaDonNhap.index')); ?>">Quản lý hóa đơn nhập</a>
                </li>
                <li class="active">Chi tiết hóa đơn nhập</li>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Chi tiết hóa đơn nhập</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                    <i class="icon-plus"></i>
                                    Chọn sản phẩm thêm vào
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng chi tiết hóa đơn nhập
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-bar-chart"></i>Số lượng</th>
                                    <th><i class="icon-money"></i>Giá nhập</th>
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
                                        <td><?php echo e(number_format($item->GiaNhap)); ?></td>
                                        <td><?php echo e(number_format($item->ThanhTien)); ?></td>
                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="<?php echo e(route('SanPham.index', $item->SanPham->id)); ?>" data-rel="tooltip" title="Xem sản phẩm">
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
                                                            <a href="<?php echo e(route('SanPham.index', $item->SanPham->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Xem sản phẩm">
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
            </div>

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="<?php echo e(route('HoaDonNhap.update', $hoaDonNhap)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("PUT"); ?>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">Nhập sản phẩm</h4>
                            </div>

                            <div class="modal-body overflow-visible">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="space"></div>

                                        <?php $__currentLoopData = $dsSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="imageSelector show-image output">
                                                <div id="<?php echo e($item->id); ?>" class="hinhAnh">
                                                    <img src="<?php echo e($item->HinhAnh); ?>" style="width: 100%" />
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="width-90 chosen-select" id='imageSelector' name="SanPhamId">
                                                        <option value=''></option>
                                                        <?php $__currentLoopData = $dsSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php echo e($item->id == old('SanPhamId') ? 'selected' : ''); ?>><?php echo e($item->TenSanPham); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <?php if($errors->has('SanPhamId')): ?>
                                                    <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('SanPhamId')); ?></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label for="form-field-first">Số lượng</label>

                                            <div>
                                                
                                                <input type="text" class="input-mini" id="spinner3" value="<?php echo e(old('SoLuong')); ?>" name="SoLuong" />
                                            </div>
                                            <?php if($errors->has('SoLuong')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('SoLuong')); ?></i>
                                            <?php endif; ?>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label for="form-field-first">Giá nhập</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon-credit-card"></i>
                                                    </span>

                                                    
                                                    <input type="text" class="input-mini" id="spinner1" value="<?php echo e(old('GiaNhap')); ?>" name="GiaNhap" />
                                                </div>
                                            </div>
                                            <?php if($errors->has('GiaNhap')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('GiaNhap')); ?></i>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-sm" data-dismiss="modal">
                                    <i class="icon-remove"></i>
                                    Cancel
                                </button>

                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="icon-ok"></i>
                                    Save
                                </button>
                            </div>
                        </form>
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
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>

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
                        null, null,
                        {
                            "bSortable": false
                        },
                        null, null, null,
                        {
                            "bSortable": false
                        },
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

            _valueSL = <?php echo e(old('SoLuong') ?? 0); ?>;
            _valueGN = <?php echo e(old('GiaNhap') ?? 0); ?>;
            $('#spinner1').ace_spinner({
                value: _valueGN,
                min: 0,
                max: 1000000000,
                step: 10000,
                touch_spinner: true,
                icon_up: 'icon-caret-up',
                icon_down: 'icon-caret-down'
            });
            $('#spinner3').ace_spinner({
                value: _valueSL,
                min: 0,
                max: 10000,
                step: 5,
                on_sides: true,
                icon_up: 'icon-plus smaller-75',
                icon_down: 'icon-minus smaller-75',
                btn_up_class: 'btn-success',
                btn_down_class: 'btn-danger'
            });

            // hien thi hinh anh khi select
            $('#imageSelector').change(function() {
                var select = $(this);
                $('.' + select.attr("id") + ' .hinhAnh').hide();
                $('#' + select.val()).show();
            });
        </script>
        

        
        <script type="text/javascript">
            jQuery(function($) {
                <?php if($errors->any()): ?>
                    $(document).ready(function(){
                    $("#modal-form").modal("show");
                    });

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        toastr.error('<?php echo e($error); ?>', 'Có lỗi xảy ra', {
                        timeOut: 3000
                        });
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            });
        </script>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/HoaDon/HoaDonNhap-show.blade.php ENDPATH**/ ?>