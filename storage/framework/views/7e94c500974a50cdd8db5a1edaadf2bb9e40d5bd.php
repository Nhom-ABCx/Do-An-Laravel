<?php $__env->startSection('title', 'QL loại sản phẩm'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                    <li>
                        <a href="<?php echo e(route('LoaiSanPham.index')); ?>">Quản lý loại sản phẩm</a>
                    </li>
                    <li class="active">Đã xóa</li>
                <?php else: ?>
                    <li class="active">Quản lý loại sản phẩm</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm đã xoá</h3>
                            <?php else: ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm</h3>
                            <?php endif; ?>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" action="<?php echo e(URL::current() == route('LoaiSanPham.DaXoa') ? route('LoaiSanPham.DaXoa') : route('LoaiSanPham.index')); ?>" method="get">

                                    <a href="javascript:void(0)" onclick="showLoaiSanPham('Store',-1)" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm loại sản phẩm
                                    </a>

                                    <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('LoaiSanPham.DaXoa')); ?>" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Loại sản phẩm đã xóa
                                        </a>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng loại sản phẩm
                        <form class="form-inline" action="<?php echo e(URL::current() == route('LoaiSanPham.DaXoa') ? route('LoaiSanPham.DaXoa') : route('LoaiSanPham.index')); ?>" method="get">
                            <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="<?php echo e($request['Ten']); ?>"
                                name="Ten" />

                            <button type="submit" class="btn btn-purple btn-sm">
                                Tìm kiếm
                                <i class="icon-search icon-on-right bigger-110"></i>
                            </button>
                            <button type="reset" class="btn btn-sm">
                                <i class="icon-refresh"></i>
                                Reset
                            </button>
                        </form>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-key "></i> ##</th>
                                    <th><i class="fa fa-align-left"></i> Tên loại</th>
                                    <th><i class="fa fa-file-text-o"></i> Mô tả</th>
                                    <th><i class="icon-cogs"></i> Icon</th>
                                    <th><i class="fa fa-pencil"></i> parent</th>
                                    <th><i class="fa fa-pencil"></i> Ngày tạo</th>
                                    <th><i class="fa fa-check-square-o"></i> Ngày cập nhật</th>
                                    <th><i class="fa fa-trash"></i> Ngày xoá</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $loaiSp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->TenLoai); ?></td>
                                        <td><?php echo e($item->MoTa); ?></td>
                                        <td style="width: 10px" class="center"><?php echo $item->Icon['iconHtml'] ?? ''; ?></td>
                                        <td><?php echo e($item->parent_id); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <td><?php echo e($item->deleted_at); ?></td>
                                        <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('LoaiSanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="green" href="javascript:void(0)" onclick="showLoaiSanPham('Edit',<?php echo e($item->id); ?>)" title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('LoaiSanPham.destroy', $item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" title="Xoá"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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


                    <div class="hr hr-24"></div>

                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">All Icons</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="tooltip-success" data-rel="tooltip" data-placement="top" title="<?php echo e($icon['iconName']); ?>">
                                        <?php echo $icon['iconHtml']; ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    
    <script src="/storage/assets/js/bootbox.min.js"></script>
    

    <!-- inline scripts related to this page -->

    
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [{
                        "type": "num"
                    }, null,
                    {
                        "bSortable": false
                    }, //mota
                    {
                        "bSortable": false
                    }, //icon
                    null, null, null, null,
                    {
                        "bSortable": false
                    }, //hinh anh

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


            $('[data-rel="tooltip"]').tooltip();

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


        <?php if($errors->any()): ?>
            $('#showLoaiSanPham').modal('show');
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error('<?php echo e($error); ?>', 'Có lỗi xảy ra', {
                    timeOut: 3000
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(Session::has('themMoi')): ?>
            toastr.success("<?php echo e(Session::get('themMoi')); ?>", "Thành công", {
                timeOut: 3000
            });
        <?php endif; ?>
    </script>
    
    <?php echo $__env->make('Admin.LoaiSanPham.LoaiSanPham-show-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/LoaiSanPham/LoaiSanPham-index.blade.php ENDPATH**/ ?>