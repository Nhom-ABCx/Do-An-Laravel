


<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý đánh giá sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">

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
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                    <th><i class="icon-android"></i>Loại sản phẩm</th>
                                    <th><i class="icon-android"></i>Trung bình đánh giá</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $sanPhamSao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->TenSanPham); ?></td>

                                        <td>
                                            <img src='<?php echo e($item->HinhAnh); ?>' alt="<?php echo e($item->HinhAnh); ?>" width='100'
                                                height='100'>
                                        </td>
                                        <td><?php echo e($item->HangSanXuat->Ten); ?></td>
                                        <td><?php echo e($item->LoaiSanPham->TenLoai); ?></td>
                                        <td><?php echo e($item->Star); ?></td>
                                        
                                        <?php if(request()->is('SanPhamm/DaXoa')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>

                                                    <form id="form" action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="button" class="btn-link red bootbox-options"
                                                            title="Xóa vĩnh viễn"><i
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
                                                                <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>"
                                                                    method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    
                                                                    <button type="submit"
                                                                        class="tooltip-error btn-link blue"
                                                                        data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>

                                                            <li>
                                                                <form id="form"
                                                                    action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>"
                                                                    method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="button"
                                                                        class="tooltip-error btn-link red bootbox-options"
                                                                        data-rel="tooltip" title="Xóa vĩnh viễn"><i
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
                                                    <a class="blue" href="#">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>

                                                    <a class="green" href="<?php echo e(route('SanPham.edit', $item)); ?>"
                                                        data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <form action="<?php echo e(route('SanPham.destroy', $item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" data-rel="tooltip"
                                                            title="Xóa"><i class="icon-trash bigger-130"></i></button>
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
                                                                <a href="<?php echo e(route('SanPham.edit', $item)); ?>"
                                                                    class="tooltip-success" data-rel="tooltip"
                                                                    title="Chỉnh sửa">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="<?php echo e(route('SanPham.destroy', $item)); ?>"
                                                                    method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="tooltip-error btn-link red"
                                                                        data-rel="tooltip" title="Xóa"><i
                                                                            class="icon-trash bigger-120"></i></button>
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
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/SanPham/SanPham-sao.blade.php ENDPATH**/ ?>