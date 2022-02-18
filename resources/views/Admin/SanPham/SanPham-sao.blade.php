{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
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
                    <a href="{{ route('SanPham.index') }}">Quản lý đánh giá  sản phẩm</a>
                </li>
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
                            <h3 class="header smaller lighter blue">Quản lý đánh giá sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">

                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng sản phẩm
                    </div>

                    {{-- phai co script moi hien thi day du table --}}
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                    <th><i class="icon-android"></i>Loại sản phẩm</th>
                                    <th><i class="icon-android"></i>Lượt mua</th>
                                    <th><i class="icon-android"></i>Trung bình đánh giá</th>
                                    {{-- <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Create_at
                </th>
                <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Update_at
                </th> --}}
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($sanPhamSao as $item)

                                    <tr>
                                        <td class="center">{{ $item->id }}</td>
                                        <td>{{ $item->TenSanPham }}</td>

                                        <td>
                                            <img src='{{ $item->HinhAnh }}' alt="{{ $item->HinhAnh }}" width='100'
                                                height='100'>
                                        </td>
                                        <td>{{ $item->HangSanXuat->Ten }}</td>
                                        <td>{{ $item->LoaiSanPham->TenLoai }}</td>
                                        <td>{{ $item->LuotMua }}</td>
                                        <td>{{ $item->Star }}</td>
                                        {{-- <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td> --}}
                                        @if (request()->is('Admin/SanPhamm/DaXoa'))
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        {{-- @method("PUT") --}}
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>

                                                    <form id="form"
                                                        action="{{ route('SanPham.XoaVinhVien', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn-link red bootbox-options"
                                                            title="Xóa vĩnh viễn"><i
                                                                class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul
                                                            class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    {{-- @method("PUT") --}}
                                                                    <button type="submit"
                                                                        class="tooltip-error btn-link blue"
                                                                        data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>

                                                            <li>
                                                                <form id="form"
                                                                    action="{{ route('SanPham.XoaVinhVien', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button"
                                                                        class="tooltip-error btn-link red bootbox-options"
                                                                        data-rel="tooltip" title="Xóa vĩnh viễn"><i
                                                                            class="icon-trash bigger-130"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>

                                                    <a class="green" href="{{ route('SanPham.edit', $item) }}"
                                                        data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-link red" data-rel="tooltip"
                                                            title="Xóa"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                    {{-- <a class="red" href="{{ route('SanPham.destroy', $item) }}" data-method="delete">
                                <i class="icon-trash bigger-130"></i>
                            </a> --}}
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul
                                                            class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                    title="View">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('SanPham.edit', $item) }}"
                                                                    class="tooltip-success" data-rel="tooltip"
                                                                    title="Chỉnh sửa">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="{{ route('SanPham.destroy', $item) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="tooltip-error btn-link red"
                                                                        data-rel="tooltip" title="Xóa"><i
                                                                            class="icon-trash bigger-120"></i></button>
                                                                </form>
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

    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    {{-- dialog --}}
    <script src="/storage/assets/js/bootbox.min.js"></script>
    {{-- dialog --}}

    <!-- inline scripts related to this page -->

    {{-- datatable script --}}
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, null,
                    {
                        "bSortable": false
                    }, //mota
                    null, null, null,
                    {
                        "bSortable": false
                    }, //hinh anh
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
    </script>
    {{-- datatable script End --}}

    {{-- show arler dialog --}}
    <script type="text/javascript">
        jQuery(function($) {
            $(".bootbox-options").on(ace.click_event, function() {
                bootbox.dialog({
                    message: "<span class='bigger-110'>Bạn có chắc chắn muốn xóa vĩnh viễn mục này ??? <i class='icon-exclamation-sign red bigger-130'></i></span>",
                    buttons: {
                        "button": {
                            "label": "Hủy",
                            "className": "btn-sm"
                        },
                        "danger": {
                            "label": "Xác nhận xóa",
                            "className": "btn-sm btn-danger",
                            "callback": function() {
                                $("#form").submit()
                            }
                        },
                    }
                });
            });
        });
    </script>
    {{-- show arler dialog end --}}
@endsection
