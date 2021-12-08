<?php $__env->startSection('title', 'QL Sản phẩm'); ?>

<?php $__env->startSection('body'); ?>

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li class="active">Quản lý sản phẩm</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
    </div>

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                <h3 class="header smaller lighter blue">Quản lý sản phẩm</h3>

                <a href="<?php echo e(route('SanPham.create')); ?>" class="btn btn-success">
                    <i class="icon-plus"></i>
                    Thêm sản phẩm
                </a>

                <div class="hr hr-24"></div>

                <div class="table-header">
                    Bảng sản phẩm
                </div>

                <div class="table-responsive">
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">Id</th>
                                <th>TenSanPham</th>
                                <th>MoTa</th>
                                <th>SoLuongTon</th>
                                <th>GiaNhap</th>
                                <th>GiaBan</th>
                                <th>HinhAnh</th>
                                <th>LuotMua</th>
                                <th>HangSanXuatId</th>
                                <th>LoaiSanPhamId</th>
                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>
                                    Create_at
                                </th>
                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>
                                    Update_at
                                </th>
                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>
                                    Deleted_at
                                </th>
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
                                <td><?php echo e($item->GiaNhap); ?></td>
                                <td><?php echo e($item->GiaBan); ?></td>
                                <td>
                                    <img src='<?php echo e($item->HinhAnh); ?>' alt="<?php echo e($item->HinhAnh); ?>" width='100' height='100'>
                                </td>
                                <td><?php echo e($item->LuotMua); ?></td>
                                <td><?php echo e($item->HangSanXuat->Ten); ?></td>
                                <td><?php echo e($item->LoaiSanPham->TenLoai); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td><?php echo e($item->updated_at); ?></td>
                                <td><?php echo e($item->deleted_at); ?></td>

                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="#">
                                            <i class="icon-zoom-in bigger-130"></i>
                                        </a>

                                        <a class="green" href="<?php echo e(route('SanPham.edit',$item)); ?>">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <form action="<?php echo e(route('SanPham.destroy',$item)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn-link red"><i class="icon-trash bigger-130"></i></button>
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
                                                    <a href="<?php echo e(route('SanPham.edit',$item)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="icon-edit bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <form action="<?php echo e(route('SanPham.destroy',$item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Delete"><i class="icon-trash bigger-120"></i></button>
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

<?php $__env->startSection("scriptThisPage"); ?>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function($) {
        var oTable1 = $('#sample-table-2').dataTable( {
        "aoColumns": [
          null,null,
          { "bSortable": false }, //mota
          null, null,null,
          { "bSortable": false }, //hinh anh
          null, null,null,null,null,null,
          { "bSortable": false }
        ] } );


        $('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});

		});


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/SanPham/SanPham-index.blade.php ENDPATH**/ ?>