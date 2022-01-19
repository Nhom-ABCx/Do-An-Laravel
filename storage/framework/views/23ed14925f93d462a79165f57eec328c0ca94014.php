


<?php $__env->startSection('title', 'QL loại sản phẩm'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
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
                <?php if(request()->is('LoaiSanPhamm/DaXoa')): ?>
                    <li>
                        Loại sản phẩm đã xoá
                    </li>

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
                            <?php if(request()->is('LoaiSanPhamm/DaXoa')): ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm đã xoá</h3>
                            <?php else: ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm</h3>
                            <?php endif; ?>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline"
                                    action="<?php echo e(request()->is('LoaiSanPhamm/DaXoa') ? route('LoaiSanPham.DaXoa') : route('LoaiSanPham.index')); ?>"
                                    method="get">

                                    <?php if(request()->is('LoaiSanPhamm/DaXoa')): ?>
                                        <a href="<?php echo e(route('LoaiSanPham.index')); ?>" class="btn btn-inverse">Back</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('LoaiSanPham.create')); ?>" class="btn btn-success">
                                            <i class="icon-plus"></i>
                                            Thêm loại sản phẩm
                                        </a>
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
                    </div>
                    
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-key "></i>
                                        ##
                                    </th>

                                    <th>
                                        <i class="fa fa-align-left"></i>
                                        Tên loại
                                    </th>

                                    <th>
                                        <i class="fa fa-file-text-o"></i>
                                        Mô tả
                                    </th>
                                    <th>
                                        <i class="fa fa-pencil"></i>
                                        created_att
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        updated_at
                                    </th>
                                    <th>
                                        <i class="fa fa-trash"></i>
                                        deleted_at
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $loaiSp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->TenLoai); ?></td>
                                        <td><?php echo e($item->MoTa); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <td><?php echo e($item->deleted_at); ?></td>
                                        <?php if(request()->is('LoaiSanPhamm/DaXoa')): ?>
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('LoaiSanPham.KhoiPhuc', $item->id)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="fa fa-plus"></i>
                                                    </a>

                                                    <a class="green"
                                                        href="<?php echo e(route('LoaiSanPham.edit', $item)); ?>" title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('LoaiSanPham.destroy', $item)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" title="Xoá"><i
                                                                class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul
                                                            class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                    title="View">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                    title="Edit">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                    title="Delete">
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
                </div>
            </div>

        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>

    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    
    <script src="/storage/assets/js/bootbox.min.js"></script>
    

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
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/LoaiSanPham/LoaiSanPham-index.blade.php ENDPATH**/ ?>