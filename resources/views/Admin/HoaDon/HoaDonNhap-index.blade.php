{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Hóa đơn nhập')

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
                    <a href="{{ route('Home.index') }}">Home</a>
                </li>
                @if (request()->is('Admin/HoaDonNhapp/DaHuy'))
                    <li>
                        <a href="{{ route('HoaDonNhap.index') }}">Quản lý hóa đơn nhập</a>
                    </li>
                    <li class="active">Đã hủy</li>
                @else
                    <li class="active">Quản lý hóa đơn nhập</li>
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
                            <h3 class="header smaller lighter blue">Quản lý Hóa đơn nhập</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                @if (!request()->is('Admin/HoaDonNhapp/DaHuy'))
                                    <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm hóa đơn nhập
                                    </a>
                                    <a href="{{ route('HoaDonNhap.DaHuy') }}" class="btn btn-inverse">
                                        <i class="icon-trash"></i>
                                        Hóa đơn nhập đã hủy
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng Hóa đơn nhập
                        <form class="form-inline" action="{{ request()->is('Admin/HoaDonNhapp/DaHuy') ? route('HoaDonNhap.DaHuy') : route('HoaDonNhap.index') }}" method="get" style="margin-top: 10px">
                            {{-- <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên hoặc username khách hàng" data-placement="bottom"
                                value="{{ $request['NameSearch'] }}" name="NameSearch" /> --}}
                            <label> Tên nhân viên: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="TaiKhoanId">
                                <option value="">All</option>
                                @foreach ($dsTaiKhoan as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $request['TaiKhoanId']) selected @endif>
                                        {{ $item->HoTen ?? $item->Username }}
                                    </option>
                                @endforeach
                            </select>

                            <label> Trạng thái: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                <option value="">All</option>
                                <option value="0" @if ('0' == $request['TrangThai']) selected @endif>
                                    Chưa thành công
                                </option>
                                <option value="1" @if ('1' == $request['TrangThai']) selected @endif>
                                    Đã thành công
                                </option>
                            </select>

                            <label for=""> Lọc theo ngày: </label>
                            <input class="width-20" type="text" name="NgayDat" id="id-NgayDat-1" value="{{ $request['NgayDat'] }}" data-rel="tooltip" title="Tháng-Ngày-Năm" data-placement="top" />

                            <button type="submit" class="btn btn-purple btn-sm">
                                Lọc
                                <i class="icon-search icon-on-right bigger-110"></i>
                            </button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-user"></i>Người lập</th>
                                    <th><i class="icon-cogs"></i>Nhà cung cấp</th>
                                    <th><i class="icon-phone"></i>Phone</th>
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
                                        <td>{{ $item->TaiKhoan->HoTen ?? $item->TaiKhoan->Username }}</td>
                                        <td>{{ $item->NhaCungCap->TenNhaCungCap }}</td>
                                        <td>{{ $item->NhaCungCap->Phone }}</td>
                                        <td>{{ $item->TongSoLuong ?? 0 }}</td>
                                        <td>{{ number_format($item->TongTien) }}</td>
                                        <td>
                                            @if ($item->TrangThai)
                                                <span class="label label-success arrowed-in arrowed-in-right"> Đã thành công</span>
                                            @else
                                                <span class="label arrowed"> Chưa thành công</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        @if (request()->is('Admin/HoaDonNhapp/DaHuy'))
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('HoaDonNhap.KhoiPhuc', $item->id) }}" method="post">
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
                                                                <form action="{{ route('HoaDonNhap.KhoiPhuc', $item->id) }}" method="post">
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
                                                    @if (!$item->TrangThai)
                                                        <span class="dropdown-hover dropup dropdown-pink">
                                                            <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="{{ route('HoaDonNhap.edit', $item) }}?TrangThai=0" tabindex="-1"> Chưa thành công</a>
                                                                    <a href="{{ route('HoaDonNhap.edit', $item) }}?TrangThai=1" tabindex="-1"> Đã thành công</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    @endif

                                                    @if (!$item->TrangThai)
                                                        <form action="{{ route('HoaDonNhap.destroy', $item) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn-link red" data-rel="tooltip" title="Hủy"><i class="icon-trash bigger-130"></i></button>
                                                        </form>
                                                    @endif

                                                    <a class="blue" href="{{ route('HoaDonNhap.show', $item) }}" data-rel="tooltip" title="Xem hoặc thêm chi tiết hóa đơn nhập">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            @if (!$item->TrangThai)
                                                                <span class="dropdown-hover dropup dropdown-pink">
                                                                    <i class="icon-cog green bigger-150" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="{{ route('HoaDonNhap.edit', $item) }}?TrangThai=0" tabindex="-1"> Chưa thành công</a>
                                                                            <a href="{{ route('HoaDonNhap.edit', $item) }}?TrangThai=1" tabindex="-1"> Đã thành công</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            @endif

                                                            @if (!$item->TrangThai)
                                                                <li>
                                                                    <form action="{{ route('HoaDonNhap.destroy', $item) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Hủy"><i
                                                                                class="icon-trash bigger-120"></i></button>
                                                                    </form>
                                                                </li>
                                                            @endif

                                                            <li>
                                                                <a href="{{ route('HoaDonNhap.show', $item) }}" class="tooltip-info" data-rel="tooltip" title="Xem hoặc thêm chi tiết hóa đơn nhập">
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

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog" style="width: 90%;">
                    <div class="modal-content">
                        <form action="{{ route('HoaDonNhap.store') }}" method="post">
                            @csrf
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">Thêm mới hóa đơn nhập</h4>
                            </div>

                            <div class="modal-body overflow-visible">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table id="ChonNhaSanXuat" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                                    <th><i class="icon-align-left"></i>Tên nhà cung cấp</th>
                                                    <th><i class="icon-building"></i>Địa chỉ</th>
                                                    <th><i class="icon-location-arrow"></i>Mail</th>
                                                    <th><i class="icon-phone"></i>Phone</th>
                                                    <th class="center"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-sm" data-dismiss="modal">
                                        <i class="icon-remove"></i>
                                        Hủy
                                    </button>

                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="icon-ok"></i>
                                        Lưu
                                    </button>
                                </div>
                        </form>
                    </div>
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
                "aoColumns": [{
                        "type": "num"
                    }, null, null, null,
                    null, null, null, null,
                    {
                        "bSortable": false
                    },
                    null
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
        })
    </script>
    {{-- datatable script End --}}

    {{-- thông báo error --}}
    <script type="text/javascript">
        jQuery(function($) {
            @if ($errors->any())
                $('#modal-form').modal('show');
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}', 'Có lỗi xảy ra', {
                        timeOut: 3000
                    });
                @endforeach
            @endif
            @if (Session::has('themMoi'))
                toastr.success("{{ Session::get('themMoi') }}", "Thành công", {
                    timeOut: 3000
                });
            @endif
        });
    </script>
    {{-- thông báo error end --}}


    <script type="text/javascript">
        $('#ChonNhaSanXuat').DataTable({
            autoWidth: false, //ko co cai nay` la` no' thu nho? lai max xau'
            //tap ra ngoai` la se huy cai bang?, de tranh' thong bao'
        destroy: true,
        //viet tat', lay het sanPham, chuyen thanh mang? json dua vo trong javascript
        data: @json($dsNhaCungCap),
        //do du lieu vao cot
        columns: [{
                data: 'id',
                className: "center",
                searchable: false
            },
            {
                data: 'TenNhaCungCap'
            },
            {
                data: 'DiaChi',
                orderable: false,
                searchable: false
            },
            {
                data: 'Email',
                searchable: false
            },
            {
                data: 'Phone',
            },
            {
                //render cot checkbox
                data: "id",
                className: "center",
                render: function(data, type, row, meta) {
                    return '<input type="radio" value="' + data + '" name="NhaCungCapId" />';
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
    </script>
@endsection
