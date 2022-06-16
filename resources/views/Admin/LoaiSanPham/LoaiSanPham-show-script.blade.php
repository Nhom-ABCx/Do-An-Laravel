{{-- <div id="showModal"></div> --}}

{{-- <a href="javascript:void(0)" onclick="showLoaiSanPham()" role="button" data-toggle="modal" class="tooltip-info"
    data-rel="tooltip" title="Xem chi tiết">
    <span class="blue">
        <i class="icon-zoom-in bigger-120"></i>
    </span>
</a> --}}
<script type="text/javascript">
    function showLoaiSanPham(typeShow, loaiSanPhamId) {
        $.ajax({
            //gui di voi phuong thuc' cua Form
            method: "GET",
            //url = duong dan cua form
            url: "{{ route('LoaiSanPham.show', '') }}/" + typeShow + "?LoaiSanPhamId=" + loaiSanPhamId,
            //du lieu gui di
            data: {},
            //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
            processData: false,
            // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la rong~
            contentType: false,
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            //dataType: 'json',
            //truoc khi gui di thi thuc hien gi do', o day chinh modal an? het'
            beforeSend: function() {
                $('#showLoaiSanPham').modal('hide');
            },
            success: function(response) {
                console.log("request ok");
                $('#showModal').html(response);
                $('#showLoaiSanPham').modal('show');
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
</script>
