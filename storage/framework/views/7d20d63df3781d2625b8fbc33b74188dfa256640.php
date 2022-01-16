
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
                <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Create_at
                </th>
                <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Update_at
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
                    <?php if(request()->is('SanPhamm/DaXoa')): ?>
                        <td>
                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
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
                                            <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
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
                                <a class="blue" href="#">
                                    <i class="icon-zoom-in bigger-130"></i>
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
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
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
                                                <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Xóa"><i
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
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/layouts/Table-SanPham.blade.php ENDPATH**/ ?>