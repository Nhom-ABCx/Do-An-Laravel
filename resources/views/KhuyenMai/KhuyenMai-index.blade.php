{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'ChuongTrinh-Khuyến Mãi')
@section('headThisPage')

    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/jquery.gritter.css" />
    <!-- inline styles related to this page -->
    <style>
        .spinner-preview {
            width: 100px;
            height: 100px;
            text-align: center;
            margin-top: 60px;
        }

        .dropdown-preview {
            margin: 0 5px;
            display: inline-block;
        }

        .dropdown-preview>.dropdown-menu {
            display: block;
            position: static;
            margin-bottom: 5px;
        }

    </style>
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
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Chương trình khuyến mãi</h3>

                    <div class="pull">
                        {{-- <a type="button" class="btn btn-success " href="{{ route('KhuyenMai.create') }}"><i
                                class="fa fa-plus"></i> Thêm chương trình khuyến mãi</a> --}}
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i>
                            Thêm chương trình khuyến mãi
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                            <div class="widget-header">
                                                <h4>Thêm chương trình khuyến mãi</h4>
                                            </div>
                                        </h5>

                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('KhuyenMai.store') }}" method="POST" enctype="multipart/form-data">

                                            @csrf
                                            <div class="widget-box">
                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <div class="row-fluid">
                                                            <label for="id-date-picker-1">Tên chương trình</label>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="row-fluid input-append">
                                                                <textarea name="TenChuongTrinh" rows="4" cols="50">
                                                                                                                                                                                                                                                                 </textarea>
                                                            </div>
                                                            @if ($errors->has('TenChuongTrinh'))
                                                                <i class="icon-remove bigger-110 red">
                                                                    {{ $errors->first('TenChuongTrinh') }}</i>
                                                            @endif
                                                        </div>
                                                        <hr />
                                                        <div class="row-fluid">
                                                            <label for="id-date-picker-1">Mô tả</label>
                                                        </div>

                                                        <div class="control-group">
                                                            <div class="row-fluid input-append">
                                                                <textarea name="MoTa" id="w3review" name="w3review" rows="4" cols="50">
                                                                                                                                                                                                                                                                                </textarea>
                                                            </div>
                                                            @if ($errors->has('MoTa'))
                                                                <i class="icon-remove bigger-110 red">
                                                                    {{ $errors->first('MoTa') }}</i>
                                                            @endif
                                                        </div>
                                                        <hr />
                                                        <div class="control-group">
                                                            <div class="form-group">
                                                                <label for="input_from">Ngày bắt đầu</label><br>

                                                                <input class="form-control" placeholder="Ngày bắt đầu" type="date" name="FromDate">
                                                            </div>
                                                            @if ($errors->has('FromDate'))
                                                                <i class="icon-remove bigger-110 red">
                                                                    {{ $errors->first('FromDate') }}</i>
                                                            @endif
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="form-group">
                                                                <label for="input_to">Ngày kết thúc</label><br>
                                                                <input class="form-control" placeholder="Ngày kết thúc" type="date" name="ToDate">
                                                            </div>
                                                            @if ($errors->has('ToDate'))
                                                                <i class="icon-remove bigger-110 red">
                                                                    {{ $errors->first('ToDate') }}</i>
                                                            @endif
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- kết thúc thêm --}}
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

                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="fa fa-plus"></i>
                                                </a>

                                                <a class="green" href="{{ route('KhuyenMai.edit', $item) }}">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                                <form action="{{ route('KhuyenMai.destroy', $item) }}" method="post">
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
            $('#gritter-error').on(ace.click_event, function() {
                $.gritter.add({
                    title: 'This is a warning notification',
                    text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                    // class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ?
                    //     ' gritter-light' : '')
                });
                return false;
            });
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
                    // {
                    //     "bSortable": false
                    // },
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
    <script type="text/javascript">
        @if (count($errors) > 0)
            $('#exampleModalCenter').modal('show');
        @endif
    </script>
@endsection
