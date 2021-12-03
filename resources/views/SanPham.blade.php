{{--  cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'QL Sản phẩm')

@section('body')

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="#">Tables</a>
            </li>
            <li class="active">jqGrid plugin</li>
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
                <h3 class="header smaller lighter blue">Quản lý sản phẩm</h3>
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
                                <th>DonGia</th>
                                <th>HinhAnh</th>
                                <th>LuotMua</th>
                                <th>NhaCungCapId</th>
                                <th>LoaiSanPhamId</th>
                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>
                                    Create_at
                                </th>
                                <th>
                                    <i class="icon-time bigger-110 hidden-480"></i>
                                    Update_at
                                </th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($sanPham as $item)

                            <tr>
                                <td class="center">{{$item->id}}</td>
                                <td>{{$item->TenSanPham}}</td>
                                <td>{{$item->MoTa}}</td>
                                <td>{{$item->SoLuongTon}}</td>
                                <td>{{$item->DonGia}}</td>
                                <td>
                                    <img src='assets/images/product-image/{{$item->HinhAnh}}' alt="{{$item->HinhAnh}}" width='100' height='100'>
                                </td>
                                <td>{{$item->LuotMua}}</td>
                                <td>{{$item->NhaCungCapId}}</td>
                                <td>{{$item->LoaiSanPhamId}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>

                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="#">
                                            <i class="icon-zoom-in bigger-130"></i>
                                        </a>

                                        <a class="green" href="{{route('SanPham.edit',$item)}}">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <a class="red" href="#">
                                            <i class="icon-trash bigger-130"></i>
                                        </a>
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
{{-- Phần này là script thu gọn, phân trang lại của cái table --}}
<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function($) {
        var oTable1 = $('#sample-table-2').dataTable( {
        "aoColumns": [
          null,null,
          { "bSortable": false },
          null, null,
          { "bSortable": false },
          null, null,null,null,null,
          { "bSortable": false }
        ] } );


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
    })
</script>

@endsection
