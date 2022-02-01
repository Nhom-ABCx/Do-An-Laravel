


<script type="text/javascript">
    function showSanPham(id) {
        $.ajax({
            //gui di voi phuong thuc' cua Form
            method: "GET",
            //url = duong dan cua form
            url: "<?php echo e(route('SanPham.show', '')); ?>/" + id,
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
                $('#showSanPham').modal('hide');
            },
            success: function(response) {
                console.log("request ok");
                $('#showModal').html(response);
                $('#showSanPham').modal('show');
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
<?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/SanPham/script/SanPham-show-script.blade.php ENDPATH**/ ?>