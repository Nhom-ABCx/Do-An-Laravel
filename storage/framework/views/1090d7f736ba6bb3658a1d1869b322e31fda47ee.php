<?php $__env->startSection('title', 'QL Sản phẩm'); ?>

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
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <?php if(request()->is('Admin/SanPhamm/DaXoa')): ?>
                    <li>
                        <a href="<?php echo e(route('SanPham.index')); ?>">Quản lý sản phẩm</a>
                    </li>
                    <li class="active">Đã xóa</li>
                <?php else: ?>
                    <li class="active">Quản lý sản phẩm</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" action="<?php echo e(request()->is('Admin/SanPhamm/DaXoa') ? route('SanPham.DaXoa') : route('SanPham.index')); ?>" method="get">
                                    <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm sản phẩm
                                    </a>
                                    <?php if(request()->is('Admin/SanPhamm/DaXoa')): ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('SanPham.DaXoa')); ?>" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Sản phẩm đã xóa
                                        </a>
                                    <?php endif; ?>


                                    <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="<?php echo e($request['TenSanPham']); ?>"
                                        name="TenSanPham" />
                                    <label for=""> Hãng sãn xuất: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="HangSanXuatId">
                                        <option value="">All</option>
                                        <?php $__currentLoopData = $lstHangSanXuat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php if($item->id == $request['HangSanXuatId']): ?> selected <?php endif; ?>>
                                                <?php echo e($item->Ten); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <label for=""> Loại sản phẩm: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="LoaiSanPhamId">
                                        <option value="">All</option>
                                        <?php $__currentLoopData = $lstLoaiSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php if($item->id == $request['LoaiSanPhamId']): ?> selected <?php endif; ?>>
                                                <?php echo e($item->TenLoai); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                    <button type="submit" class="btn btn-purple btn-sm">
                                        Search
                                        <i class="icon-search icon-on-right bigger-110"></i>
                                    </button>
                                    <button type="reset" class="btn btn-sm">
                                        <i class="icon-refresh"></i>
                                        Reset
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng sản phẩm
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-file-text-alt"></i>Mô tả</th>
                                    <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                    <th><i class="icon-money"></i>Giá nhập</th>
                                    <th><i class="icon-money"></i>Giá bán</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-bar-chart"></i>Lượt mua</th>
                                    <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                    <th><i class="icon-android"></i>Loại sản phẩm</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày thêm</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày sửa</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $sanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->TenSanPham); ?></td>
                                        <td><?php echo e($item->MoTa); ?></td>
                                        <td><?php echo e($item->SoLuongTon); ?></td>
                                        <td><?php echo e(number_format($item->GiaNhap)); ?></td>
                                        <td><?php echo e(number_format($item->GiaBan)); ?></td>
                                        <td>
                                            <img src='<?php echo e($item->HinhAnh); ?>' alt="<?php echo e($item->HinhAnh); ?>" width='100' height='100'>
                                        </td>
                                        <td><?php echo e($item->LuotMua); ?></td>
                                        <td><?php echo e($item->HangSanXuat->Ten); ?></td>
                                        <td><?php echo e($item->LoaiSanPham->TenLoai); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <?php if(request()->is('Admin/SanPhamm/DaXoa')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" data-rel="tooltip" title="Khôi phục" data-placement="bottom"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>

                                                    <form id="form" action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="button" class="btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn" data-placement="bottom"><i
                                                                class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    
                                                                    <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>

                                                            <li>
                                                                <form id="form" action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="button" class="tooltip-error btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn"><i
                                                                            class="icon-trash bigger-130"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->id); ?>)" role="button" data-toggle="modal" class="tooltip-info" data-rel="tooltip"
                                                        title="Xem chi tiết">
                                                        <span class="blue">
                                                            <i class="icon-zoom-in bigger-120"></i>
                                                        </span>
                                                    </a>

                                                    <a class="green" href="<?php echo e(route('SanPham.edit', $item)); ?>" data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <form action="<?php echo e(route('SanPham.destroy', $item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                    
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->id); ?>)" role="button" data-toggle="modal" class="tooltip-info"
                                                                    data-rel="tooltip" title="Xem chi tiết">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="<?php echo e(route('SanPham.edit', $item)); ?>" class="tooltip-success" data-rel="tooltip" title="Chỉnh sửa">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="<?php echo e(route('SanPham.destroy', $item)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-120"></i></button>
                                                                </form>
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
                            <h4 class="blue bigger">Thêm sản phẩm</h4>
                        </div>

                        <div class="modal-body overflow-visible">
                            <form class="form-horizontal" role="form" action="<?php echo e(route('SanPham.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <label>Hình ảnh</label>
                                        <input type="file" accept="image/*" name="HinhAnh">
                                        <?php if($errors->has('HinhAnh')): ?>
                                            <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('HinhAnh')); ?></i>
                                        <?php endif; ?>
                                        <label>Excel</label>
                                        <input type="file" accept=".xlsx, .xls, .csv, .ods" name="FileExcel">
                                    </div>

                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon green">
                                                        <i class="icon-coffee"></i>
                                                    </span>
                                                    <textarea class="autosize-transition form-control" placeholder="Nhập tên sản phẩm" name="TenSanPham"><?php echo e(old('TenSanPham')); ?></textarea>
                                                </div>
                                            </div>
                                            <?php if($errors->has('TenSanPham')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('TenSanPham')); ?></i>
                                            <?php endif; ?>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label>Mô tả</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon blue">
                                                        <i class="icon-edit"></i>
                                                    </span>

                                                    <textarea class="autosize-transition form-control" placeholder="Nhập mô tả" name="MoTa"><?php echo e(old('MoTa')); ?></textarea>
                                                </div>
                                            </div>
                                            <?php if($errors->has('MoTa')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('MoTa')); ?></i>
                                            <?php endif; ?>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label>Hãng sản xuất</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon red">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="chosen-select" data-placeholder="" name="HangSanXuatId">
                                                        <option value="">&nbsp;</option>
                                                        <?php $__currentLoopData = $lstHangSanXuat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($item->id == old('HangSanXuatId')): ?> selected <?php endif; ?>>
                                                                <?php echo e($item->Ten); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php if($errors->has('HangSanXuatId')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('HangSanXuatId')); ?></i>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Loại sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon pink">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="chosen-select" data-placeholder="" name="LoaiSanPhamId">
                                                        <option value="">&nbsp;</option>
                                                        <?php $__currentLoopData = $lstLoaiSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($item->id == old('LoaiSanPhamId')): ?> selected <?php endif; ?>>
                                                                <?php echo e($item->TenLoai); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php if($errors->has('LoaiSanPhamId')): ?>
                                                <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('LoaiSanPhamId')); ?></i>
                                            <?php endif; ?>
                                        </div>
                                    </div>
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

            <div id="showModal"></div>
        </div><!-- /.main-content -->

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scriptThisPage'); ?>
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>
        <script src="/storage/assets/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="/storage/assets/js/date-time/bootstrap-timepicker.min.js"></script>
        <script src="/storage/assets/js/date-time/moment.min.js"></script>
        <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
        <script src="/storage/assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="/storage/assets/js/jquery.knob.min.js"></script>
        <script src="/storage/assets/js/jquery.autosize.min.js"></script>
        <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/storage/assets/js/bootstrap-tag.min.js"></script>
        
        <script src="/storage/assets/js/bootbox.min.js"></script>
        
        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'icon-cloud-upload',
                    droppable: true,
                    thumbnail: 'large'
                })

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
            });
        </script>
        
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
        

        
        <script type="text/javascript">
            jQuery(function($) {
                $(".bootbox-options").on(ace.click_event, function() {
                    bootbox.dialog({
                        message: "<span class='bigger-110'>Bạn có chắc chắn muốn xóa vĩnh viễn mục này ??? <i class='icon-exclamation-sign red bigger-130'></i></span>",
                        buttons: {
                            "button": {
                                "label": "Hủy",
                                "className": "btn-sm"
                            },
                            "danger": {
                                "label": "Xác nhận xóa",
                                "className": "btn-sm btn-danger",
                                "callback": function() {
                                    $("#form").submit()
                                }
                            },
                        }
                    });
                });
            });
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
                <?php if(Session::has('SanPhamMoi')): ?>
                    toastr.success("<?php echo e(Session::get('SanPhamMoi')); ?>", "Thành công", {
                    timeOut: 3000
                    });
                <?php endif; ?>
            });
        </script>
        

        <?php echo $__env->make("Admin.SanPham.script.SanPham-show-script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Admin/SanPham/SanPham-index.blade.php ENDPATH**/ ?>