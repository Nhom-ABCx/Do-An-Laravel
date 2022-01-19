{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
    {{-- đoạn include Link chỉ dành cho trang tránh gây lỗi CSS --}}
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
                    <a href="#">Home</a>
                </li>

                <li class="active">Khách Hàng</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>
        <div class="col-xs-12">
            <h3 class="header smaller lighter blue">Khách hàng</h3>
            <div class="page-content">
                <div class="row">
                    <form class="form-inline"
                        action="{{ request()->is('KhachHangg/dsden') ? route('KhachHang.dsDen') : route('KhachHang.index') }}"
                        method="get">

                        @if (request()->is('KhachHangg/dsden'))
                            <a class="btn btn-inverse" href="{{ route('KhachHang.index') }}"> Black</a>
                        @else
                            <a href="{{ route('KhachHang.dsDen') }}" class="btn btn-inverse">
                                <i class="icon-trash"></i>
                                Danh sách đen
                            </a>
                        @endif
                    </form>

                    <hr>
                    <div class="table-header">
                        Bảng khách hàng
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-align-left"></i>
                                        Username
                                    </th>

                                    <th>
                                        <i class="fa fa-file-text-o"></i>
                                        Email
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar"></i>
                                        Phone
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar-check-o"></i>
                                        Mật khẩu
                                    </th>
                                    <th>
                                        <i class="fa fa-pencil"></i>
                                        Họ tên
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Ngày sinh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Giới tính
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Hình ảnh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        create at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        update at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        delete at
                                    </th>
                                    {{-- <th>
                                        <i class="fa fa-trash"></i>
                                        deleted_at
                                    </th> --}}
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- {{ dd($khachHang) }} --}}
                                @foreach ($khachHang as $item)
                                    <tr>
                                        <td>{{ $item->Username }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Phone }}</td>
                                        <td>{{ $item->MatKhau }}</td>
                                        <td>{{ $item->HoTen }}</td>
                                        <td>{{ $item->NgaySinh }}</td>
                                        <td>
                                            @if ($item->GioiTinh == 1)
                                                <span>Nam</span>
                                            @else
                                                <span>Nữ</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->DiaChi }}</td>
                                        <td>
                                            <img src='/storage/assets/images/avatar/User/{{ $item->id }}/{{ $item->HinhAnh }}'
                                                alt="{{ $item->HinhAnh }}" width='50' height='50'>

                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>{{ $item->deleted_at }}</td>

                                        @if (request()->is('KhachHangg/dsden'))
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('KhachHang.KhoiPhuc', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        {{-- @method("PUT") --}}
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    {{-- <a class="blue" href="#">
                                                        <i class="fa fa-plus"></i>
                                                    </a> --}}
                                                    <form action="{{ route('KhachHang.destroy', $item) }}" method="post">
                                                        {{-- {{ dd($item) }} --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-link red"
                                                            title="Danh sách đen"><i
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
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                    title="View">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                    title="Edit">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                    title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
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
        </div>
    </div><!-- /.main-content -->
@endsection


@section('scriptThisPage')
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null,
                    {
                        "bSortable": false
                    }, //mota
                    null,
                    null, null, null,
                    //hinh anh
                    null, {
                        "bSortable": false
                    },
                    {
                        "bSortable": false
                    },
                    null, null, {
                        "bSortable": false
                    }, {
                        "bSortable": false
                    },

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
