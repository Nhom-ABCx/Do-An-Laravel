
<div id="showSanPham" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width: 53%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Thông tin sản phẩm</h4>
            </div>
            <div class="modal-body overflow-visible">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">

                        <label>Hình ảnh</label>
                        <div class="space"></div>
                        <img src="<?php echo e($sanPham->HinhAnh); ?>" style="width: 100%" />
                    </div>

                    <div class="col-xs-12 col-sm-7">
                        <div class="form-group">
                            <label>Sản phẩm</label>

                            <div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="icon-coffee"></i>
                                    </span>

                                    <textarea class="autosize-transition form-control" style="font-weight: bold;" readonly><?php echo e($sanPham->TenSanPham); ?></textarea>
                                </div>
                            </div>
                        </div>

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
                            <label>Số lượng tồn</label>
                            <label style="float: right">Tổng lượt mua</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->SoLuongTon); ?>"/>
                                    <i class="icon-bar-chart pink"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->LuotMua); ?>" />
                                    <i class="icon-leaf green"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Giá nhập</label>
                            <label style="float: right">Giá bán</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="<?php echo e(number_format($sanPham->GiaNhap)); ?>" />
                                    <i class="icon-credit-card red"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e(number_format($sanPham->GiaBan)); ?>" />
                                    <i class="icon-money blue"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Hãng sản xuất</label>
                            <label style="float: right">Loại sản phẩm</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->HangSanXuat->Ten); ?>" />
                                    <i class="icon-apple blue"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="<?php echo e($sanPham->LoaiSanPham->TenLoai); ?>" />
                                    <i class="icon-android green"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Ngày tạo</label>

                            <div>
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
</div>
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/SanPham/SanPham-show-modal.blade.php ENDPATH**/ ?>