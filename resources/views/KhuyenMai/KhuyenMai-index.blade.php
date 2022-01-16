{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'ChuongTrinh-Khuyến Mãi')
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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">Chương Trình_Khuyến mãi</li>
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
            <h3 class="header smaller lighter blue">Chương trình khuyến mãi</h3>
            <div class="page-content">
                <div class="row">
                    <form class="form-inline"
                        action="{{ request()->is('KhuyenMaii/DaXoa') ? route('KhuyenMai.DaXoa') : route('KhuyenMai.index') }}"
                        method="get">
                        <a type="button" class="btn btn-success " href="{{ route('KhuyenMai.create') }}"><i
                                class="fa fa-plus"></i> Thêm chương trình khuyến mãi</a>
                        @if (request()->is('KhuyenMaii/DaXoa'))
                            <a class="btn btn-inverse" href="{{ route('KhuyenMai.index') }}"> Black</a>
                        @else
                            <a href="{{ route('KhuyenMai.DaXoa') }}" class="btn btn-inverse">
                                <i class="icon-trash"></i>
                                Chương trình k.mãi đã xoá
                            </a>
                        @endif
                    </form>

                    <hr>
                    <div class="table-header">
                        Bảng Chương Trình Khuyến mãi
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-align-left"></i>
                                        Tên chương trình
                                    </th>

                                    <th>
                                        <i class="fa fa-file-text-o"></i>
                                        Mô tả
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar"></i>
                                        Ngày bắt đầu
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar-check-o"></i>
                                        Ngày kết thúc
                                    </th>
                                    <th>
                                        <i class="fa fa-pencil"></i>
                                        created_att
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        updated_at
                                    </th>
                                    {{-- <th>
                                        <i class="fa fa-trash"></i>
                                        deleted_at
                                    </th> --}}
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($ctkm as $item)
                                    <tr>
                                        <td>{{ $item->TenChuongTrinh }}</td>
                                        <td>{{ $item->MoTa }}</td>
                                        <td>{{ $item->FromDate }}</td>
                                        <td>{{ $item->ToDate }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        {{-- <td>{{ $item->deleted_at }}</td> --}}
                                        @if (request()->is('KhuyenMaii/DaXoa'))
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('KhuyenMai.KhoiPhuc', $item->id) }}"
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
                                                    <a class="blue" href="#">
                                                        <i class="fa fa-plus"></i>
                                                    </a>

                                                    <a class="green" href="{{ route('KhuyenMai.edit', $item) }}"
                                                        title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="{{ route('KhuyenMai.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-link red" title="Xoá"><i
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
            </div><!-- /.main-content -->
        @endsection

        @section('scriptThisPage')
            {{-- Phần này là script thu gọn, phân trang lại của cái table --}}
            <!-- inline scripts related to this page -->
            <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
            <script src="/storage/assets/js/bootbox.min.js"></script>
            <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
            <script src="/storage/assets/js/jquery.gritter.min.js"></script>
            <script src="/storage/assets/js/spin.min.js"></script>

            <script type="text/javascript">
                jQuery(function($) {
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            $.gritter.add({
                            title: 'Lỗi' ,
                            text: '{{ $error }}',
                            class_name: 'gritter-error' + (!$( '#gritter-light').get(0) ?
                            ' gritter-light' : '')
                            });
                        
                        @endforeach
                    @endif

                    var oTable1 = $('#sample-table-2').dataTable({
                        "aoColumns": [
                            null, {
                                "bSortable": false
                            },
                            null, {
                                "bSortable": false
                            },
                            null, null, {
                                "bSortable": false
                            },

                        ]
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
            </script>
        @endsection
