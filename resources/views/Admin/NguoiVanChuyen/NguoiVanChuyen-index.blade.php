{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Người vận chuyên')

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
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="active">Người vận chuyển</li>
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
                            <h3 class="header smaller lighter blue">Người vận chuyển</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" method="get">
                                    <a href="{{ route('NguoiVanChuyen.create') }}" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm người vận chuyển
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng người vận chuyển
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">##</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Địa chỉ</th>
                                    <th>Hình ảnh</th>
                                    <th>SĐT</th>
                                    <th>Đơn vị VC</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Create_at
                                    </th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Update_at
                                    </th>
                                    {{-- <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        Deleted_at
                                    </th> --}}
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($nvc as $item)

                                    <tr>
                                        <td class="center">{{ $item->id }}</td>
                                        <td>{{ $item->HoTen }}</td>
                                        <td>{{ $item->NgaySinh }}</td>
                                        @if ($item->GioiTinh == '0')
                                            <td>Nữ</td>
                                        @elseif($item->GioiTinh == '1')
                                            <td>Nam</td>
                                        @else($item->Gioitinh!=0||$item->gioitinh!=1)
                                            <td>Không xác định</td>
                                        @endif
                                        </td>
                                        <td>{{ $item->DiaChi }}</td>
                                        <td>
                                            {{-- {{ dd($item->HinhAnh) }} --}}
                                            <img src='{{ $item->HinhAnh }}' alt="{{ $item->HinhAnh }}" width='100'
                                                height='100'>
                                        </td>
                                        <td>{{ $item->Phone }}</td>
                                        {{-- {{ dd($item->DonViVanChuyen) }} --}}
                                        <td>{{ $item->DonViVanChuyen->TenDonViVanChuyen }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        {{-- <td>{{ $item->deleted_at }}</td> --}}

                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="icon-zoom-in bigger-130"></i>
                                                </a>

                                                <a class="green"
                                                    href="{{ route('NguoiVanChuyen.edit', $item) }}">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>

                                                <form action="{{ route('NguoiVanChuyen.destroy', $item) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-link red"><i
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

                                                        <!-- <li>
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
                                                                    </li> -->
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
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, null,
                    null, //NgaySinh
                    null, //GioiTinh
                    {
                        "bSortable": false
                    }, //HinhAnh
                    {
                        'bSortable': false
                    },
                    {
                        'bSortable': false
                    },
                    null, null, null, null,
                    {
                        "bSortable": false
                    }, // edit,delete....

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
