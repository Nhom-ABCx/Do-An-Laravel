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
                            <table id="tableChiTietSanPham" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="center"><i class="icon-adn"></i>Id</th>
                                        <th><i class="icon-align-left"></i>Mã sản phẩm</th>
                                        <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                        <th><i class="icon-file-text-alt"></i>Thuộc tính</th>
                                        <th><i class="icon-money"></i>Giá nhập</th>
                                        <th><i class="icon-money"></i>Giá bán</th>
                                        <th class="center">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $ctSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="center"><?php echo e($item->id); ?></td>
                                            <td><?php echo e($item->MaSanPham); ?></td>
                                            <td><?php echo e($item->SoLuongTon); ?></td>
                                            <td><?php echo e(collect($item->ThuocTinhValue)->join(', ')); ?></td>
                                            <td><?php echo e($item->GiaNhap); ?></td>
                                            <td><?php echo e($item->GiaBan); ?></td>
                                            <td class="center"><input type="checkbox" class="ace" value="<?php echo e($item->id); ?>" /><span class="lbl"></span></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
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
<script type="text/javascript">
    $('#tableChiTietSanPham').dataTable({
        "aoColumns": [{
            "type": "num"
        }, {
            "bSortable": false
        }, null, null, null, null, {
            "bSortable": false
        }]
    });


    $('table th input:checkbox').on('click', function() {
        var that = this;
        $(this).closest('table').find('tr > td:last-child input:checkbox')
            .each(function(i) {
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
    });


    $('#submitForm').on('submit', function(e) {
        //ngan chan form gui di
        e.preventDefault();
        let form = this;

        //lay het tat ca san pham da check
        var dsSPCheck = [];
        $('tbody input[type=checkbox]:checked').each(function(i) {
            dsSPCheck[i] = $(this).val();
        });

        $.ajax({
            //gui di voi phuong thuc' cua Form
            method: $(form).attr('method'),
            //url = duong dan cua form
            url: $(form).attr('action'),
            //du lieu gui di
            data: JSON.stringify({
                "SanPhamId": dsSPCheck
            }),
            //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
            processData: false,
            // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la json nen de la json
            contentType: "application/json; charset=utf-8",
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            //dataType: 'json',
            //truoc khi gui di thi thuc hien gi do', o day chinh loi~ = rong~
            beforeSend: function() {
                //$(form).find('span.error-text').empty();
            },
            success: function(response) {
                if (response.length != 0) {
                    console.log("request ok");
                    $('#modal-form').modal('hide');
                    $('#ChonChiTietSanPham').modal('hide');
                    toastr.success("Thêm sản phẩm " + dsSPCheck, 'Thành công', {
                        timeOut: 3000
                    });
                    //reload lại table
                    $('#ChiTietHoaDonNhap').DataTable().ajax.reload()
                } else {
                    toastr.warning("Không có sản phẩm nào được thêm", 'Cảnh báo', {
                        timeOut: 3000
                    });
                }
            },
            error: function(response) {
                console.log("request lỗi");
                //console.log(response.responseJSON.Username[0]);
                $.each(response.responseJSON, function(key, val) {
                    toastr.error(val[0], 'Có lỗi xảy ra', {
                        timeOut: 3000
                    });
                });
            },
        });
    });
</script>
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/HoaDon/HoaDonNhap-show-modal.blade.php ENDPATH**/ ?>