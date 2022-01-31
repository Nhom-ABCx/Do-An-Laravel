{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Chi tiết hóa đơn nhập')

@section('headThisPage')
    {{-- datetime picker --}}
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    {{-- datetime picker end --}}
@endsection

@section('body')
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
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('HoaDonNhap.index') }}">Quản lý hóa đơn nhập</a>
                </li>
                <li class="active">Chi tiết hóa đơn nhập</li>
            </ul><!-- .breadcrumb -->

            {{-- <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search --> --}}
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a data-toggle="tab" href="#ChiTiet">
                                    <i class="green icon-home bigger-150"></i>
                                    Thông tin đơn hàng
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#DanhSachSanPham">
                                    <i class="pink icon-gittip bigger-150"></i>
                                    Danh sách sản phẩm
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="ChiTiet" class="tab-pane in active">
                                <form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-adn red"></i> Mã đơn hàng </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->id }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Người lập </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->NhanVien->HoTen ?? $hoaDonNhap->NhanVien->Username }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Nhà cung cấp </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->NhaCungCap }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-mobile-phone green"></i> Số điện thoại </label>
                                        <label class="col-sm-3"> <b>00000000000</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-calendar purple"></i> Ngày đặt </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->created_at }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-exclamation-sign"></i> Trạng thái </label>
                                        <label class="col-sm-3">
                                            @if ($hoaDonNhap->TrangThai)
                                                <span class="label label-success arrowed-in arrowed-in-right"> Đã thành công</span>
                                            @else
                                                <span class="label arrowed"> Chưa thành công</span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-bar-chart"></i> Tổng số lượng </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->TongSoLuong }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-money red"></i> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b>{{ number_format($hoaDonNhap->TongTien) }} VNĐ</b> </label>
                                    </div>

                                    @if ($hoaDonNhap->TrangThai != 4)
                                        <div class="space-4"></div>

                                        <div class="clearfix form-actions">
                                            <div class="col-md-9">
                                                <button class="btn btn-success" type="button">
                                                    Xác nhận chuyển tiếp trạng thái
                                                    <i class="icon-ok bigger-110"></i>
                                                </button>

                                                <a href="#" class="btn btn-danger">
                                                    Xuất file PDF
                                                    <i class="icon-file-text bigger-110"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- PAGE CONTENT ENDS -->
                                </form>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                <a href="#modal-form" role="button" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-success">
                                    <i class="icon-plus"></i>
                                    Chọn sản phẩm thêm vào
                                </a>

                                <div class="space"></div>

                                <div class="table-responsive">
                                    <table id="ChiTietHoaDonNhap" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i>Id</th>
                                                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                <th><i class="icon-picture"></i>Hình ảnh</th>
                                                <th><i class="icon-bar-chart"></i>Số lượng</th>
                                                <th><i class="icon-money"></i>Giá nhập</th>
                                                <th><i class="icon-bar-chart"></i>Thành tiền</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /span -->
            </div>

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog" style="width: 90%;">
                    <div class="modal-content">
                        <form action="{{ route('HoaDonNhap.ThemSanPham', $hoaDonNhap) }}" method="post" id="submitForm">
                            @csrf
                            {{-- @method("PUT") --}}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">Chọn sản phẩm</h4>
                            </div>

                            <div class="modal-body overflow-visible">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table id="ChonSanPham" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                    <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                                    <th><i class="icon-picture"></i>Hình ảnh</th>
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
        </div><!-- /.main-content -->

    @endsection

    @section('scriptThisPage')
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        {{-- datetime picker` --}}
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        <script src="/storage/assets/js/date-time/moment.min.js"></script>
        <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
        <script src="/storage/assets/js/jquery.autosize.min.js"></script>
        <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>

        <script type="text/javascript">
            $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
                $(this).next().focus();
            });
        </script>
        {{-- end datetime picker --}}
        <!-- inline scripts related to this page -->
        {{-- datatable script --}}
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery(function($) {
                $('#ChiTietHoaDonNhap').dataTable({
                    autoWidth: false, //ko co cai nay` la` no' thu nho? lai max xau'
                    ajax: {
                        url: "{{ route('HoaDonNhap.APIChiTiet', $hoaDonNhap) }}",
                        method: 'GET',
                        dataSrc: "" //lay vi tri la rong~ ko phai mac dinh "data"=>[...]
                    },
                    //do du lieu vao cot
                    columns: [{
                            data: 'san_pham.id',
                            className: "center",
                            searchable: false
                        },
                        {
                            data: 'san_pham.TenSanPham'
                        },
                        {
                            //render cot hinh anh?
                            data: 'san_pham.HinhAnh',
                            render: function(data, type, row, meta) {
                                return '<img src="' + data + '" height="100" width="100"/>';
                            },
                            searchable: false
                        },
                        {
                            data: 'SoLuong',
                            className: "green",
                            searchable: false
                        },
                        {
                            data: 'GiaNhap',
                            className: "green",
                            render: DataTable.render.number(',', '.'),
                        },
                        {
                            data: 'ThanhTien',
                            render: DataTable.render.number(',', '.'),
                            //render: DataTable.render.number(',', '.', 2, '$'),
                        },
                    ],
                });

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
            })
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
            data: @json($dsSanPham),
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
        {{-- datatable script End --}}
    @endsection
