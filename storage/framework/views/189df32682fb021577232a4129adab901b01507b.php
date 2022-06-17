<div id="showSanPham" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width: 53%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?php echo e($sanPham->TenSanPham); ?></h4>
            </div>
            <div class="modal-body overflow-visible">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">

                        <label>Hình ảnh</label>
                        <div class="space"></div>
                        <?php $__currentLoopData = $sanPham->HinhAnh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hinhAnh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src='<?php echo e($hinhAnh->HinhAnh); ?>' width='130' height='130'>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="space"></div>
                        <label>Thuộc tính: <?php echo e(collect($sanPham->ThuocTinhToHop)->join(' | ')); ?></label>
                        
                        <label>Xuất ra các tổ hợp sản phẩm như tgdd</label>
                    </div>

                    <div class="col-xs-12 col-sm-7">
                        <div class="form-group">
                            <label>Mô tả</label>

                            <div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="icon-edit"></i>
                                    </span>

                                    <textarea class="autosize-transition form-control" style="font-weight: bold;" readonly><?php echo e($sanPham->MoTa); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Hãng sản xuất</label>
                            <label style="float: right">Loại sản phẩm</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->HangSanXuat->TenHangSanXuat); ?>" />
                                    <i class="icon-dashboard pink"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->LoaiSanPham->TenLoai); ?>" />
                                    <i class="icon-gamepad orange"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tổng số lượng tồn</label>
                            <label style="float: right">Tổng lượt mua</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->tongSoLuongTon()); ?>" />
                                    <i class="icon-bar-chart pink"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->LuotMua); ?>" />
                                    <i class="icon-leaf green"></i>
                                </span>
                            </div>
                        </div>

                        

                        <label>Thuộc tính</label>
                        <?php $__currentLoopData = $sanPham->ThuocTinh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input class="input-medium" style="font-weight: bold;" readonly type="text" value="<?php echo e($key); ?>" />
                                    <i class="icon-apple blue"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-xlarge" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e($value); ?>" title="<?php echo e($value); ?>" />
                                    <i class="icon-android green"></i>
                                </span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group">
                            <label>Ngày tạo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <input class="form-control" style="font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->created_at); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/SanPham/SanPham-show-modal.blade.php ENDPATH**/ ?>