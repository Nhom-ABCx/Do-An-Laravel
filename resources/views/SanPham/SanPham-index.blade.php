{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'QL Sản phẩm')

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
                @if (request()->is('SanPhamm/DaXoa'))
                    <li>
                        <a href="{{ route('SanPham.index') }}">Quản lý sản phẩm</a>
                    </li>
                    <li class="active">Đã xóa</li>
                @else
                    <li class="active">Quản lý sản phẩm</li>
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
                            <h3 class="header smaller lighter blue">Quản lý sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" action="{{ request()->is('SanPhamm/DaXoa') ? route('SanPham.DaXoa') : route('SanPham.index') }}" method="get">
                                    <a href="{{ route('SanPham.create') }}" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm sản phẩm
                                    </a>
                                    @if (request()->is('SanPhamm/DaXoa'))
                                    @else
                                        <a href="{{ route('SanPham.DaXoa') }}" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Sản phẩm đã xóa
                                        </a>
                                    @endif


                                    <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="{{ $request['TenSanPham'] }}"
                                        name="TenSanPham" />
                                    <label for=""> Hãng sãn xuất: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="HangSanXuatId">
                                        <option value="">All</option>
                                        @foreach ($lstHangSanXuat as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $request['HangSanXuatId']) selected @endif>
                                                {{ $item->Ten }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <label for=""> Loại sản phẩm: </label>
                                    <select class="width-10 chosen-select" id="form-field-select-4" name="LoaiSanPhamId">
                                        <option value="">All</option>
                                        @foreach ($lstLoaiSanPham as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $request['LoaiSanPhamId']) selected @endif>
                                                {{ $item->TenLoai }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="btn btn-purple btn-sm">
                                        Search
                                        <i class="icon-search icon-on-right bigger-110"></i>
                                    </button>
                                    <button type="reset" class="btn btn-sm">
                                        <i class="icon-refresh"></i>
                                        Reset
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng sản phẩm
                    </div>

                    @include("layouts.Table-SanPham")
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
                    null, null, null, null, null,
                    {
                        "bSortable": false
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
