<?php $__env->startSection('title', 'QL bình luận'); ?>

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
                <li class="active">Bình Luận</li>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Bình luận </h3>


                            <form class="form-inline"
                                action="<?php echo e(request()->is('BinhLuann/DaXoa') ? route('BinhLuan.DaXoa') : route('BinhLuan.index')); ?>"
                                method="get">

                                <?php if(request()->is('BinhLuann/DaXoa')): ?>
                                    <a class="btn btn-success" href="<?php echo e(route('BinhLuan.index')); ?>"> Black</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('BinhLuan.DaXoa')); ?>" class="btn btn-inverse">
                                        <i class="icon-trash"></i>
                                        Bình luận đã xoá
                                    </a>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng bình luận
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">Id</th>
                                    <th>Nội dung</th>
                                    <th>Khách hàng </th>
                                    <th>Sản phẩm</th>

                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Create-at
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Update-at
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Deleted-at
                                    </th>
                                    <th> </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $__currentLoopData = $bLuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->NoiDung); ?></td>
                                        <td><?php echo e($item->KhachHang->Username); ?></td>
                                        <td><?php echo e($item->SanPham->TenSanPham); ?>

                                            <img src='/storage/assets/images/product-image/<?php echo e($item->SanPham->HinhAnh); ?>'
                                                alt="<?php echo e($item->SanPham->HinhAnh); ?>" width='50' height='50'>
                                        </td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <td><?php echo e($item->deleted_at); ?></td>

                                        <?php if(request()->is('BinhLuann/DaXoa')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('BinhLuan.KhoiPhuc', $item->id)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>
                                            </td>


                                        <?php else: ?>
                                            <td>
                                                <form action="<?php echo e(route('BinhLuan.destroy', $item)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn-link red"><i
                                                            class="icon-trash bigger-130"></i></button>
                                                </form>
                                            </td>


                                        <?php endif; ?>


                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null,
                    {
                        "bSortable": false
                    }, //mota
                    null,
                    null, null, null,
                    //hinh anh
                    null, {
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
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/Admin/BinhLuan/binh-luan-index.blade.php ENDPATH**/ ?>