<div id="ChonChiTietSanPham" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width: 90%;">
        <div class="modal-content">
            <form action="<?php echo e(route('HoaDonNhap.ThemSanPham', $hoaDonNhap)); ?>" method="post" id="submitForm">
                <?php echo csrf_field(); ?>
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="blue bigger">Chọn chi tiết sản phẩm</h4>
                </div>

                <div class="modal-body overflow-visible">
                    <div class="row">
                        <div class="table-responsive">
                            <table id="aaa" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="center"><i class="icon-adn"></i>Id</th>
                                        <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                        <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                        <th style="width: 175px"><i class="icon-picture"></i>Hình ảnh</th>
                                        <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                        <th><i class="icon-android"></i>Loại sản phẩm</th>
                                        <th class="center">
                                            <label>
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
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
                        OK
                    </button>
                </div>
            </form>
        </div>
    </div>

</div><!-- /.page-content -->
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/HoaDon/HoaDonNhap-show-modal.blade.php ENDPATH**/ ?>