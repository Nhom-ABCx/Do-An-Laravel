


<?php $__env->startSection('title', 'Page Title'); ?>

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
                    <a href="#">Home</a>
                </li>

                <li class="active">Khách Hàng</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>
        <div class="col-xs-12">
            <h3 class="header smaller lighter blue">Khách hàng</h3>
            <div class="page-content">
                <div class="row">
                    <form class="form-inline"
                        action="<?php echo e(request()->is('KhuyenMaii/DaXoa') ? route('KhuyenMai.DaXoa') : route('KhuyenMai.index')); ?>"
                        method="get">

                        <?php if(request()->is('KhuyenMaii/DaXoa')): ?>
                            <a class="btn btn-inverse" href="<?php echo e(route('KhuyenMai.index')); ?>"> Black</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('KhuyenMai.DaXoa')); ?>" class="btn btn-inverse">
                                <i class="icon-trash"></i>
                                Danh sách đen
                            </a>
                        <?php endif; ?>
                    </form>

                    <hr>
                    <div class="table-header">
                        Bảng Chương Trình Khuyến mãi
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-align-left"></i>
                                        Username
                                    </th>

                                    <th>
                                        <i class="fa fa-file-text-o"></i>
                                        Email
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar"></i>
                                        Phone
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar-check-o"></i>
                                        Mật khẩu
                                    </th>
                                    <th>
                                        <i class="fa fa-pencil"></i>
                                        Họ tên
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Ngày sinh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Giới tính
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Hình ảnh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        create at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        update at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        delete at
                                    </th>
                                    
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                
                                <?php $__currentLoopData = $khachHang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->Username); ?></td>
                                        <td><?php echo e($item->Email); ?></td>
                                        <td><?php echo e($item->Phone); ?></td>
                                        <td><?php echo e($item->MatKhau); ?></td>
                                        <td><?php echo e($item->HoTen); ?></td>
                                        <td><?php echo e($item->NgaySinh); ?></td>
                                        <td><?php echo e($item->GioiTinh); ?></td>
                                        <td><?php echo e($item->DiaChi); ?></td>
                                        <td><?php echo e($item->HinhAnh); ?></td>
                                        <td><?php echo e($item->MatKhau); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        
                                        <?php if(request()->is('KhuyenMaii/DaXoa')): ?>
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('KhuyenMai.KhoiPhuc', $item->id)); ?>"
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

                                                    <a class="green" href="<?php echo e(route('KhuyenMai.edit', $item)); ?>"
                                                        title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('KhuyenMai.destroy', $item)); ?>" method="post">
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
        </div>
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/KhachHang/KhachHang-index.blade.php ENDPATH**/ ?>