{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Chi tiết hóa đơn')

@section('headThisPage')

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
                    <a href="{{ route('HoaDon.index') }}">Quản lý hóa đơn</a>
                </li>
                <li class="active">Chi tiết hóa đơn</li>
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

                            <li>
                                <a data-toggle="tab" href="#LichSuVanChuyen">
                                    <i class="blue icon-archive bigger-150"></i>
                                    Lịch sử vận chuyển
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="ChiTiet" class="tab-pane in active">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-adn red"></i> Mã đơn hàng </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->id }}</b> </label>

                                        <label class="col-sm-2" for="form-field-1"><i class="icon-female pink"></i> Người vận chuyển lần cuối </label>
                                        <label class="col-sm-5"> <b>{{ $hoaDon->LichSuVanChuyen->last()->NguoiVanChuyen->HoTen ?? '' }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Khách hàng </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->DiaChi->KhachHang->HoTen ?? $hoaDon->DiaChi->KhachHang->Username }}</b> </label>

                                        <label class="col-sm-2" for="form-field-1"><i class="icon-fighter-jet blue"></i> Trạng thái vận chuyển </label>
                                        <label class="col-sm-5">
                                            <b>
                                                @switch($hoaDon->LichSuVanChuyen->last()->TrangThai??-1)
                                                    @case(0)
                                                        <span class="label arrowed">Chưa thành công</span>
                                                    @break
                                                    @case(1)
                                                        <span class="label label-success arrowed-in arrowed-in-right">Thành công</span>
                                                    @break
                                                    @default
                                                        Chưa giao
                                                @endswitch
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-user blue"></i> Người nhận dùm </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->DiaChi->TenNguoiNhan }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-location-arrow purple"></i> Địa chỉ giao </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->DiaChi->DiaChiChiTiet }}
                                                @if (!empty($hoaDon->DiaChi->PhuongXa))
                                                    , {{ $hoaDon->DiaChi->PhuongXa }}
                                                @endif
                                                @if (!empty($hoaDon->DiaChi->QuanHuyen))
                                                    , {{ $hoaDon->DiaChi->QuanHuyen }}
                                                @endif
                                                @if (!empty($hoaDon->DiaChi->TinhThanhPho))
                                                    , {{ $hoaDon->DiaChi->TinhThanhPho }}
                                                @endif
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-mobile-phone green"></i> Số điện thoại </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->DiaChi->Phone }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-credit-card green"></i> Phương thức thanh toán </label>
                                        <label class="col-sm-3">
                                            <b>
                                                @switch($hoaDon->PhuongThucThanhToan)
                                                    @case(1)
                                                        Thanh toán khi nhận hàng
                                                    @break
                                                    @case(2)
                                                        Thẻ tín dụng
                                                    @break
                                                    @case(3)
                                                        MOMO
                                                    @break
                                                    @case(4)
                                                        ViettelPay
                                                    @break
                                                    @case(5)
                                                        ZaloPay
                                                    @break
                                                    @default
                                                @endswitch
                                            </b>
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-calendar purple"></i> Ngày đặt </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->created_at }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-exclamation-sign"></i> Trạng thái </label>
                                        <label class="col-sm-3">
                                            @switch($hoaDon->TrangThai)
                                                @case(App\Enums\TrangThaiHD::DangXacNhan)
                                                    <span class="label label-danger arrowed">{{ App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangXacNhan) }}</span>
                                                @break
                                                @case(App\Enums\TrangThaiHD::DangXuLy)
                                                    <span class="label arrowed">{{ App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangXuLy) }}</span>
                                                @break
                                                @case(App\Enums\TrangThaiHD::DaXuLy)
                                                    <span class="label label-info arrowed-right arrowed-in">{{ App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DaXuLy) }}</span>
                                                @break
                                                @case(App\Enums\TrangThaiHD::DangGiao)
                                                    <span class="label label-warning arrowed arrowed-right">{{ App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DangGiao) }}</span>
                                                @break
                                                @case(App\Enums\TrangThaiHD::DaGiao)
                                                    <span class="label label-success arrowed-in arrowed-in-right">{{ App\Enums\TrangThaiHD::getDescription(App\Enums\TrangThaiHD::DaGiao) }}</span>
                                                @break
                                                @default
                                            @endswitch
                                        </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-bar-chart"></i> Tổng số lượng </label>
                                        <label class="col-sm-3"> <b>{{ $hoaDon->TongSoLuong }}</b> </label>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2" for="form-field-1"><i class="icon-money red"></i> Tổng thanh toán </label>
                                        <label class="col-sm-3"> <b>{{ number_format($hoaDon->TongTien) }} VNĐ</b> </label>
                                    </div>

                                    @if ($hoaDon->TrangThai != App\Enums\TrangThaiHD::DaGiao)
                                        <div class="space-4"></div>

                                        <div class="clearfix form-actions">
                                            <div class="col-md-9">
                                                <form action="{{ route('HoaDon.destroy', $hoaDon) }}" method="post" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hủy   <i class="icon-trash bigger-130"></i></button>
                                                </form>

                                                <form action="{{ route('HoaDon.update', $hoaDon) }}" method="post" style="display: inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success" type="submit">
                                                        Xác nhận chuyển tiếp trạng thái   
                                                        <i class="icon-ok bigger-110"></i>
                                                    </button>
                                                </form>

                                                <a href="{{ route('HoaDon.PDF', $hoaDon) }}" class="btn btn-info">
                                                    Xuất file PDF   
                                                    <i class="icon-file-text bigger-110"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- PAGE CONTENT ENDS -->
                                </div>
                            </div>

                            <div id="DanhSachSanPham" class="tab-pane">
                                <p><i class="icon-ok bigger-110 green"></i> Giá bán ra = Giá gốc - Giá đang khuyến mãi</p>
                                <p><i class="icon-ok bigger-110 green"></i> Thành tiền = Số lượng * (Giá bán - Giá giảm voucher)</p>
                                <div class="table-responsive">
                                    <table id="chi-tiet-san-pham" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i>Id</th>
                                                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                                <th><i class="icon-picture"></i>Hình ảnh</th>
                                                <th><i class="icon-bar-chart"></i>Số lượng</th>
                                                <th><i class="icon-money"></i>Giá gốc</th>
                                                <th><i class="icon-money"></i>Giá đang khuyến mãi</th>
                                                <th><i class="icon-money"></i>Giá bán ra</th>
                                                <th><i class="icon-money"></i>Giá giảm voucher</th>
                                                <th><i class="icon-bar-chart"></i>Thành tiền</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($dsChiTietHD as $item)
                                                @php
                                                    App\Http\Controllers\SanPhamController::fixImage($item->SanPham);
                                                @endphp
                                                <tr>
                                                    <td class="center">{{ $item->SanPham->id }}</td>
                                                    <td>{{ $item->SanPham->TenSanPham }}</td>
                                                    <td>
                                                        <img src='{{ $item->SanPham->HinhAnh }}' alt="{{ $item->SanPham->HinhAnh }}" width='100' height='100'>
                                                    </td>
                                                    <td>{{ $item->SoLuong }}</td>
                                                    <td>{{ number_format($item->SanPham->GiaBan) }}</td>
                                                    <td>{{ count($item->SanPham->CTChuongTrinhKM)? number_format($item->SanPham->CTChuongTrinhKM->first()->GiamGia): 0 }}</td>
                                                    <td>{{ number_format($item->GiaBan) }}</td>
                                                    <td>{{ number_format($item->GiaGiam) }}</td>
                                                    <td>{{ number_format($item->ThanhTien) }}</td>
                                                    <td>
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="javascript:void(0)" onclick="showSanPham({{ $item->SanPham->id }})" role="button" data-toggle="modal"
                                                                data-rel="tooltip" title="Xem chi tiết">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="javascript:void(0)" onclick="showSanPham({{ $item->SanPham->id }})" role="button" data-toggle="modal"
                                                                            class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="LichSuVanChuyen" class="tab-pane">
                                <div class="table-responsive">
                                    <table id="lich-su-nguoi-van-chuyen" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i> Đơn vị vận chuyển</th>
                                                <th><i class="icon-user"></i> Người vận chuyển</th>
                                                <th><i class="icon-calendar"></i> Ngày sinh</th>
                                                <th><i class="fa fa-transgender"></i> Giới tính</th>
                                                <th><i class="icon-align-left"></i> Địa chỉ</th>
                                                <th><i class="icon-phone"></i> Điện thoại</th>
                                                <th><i class="icon-align-left"></i> Mô tả</th>
                                                <th><i class="icon-check"></i> Trạng thái</th>
                                                <th><i class="icon-time bigger-110 hidden-480"></i> Ngày giao</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($lichSuVanChuyen as $item)
                                                <tr>
                                                    <td class="center">{{ $item->NguoiVanChuyen->DonViVanChuyen->TenDonViVanChuyen }}</td>
                                                    <td>{{ $item->NguoiVanChuyen->HoTen }}</td>
                                                    <td>{{ date_format(date_create($item->NguoiVanChuyen->NgaySinh), 'Y-m-d') }}</td>
                                                    <td>
                                                        @if ($item->NguoiVanChuyen->GioiTinh)
                                                            Nam
                                                        @else
                                                            Nữ
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->NguoiVanChuyen->DiaChi }}</td>
                                                    <td>{{ $item->NguoiVanChuyen->Phone }}</td>
                                                    <td>{{ $item->MoTa }}</td>
                                                    <td>
                                                        @if ($item->TrangThai)
                                                            <span class="label label-success arrowed-in arrowed-in-right">Thành công</span>
                                                        @else
                                                            <span class="label arrowed">Chưa thành công</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /span -->
            </div>

            <div id="showModal"></div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

@endsection

@section('scriptThisPage')
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    {{-- datatable script --}}
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#chi-tiet-san-pham').dataTable({
                "aoColumns": [
                    null, null,
                    {
                        "bSortable": false
                    }, //hinh anh
                    null, null, null, null, null, null,
                    {
                        "bSortable": false
                    },
                ]
            });

            var oTable2 = $('#lich-su-nguoi-van-chuyen').dataTable({
                "aoColumns": [{
                        "bSortable": false
                    }, null, null, null, null,
                    null, null, null, null,
                    {
                        "bSortable": false
                    },
                ],
            });

            $('table th input:checkbox').on('click', function() {
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function() {
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
    </script>
    {{-- datatable script End --}}
    @include("SanPham.script.SanPham-show-script")
@endsection
