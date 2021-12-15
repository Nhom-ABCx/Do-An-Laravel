{{--  cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'CT-CT_khuyenMai-index')

@section("headThisPage")
    
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
                <a href="#">KM</a>
            </li>
            <li class="active">CT_Khuyến mãi</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
    </div>

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">

                <h3 class="header smaller lighter blue">Chi tiết CT-khuyến mãi</h3>
                <div class="pull">
                    <a type="button" class="btn btn-success " href="{{ route('CTKhuyenMai.create') }}"><i class="fa fa-plus"></i> Thêm chi tiết chương trình khuyến mãi</a>
                </div>
                </br>
                <div class="table-header">
                    Bảng Chi tiết CT-Khuyến mãi
                </div>

                <div class="table-responsive">
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <i class="fa fa-align-left"></i>
                                    Chương trình KM-Id
                                </th>

                                <th>
                                    <i class="fa fa-file-text-o"></i>
                                    Sản phẩm Id
                                </th>
                                <th>
                                    <i class="fa fa-calendar"></i>
                                    Giảm giá
                                </th>
                                <th>
                                    <i class="fa fa-calendar-check-o"></i>
                                    Số lượng
                                </th>
                                <th>
                                    <i class="fa fa-pencil"></i>
                                    created_att
                                </th>
                                <th>
                                    <i class="fa fa-check-square-o"></i>
                                    updated_at
                                </th>
                                <th>
                                    <i class="fa fa-trash"></i>
                                    deleted_at
                                </th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($ctctkm as $item)
                            <tr>
                                <td>{{$item->ChuongTrinhKhuyenMai->TenChuongTrinh}}</td>
                                <td>{{$item->SanPham->TenSanPham}}</td>
                                <td>{{$item->GiamGia}}</td>
                                <td>{{$item->SoLuong}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>{{$item->deleted_at}}</td>

                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a class="green" href="{{route('CTKhuyenMai.edit',[$item->ChuongTrinhKhuyenMaiId,$item->SanPhamId])}}">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                        <form action="{{route('CTKhuyenMai.destroy',[$item->ChuongTrinhKhuyenMaiId,$item->SanPhamId])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-link red"><i class="icon-trash bigger-130"></i></button>
                                        </form>
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
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="icon-edit bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="icon-trash bigger-120"></i>
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
        </div>

    </div><!-- /.page-content -->
</div><!-- /.main-content -->
@endsection

@section("scriptThisPage")
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        var oTable1 = $('#sample-table-2').dataTable({
            "aoColumns": [
                null, null,
                null, null,
                null, null, null,
                {
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
