<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#ChiTietHoaDonNhap').dataTable({
        autoWidth: false, //ko co cai nay` la` no' thu nho? lai max xau'
        ajax: {
            url: "<?php echo e(route('HoaDonNhap.APIChiTiet', $hoaDonNhap)); ?>",
            method: 'GET',
            dataSrc: "", //lay vi tri la rong~ ko phai mac dinh "data"=>[...]
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            dataType: "json",
            // Kiểu nội dung của dữ liệu được gửi lên server.
            contentType: "application/json; charset=utf-8"
        },
        //do du lieu vao cot
        columns: [{
                data: 'c_t__san_pham.id',
                className: "center",
                searchable: false
            },
            {
                data: 'c_t__san_pham.san_pham.TenSanPham'
            },
            {
                data: 'c_t__san_pham.ThuocTinhValue',
                searchable: false
            },
            {
                //render cot hinh anh?
                data: 'c_t__san_pham.san_pham.hinh_anh',
                render: function(data, type, row, meta) {
                    var image = '';
                    data.forEach(function(value, key) {
                        image += '<img src="' + value.HinhAnh + '" width="50px" height="50px">';
                    });
                    return image;
                },
                orderable: false,
                searchable: false
            },
            {
                data: 'SoLuong',
                className: "pink",
                searchable: false
            },

            {
                data: 'GiaNhap',
                className: "pink",
                render: DataTable.render.number(',', '.'),
            },
            {
                data: 'ThanhTien',
                render: DataTable.render.number(',', '.'),
                //render: DataTable.render.number(',', '.', 2, '$'),
            },
            {
                //render tool
                data: 'c_t__san_pham',
                render: function(data, type, row, meta) {
                    return `<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                    <a class="blue" href="javascript:void(0)" onclick="showSanPham(` + data.SanPhamId + `)" role="button" data-toggle="modal" data-rel="tooltip" title="Xem chi tiết">
                        <i class="icon-zoom-in bigger-130"></i>
                    </a>
                    <?php if($hoaDonNhap->TrangThai): ?>
                    <?php else: ?>
                        <a class="red" href="javascript:void(0)" onclick="xoaSanPham(` + data.id + `)" data-rel="tooltip" title="Xóa" data-id="` + data.id + `" id="xoaSanPham">
                            <i class="icon-trash bigger-130"></i>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="inline position-relative">
                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down icon-only bigger-120"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                            <li>
                                <a href="javascript:void(0)" onclick="showSanPham(` + data.SanPhamId + `)" role="button" data-toggle="modal" class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                    <span class="blue">
                                        <i class="icon-zoom-in bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                            <?php if($hoaDonNhap->TrangThai): ?>
                            <?php else: ?>
                                <li>
                                    <a href="javascript:void(0)" onclick="xoaSanPham(` + data.id + `)" class="tooltip-error" data-rel="tooltip" title="Xóa" data-id="` + data.id + `" id="xoaSanPham">
                                        <span class="red">
                                            <i class="icon-trash bigger-120"></i>
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>`;
                },
                orderable: false,
                searchable: false
            },



        ],
        createdRow: function(row, data, rowIndex) {
            //khi tao moi 1 row, them cac thuoc tinh vao cac td
            $.each($('td', row), function(colIndex) {
                console.log(colIndex);
                if (colIndex == 4) {
                    $(this).attr('class', 'SoLuong pink');
                    $(this).attr('data-name', 'SoLuong');
                    $(this).attr('data-pk', data.c_t__san_pham.id);
                }
                if (colIndex == 5) {
                    $(this).attr('class', 'GiaNhap pink');
                    $(this).attr('data-name', 'GiaNhap');
                    $(this).attr('data-pk', data.c_t__san_pham.id);
                }
            });
        },
    });

    <?php if(!$hoaDonNhap->TrangThai): ?>
    function xoaSanPham(id) {
            $.ajax({
                //gui di voi phuong thuc' cua Form
                method: "DELETE",
                //url = duong dan cua form
                url: "<?php echo e(route('HoaDonNhap.XoaSanPham', '')); ?>/" + id,
                //du lieu gui di
                data: {},
                //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                processData: false,
                // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la rong~
                contentType: false,
                //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                //dataType: 'json',
                //truoc khi gui di thi thuc hien gi do', o day chinh loi~ = rong~
                beforeSend: function() {
                    //$(form).find('span.error-text').empty();
                },
                success: function(response) {
                    console.log("request ok");
                    toastr.success("Xóa thành công", 'Thành công', {
                        timeOut: 3000
                    });
                    //reload lại table
                    $('#ChiTietHoaDonNhap').DataTable().ajax.reload();
                    //cap nhat lai TongSoLuong va TongSoLuong, chua xu ly dc
                    $("#TongSoLuong").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                    $("#TongTien").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                },
                error: function(response) {
                    console.log("request lỗi");
                    //console.log(response.responseJSON.Username[0]);
                    $.each(response.responseJSON, function(key, val) {
                        toastr.error(val, 'Có lỗi xảy ra', {
                            timeOut: 3000
                        });
                    });
                },
            });
        }


        $('#ChiTietHoaDonNhap').editable({
            title: 'Nhập số lượng',
            url: "<?php echo e(route('HoaDonNhap.update', $hoaDonNhap)); ?>",
            container: 'body',
            selector: 'td.SoLuong',
            type: 'text',
            send: 'always',
            ajaxOptions: {
                //gui len voi phuong thuc, mac dinh la POST
                type: "PUT",
                //mong muon kieu du lieu tra ve tu sever
                dataType: 'json'
            },
            //name: 'SoLuong',
            validate: function(value) {
                if ($.trim(value) == '')
                    return 'Không được rỗng';
                if ($.isNumeric(value) == '')
                    return 'Nhập số';

            },
            success: function(response) {
                if (response != null) {
                    console.log("request ok");
                    toastr.success("Cập nhật thành công", 'Thành công', {
                        timeOut: 3000
                    });
                    //reload lại table
                    $('#ChiTietHoaDonNhap').DataTable().ajax.reload();
                    //cap nhat lai TongSoLuong va TongSoLuong, chua xu ly dc
                    $("#TongSoLuong").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                    $("#TongTien").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                } else {
                    toastr.warning("Có gì đó xảy ra", 'Cảnh báo', {
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

        $('#ChiTietHoaDonNhap').editable({
            title: 'Nhập giá',
            url: "<?php echo e(route('HoaDonNhap.update', $hoaDonNhap)); ?>",
            container: 'body',
            selector: 'td.GiaNhap',
            type: 'text',
            send: 'always',
            ajaxOptions: {
                //gui len voi phuong thuc, mac dinh la POST
                type: "PUT",
                //mong muon kieu du lieu tra ve tu sever
                dataType: 'json'
            },
            //name: 'SoLuong',
            validate: function(value) {
                if ($.trim(value) == '')
                    return 'Không được rỗng';
                if ($.isNumeric(value) == '')
                    return 'Nhập số';
            },
            success: function(response) {
                if (response != null) {
                    console.log("request ok");
                    toastr.success("Cập nhật thành công", 'Thành công', {
                        timeOut: 3000
                    });
                    //reload lại table
                    $('#ChiTietHoaDonNhap').DataTable().ajax.reload();
                    //cap nhat lai TongSoLuong va TongSoLuong, chua xu ly dc
                    $("#TongSoLuong").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                    $("#TongTien").html('<a href="<?php echo e(url()->current()); ?>"> Đã thay đổi </a>');
                } else {
                    toastr.warning("Có gì đó xảy ra", 'Cảnh báo', {
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
    <?php endif; ?>

    $('table th input:checkbox').on('click', function() {
        var that = this;
        $(this).closest('table').find('tr > td:last-child input:checkbox')
            .each(function(i) {
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

    /////////modal combobox fix
    //chosen plugin inside a modal will have a zero width because the select element is originally hidden
    //and its width cannot be determined.
    //so we set the width after modal is show
    $('#modal-form').on('shown.bs.modal', function() {
        $(this).find('.chosen-container').each(function() {
            $(this).find('a:first-child').css('width', '210px');
            $(this).find('.chosen-drop').css('width', '210px');
            $(this).find('.chosen-search input').css('width', '200px');
        });

        $('#ChonSanPham').DataTable({
            //tap ra ngoai` la se huy cai bang?, de tranh' thong bao'
            destroy: true,
            //viet tat', lay het sanPham, chuyen thanh mang? json dua vo trong javascript
            data: <?php echo json_encode($dsSanPham, 15, 512) ?>,
            //do du lieu vao cot
            columns: [{
                    data: 'id',
                    className: "center",
                    searchable: false
                },
                {
                    data: 'TenSanPham'
                },
                {
                    data: 'SoLuongTon',
                    searchable: false
                },
                {
                    //render cot hinh anh?
                    data: 'HinhAnh',
                    render: function(data, type, row, meta) {
                        return '<img src="' + data + '" height="100" width="100"/>';
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'HangSanXuatId',
                },
                {
                    data: 'LoaiSanPhamId',
                },
                {
                    //render cot checkbox
                    data: "id",
                    className: "center",
                    render: function(data, type, row, meta) {
                        return '<label><input type="checkbox" class="ace" value="' + data + '"/><span class="lbl"></span></label>';
                    },
                    // defaultContent: `<label>
                    //     <input type="checkbox" class="ace" value=""/>
                    //     <span class="lbl"></span>
                    //     </label>`,
                    orderable: false,
                    searchable: false
                },
            ],
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

    });
</script>
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/HoaDon/script/HoaDonNhap-show-script.blade.php ENDPATH**/ ?>