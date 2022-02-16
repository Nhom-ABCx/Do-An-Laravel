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
                                <div class="form-horizontal">
                                    @csrf
                                    @method('PATCH')
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
                                        <label class="col-sm-3"> <b>{{ $hoaDonNhap->Phone }}</b> </label>
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
                                        <label class="col-sm-3"> <b id="TongSoLuong">{{ $hoaDonNhap->TongSoLuong }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-money red"></i> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b id="TongTien">{{ number_format($hoaDonNhap->TongTien) }} VNĐ</b> </label>
                                    </div>

                                    @if (!$hoaDonNhap->TrangThai)
                                        <div class="space-4"></div>

                                        <div class="clearfix form-actions">
                                            <div class="col-md-9">
                                                <form action="{{ route('HoaDonNhap.destroy', $hoaDonNhap) }}" method="post" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hủy   <i class="icon-trash bigger-130"></i></button>
                                                </form>

                                                <form class="form-horizontal" role="form" action="{{ route('HoaDonNhap.CapNhatTrangThai', $hoaDonNhap) }}" method="post" enctype="multipart/form-data"
                                                    style="display: inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-success" type="submit">
                                                        Xác nhận hóa đơn
                                                        <i class="icon-ok bigger-110"></i>
                                                    </button>
                                                </form>

                                                {{-- <a href="#" class="btn btn-info">
                                                    Xuất file PDF
                                                    <i class="icon-file-text bigger-110"></i>
                                                </a> --}}
                                            </div>
                                        </div>
                                    @endif
                                    <!-- PAGE CONTENT ENDS -->
                                </div>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                @if ($hoaDonNhap->TrangThai)
                                @else
                                    <a href="#modal-form" role="button" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Chọn sản phẩm thêm vào
                                    </a>

                                    <div class="space"></div>
                                @endif

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
                                                <th></th>
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

            <div id="showModal"></div>
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
        @include("HoaDon.script.HoaDonNhap-show-script")
        {{-- datatable script End --}}
        @include("SanPham.script.SanPham-show-script")
    @endsection
