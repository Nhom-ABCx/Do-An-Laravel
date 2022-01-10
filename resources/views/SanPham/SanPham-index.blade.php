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
                <li class="active">Quản lý sản phẩm</li>
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
                                <form class="form-inline" action="{{ route('SanPham.index') }}" method="get">
                                    <a href="{{ route('SanPham.create') }}" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm sản phẩm
                                    </a>

                                    <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="{{$request['TenSanPham']}}" name="TenSanPham" />
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

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">Id</th>
                                    <th>TenSanPham</th>
                                    <th>MoTa</th>
                                    <th>SoLuongTon</th>
                                    <th>GiaNhap</th>
                                    <th>GiaBan</th>
                                    <th>HinhAnh</th>
                                    <th>LuotMua</th>
                                    <th>HangSanXuatId</th>
                                    <th>LoaiSanPhamId</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Create_at
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Update_at
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Deleted_at
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($sanPham as $item)

                                    <tr>
                                        <td class="center">{{ $item->id }}</td>
                                        <td>{{ $item->TenSanPham }}</td>
                                        <td>{{ $item->MoTa }}</td>
                                        <td>{{ $item->SoLuongTon }}</td>
                                        <td>{{ $item->GiaNhap }}</td>
                                        <td>{{ $item->GiaBan }}</td>
                                        <td>
                                            <img src='{{ $item->HinhAnh }}' alt="{{ $item->HinhAnh }}" width='100' height='100'>
                                        </td>
                                        <td>{{ $item->LuotMua }}</td>
                                        <td>{{ $item->HangSanXuat->Ten }}</td>
                                        <td>{{ $item->LoaiSanPham->TenLoai }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>{{ $item->deleted_at }}</td>

                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="icon-zoom-in bigger-130"></i>
                                                </a>

                                                <a class="green" href="{{ route('SanPham.edit', $item) }}">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>

                                                <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-link red"><i class="icon-trash bigger-130"></i></button>
                                                </form>
                                                {{-- <a class="red" href="{{ route('SanPham.destroy', $item) }}" data-method="delete">
                                                    <i class="icon-trash bigger-130"></i>
                                                </a> --}}
                                            </div>

                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                    <i class="icon-zoom-in bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('SanPham.edit', $item) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                <span class="green">
                                                                    <i class="icon-edit bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Delete"><i class="icon-trash bigger-120"></i></button>
                                                            </form>
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
            </div>

        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

@endsection

@section('scriptThisPage')
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
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
                    null, null, null, null, null, null,
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

@endsection
