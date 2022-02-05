{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Hóa đơn')

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
                @if (request()->is('HoaDonn/DaGiao'))
                    <li>
                        <a href="{{ route('HoaDon.index') }}">Quản lý hóa đơn</a>
                    </li>
                    <li class="active">Đã giao</li>
                @elseif (request()->is('HoaDonn/DaHuy'))
                    <li>
                        <a href="{{ route('HoaDon.index') }}">Quản lý hóa đơn</a>
                    </li>
                    <li class="active">Đã hủy</li>
                @else
                    <li class="active">Quản lý hóa đơn</li>
                @endif
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
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý Hóa đơn</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline"
                                    action="{{ request()->is('HoaDonn/DaGiao')? route('HoaDon.DaGiao'): (request()->is('HoaDonn/DaHuy')? route('HoaDon.DaHuy'): route('HoaDon.index')) }}" method="get">
                                    @if (request()->is('HoaDonn/DaGiao'))
                                        <a href="{{ route('HoaDon.DaHuy') }}" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Hóa đơn đã hủy
                                        </a>
                                    @elseif (request()->is('HoaDonn/DaHuy'))

                                        <a href="{{ route('HoaDon.DaGiao') }}" class="btn btn-success">
                                            <i class="icon-check-sign"></i>
                                            Hóa đơn đã giao
                                        </a>
                                    @else
                                        <a href="{{ route('HoaDon.DaGiao') }}" class="btn btn-success">
                                            <i class="icon-check-sign"></i>
                                            Hóa đơn đã giao
                                        </a>
                                        <a href="{{ route('HoaDon.DaHuy') }}" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Hóa đơn đã hủy
                                        </a>
                                    @endif


                                    {{-- <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên hoặc username khách hàng" data-placement="bottom"
                                        value="{{ $request['NameSearch'] }}" name="NameSearch" /> --}}
                                    <label for=""> Phương thức thanh toán: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="PhuongThucThanhToan">
                                        <option value="">All</option>
                                        <option value="1" @if ('1' == $request['PhuongThucThanhToan']) selected @endif>
                                            Khi nhận hàng
                                        </option>
                                        <option value="2" @if ('2' == $request['PhuongThucThanhToan']) selected @endif>
                                            Thẻ tín dụng
                                        </option>
                                        <option value="3" @if ('3' == $request['PhuongThucThanhToan']) selected @endif>
                                            MOMO
                                        </option>
                                        <option value="4" @if ('4' == $request['PhuongThucThanhToan']) selected @endif>
                                            ViettelPay
                                        </option>
                                        <option value="5" @if ('5' == $request['PhuongThucThanhToan']) selected @endif>
                                            ZaloPay
                                        </option>
                                    </select>
                                    @if (request()->is('HoaDonn/DaGiao'))
                                    @else
                                        <label for=""> Trạng thái: </label>
                                        <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                            <option value="">All</option>
                                            <option value="0" @if ('0' == $request['TrangThai']) selected @endif>
                                                Đang chờ xác nhận
                                            </option>
                                            <option value="1" @if ('1' == $request['TrangThai']) selected @endif>
                                                Đang xử lý
                                            </option>
                                            <option value="2" @if ('2' == $request['TrangThai']) selected @endif>
                                                Đã xử lý
                                            </option>
                                            <option value="3" @if ('3' == $request['TrangThai']) selected @endif>
                                                Đang giao
                                            </option>
                                            <option value="4" @if ('4' == $request['TrangThai']) selected @endif>
                                                Đã giao
                                            </option>
                                        </select>
                                    @endif
                                    <label for=""> Lọc theo ngày: </label>
                                    <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="{{ $request['NgayDat'] }}" data-rel="tooltip" title="Tháng-Ngày-Năm"
                                        data-placement="top" />

                                    <button type="submit" class="btn btn-purple btn-sm">
                                        Search
                                        <i class="icon-search icon-on-right bigger-110"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng Hóa đơn
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-user"></i>Khách hàng</th>
                                    <th><i class="icon-credit-card"></i>Phương thức thanh toán</th>
                                    <th><i class="icon-bar-chart"></i>Tổng số lượng</th>
                                    <th><i class="icon-money"></i>Tổng tiền</th>
                                    <th><i class="icon-exclamation-sign"></i>Trạng thái</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Ngày đặt
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Chỉnh sửa lần cuối
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($hoaDon as $item)

                                    <tr>
                                        <td class="center">{{ $item->id }}</td>
                                        <td>{{ $item->DiaChi->KhachHang->HoTen ?? $item->DiaChi->KhachHang->Username }}</td>
                                        <td>
                                            @switch($item->PhuongThucThanhToan)
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
                                        </td>
                                        <td>{{ $item->TongSoLuong }}</td>
                                        <td>{{ number_format($item->TongTien) }}</td>
                                        <td>
                                            @switch($item->TrangThai)
                                                @case(0)
                                                    <span class="label label-danger arrowed">0 Đang chờ xác nhận</span>
                                                @break
                                                @case(1)
                                                    <span class="label arrowed">1 Đang xử lý</span>
                                                @break
                                                @case(2)
                                                    <span class="label label-info arrowed-right arrowed-in">2 Đã xử lý</span>
                                                @break
                                                @case(3)
                                                    <span class="label label-warning arrowed arrowed-right">3 Đang giao</span>
                                                @break
                                                @case(4)
                                                    <span class="label label-success arrowed-in arrowed-in-right">4 Đã giao</span>
                                                @break
                                                @default
                                            @endswitch
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        @if (request()->is('HoaDonn/DaHuy'))
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('HoaDon.KhoiPhuc', $item->id) }}" method="post">
                                                        @csrf
                                                        {{-- @method("PUT") --}}
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="{{ route('HoaDon.KhoiPhuc', $item->id) }}" method="post">
                                                                    @csrf
                                                                    {{-- @method("PUT") --}}
                                                                    <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">

                                                    {{-- neu trạng thái =4 tức dag94 giao hàng thành công thì ko được phép sửa hoặc hủy hóa đơn --}}
                                                    @if ($item->TrangThai != 4)
                                                        <span class="dropdown-hover dropup dropdown-pink">
                                                            <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=0" tabindex="-1">0 Đang chờ xác nhận</a>
                                                                    <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=1" tabindex="-1">1 Đang xử lý</a>
                                                                    <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=2" tabindex="-1">2 Đã xử lý</a>
                                                                    <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=3" tabindex="-1">3 Đang giao</a>
                                                                    <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=4" tabindex="-1">4 Đã giao</a>
                                                                </li>
                                                            </ul>
                                                        </span>

                                                        <form action="{{ route('HoaDon.destroy', $item) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-130"></i></button>
                                                        </form>

                                                    @endif
                                                    <a class="blue" href="{{ route('HoaDon.show', $item) }}" data-rel="tooltip" title="Xem chi tiết">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            @if ($item->TrangThai != 4)
                                                                <li>
                                                                    <span class="dropdown-hover dropup dropdown-pink">
                                                                        <i class="icon-cog green bigger-150" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li>
                                                                                <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=0" tabindex="-1">0 Đang chờ xác nhận</a>
                                                                                <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=1" tabindex="-1">1 Đang xử lý</a>
                                                                                <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=2" tabindex="-1">2 Đã xử lý</a>
                                                                                <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=3" tabindex="-1">3 Đang giao</a>
                                                                                <a href="{{ route('HoaDon.edit', $item) }}?TrangThai=4" tabindex="-1">4 Đã giao</a>
                                                                            </li>
                                                                        </ul>
                                                                    </span>
                                                                </li>

                                                                <li>
                                                                    <form action="{{ route('HoaDon.destroy', $item) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Hủy"><i
                                                                                class="icon-trash bigger-120"></i></button>
                                                                    </form>
                                                                </li>
                                                            @endif

                                                            <li>
                                                                <a href="{{ route('HoaDon.show', $item) }}" class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

@endsection

@section('scriptThisPage')
    {{-- datetime picker` --}}
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <script src="/storage/assets/js/date-time/moment.min.js"></script>
    <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
    <script src="/storage/assets/js/jquery.autosize.min.js"></script>
    <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript">
        $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });
    </script>
    {{-- end datetime picker --}}
    <!-- inline scripts related to this page -->
    {{-- datatable script --}}
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [null, null, {
                        searchable: false
                    }, {
                        searchable: false
                    },
                    {
                        searchable: false
                    },
                    {
                        searchable: false
                    },
                    {
                        searchable: false
                    }, {
                        searchable: false
                    },
                    {
                        bSortable: false
                    }
                ]
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
        });

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

    {{-- thông báo error --}}
    <script type="text/javascript">
        jQuery(function($) {
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}', 'Có lỗi xảy ra', {
                    timeOut: 3000
                    });
                @endforeach
            @endif
        });
    </script>
    {{-- thông báo error end --}}
@endsection
