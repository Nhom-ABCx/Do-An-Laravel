{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'QL Sản phẩm')

@section('headThisPage')
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
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
                @if (request()->is('Admin/SanPhamm/DaXoa'))
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
                                <form class="form-inline" action="{{ request()->is('Admin/SanPhamm/DaXoa') ? route('SanPham.DaXoa') : route('SanPham.index') }}" method="get">
                                    <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm sản phẩm
                                    </a>
                                    @if (request()->is('Admin/SanPhamm/DaXoa'))
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

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-file-text-alt"></i>Mô tả</th>
                                    <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                                    <th><i class="icon-money"></i>Giá nhập</th>
                                    <th><i class="icon-money"></i>Giá bán</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-bar-chart"></i>Lượt mua</th>
                                    <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                    <th><i class="icon-android"></i>Loại sản phẩm</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày thêm</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày sửa</th>
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
                                        <td>{{ number_format($item->GiaNhap) }}</td>
                                        <td>{{ number_format($item->GiaBan) }}</td>
                                        <td>
                                            <img src='{{ $item->HinhAnh }}' alt="{{ $item->HinhAnh }}" width='100' height='100'>
                                        </td>
                                        <td>{{ $item->LuotMua }}</td>
                                        <td>{{ $item->HangSanXuat->Ten }}</td>
                                        <td>{{ $item->LoaiSanPham->TenLoai }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        @if (request()->is('Admin/SanPhamm/DaXoa'))
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}" method="post">
                                                        @csrf
                                                        {{-- @method("PUT") --}}
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                                    </form>

                                                    <form id="form" action="{{ route('SanPham.XoaVinhVien', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn-link red bootbox-options" title="Xóa vĩnh viễn"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}" method="post">
                                                                    @csrf
                                                                    {{-- @method("PUT") --}}
                                                                    <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>

                                                            <li>
                                                                <form id="form" action="{{ route('SanPham.XoaVinhVien', $item->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="tooltip-error btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn"><i
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
                                                    <a href="javascript:void(0)" onclick="showSanPham({{ $item->id }})" role="button" data-toggle="modal" class="tooltip-info" data-rel="tooltip"
                                                        title="Xem chi tiết">
                                                        <span class="blue">
                                                            <i class="icon-zoom-in bigger-120"></i>
                                                        </span>
                                                    </a>

                                                    <a class="green" href="{{ route('SanPham.edit', $item) }}" data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-130"></i></button>
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
                                                                <a href="javascript:void(0)" onclick="showSanPham({{ $item->id }})" role="button" data-toggle="modal" class="tooltip-info"
                                                                    data-rel="tooltip" title="Xem chi tiết">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('SanPham.edit', $item) }}" class="tooltip-success" data-rel="tooltip" title="Chỉnh sửa">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-120"></i></button>
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

            <div id="modal-form" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">Thêm sản phẩm</h4>
                        </div>

                        <div class="modal-body overflow-visible">
                            <form class="form-horizontal" role="form" action="{{ route('SanPham.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PATCH') --}}
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <label>Hình ảnh</label>
                                        <input type="file" accept="image/*" name="HinhAnh">
                                        @if ($errors->has('HinhAnh'))
                                            <i class="icon-remove bigger-110 red"> {{ $errors->first('HinhAnh') }}</i>
                                        @endif
                                    </div>

                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon green">
                                                        <i class="icon-coffee"></i>
                                                    </span>
                                                    <textarea class="autosize-transition form-control" placeholder="Nhập tên sản phẩm" name="TenSanPham">{{ old('TenSanPham') }}</textarea>
                                                </div>
                                            </div>
                                            @if ($errors->has('TenSanPham'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('TenSanPham') }}</i>
                                            @endif
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label>Mô tả</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon blue">
                                                        <i class="icon-edit"></i>
                                                    </span>

                                                    <textarea class="autosize-transition form-control" placeholder="Nhập mô tả" name="MoTa">{{ old('MoTa') }}</textarea>
                                                </div>
                                            </div>
                                            @if ($errors->has('MoTa'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('MoTa') }}</i>
                                            @endif
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label>Hãng sản xuất</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon red">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="chosen-select" data-placeholder="" name="HangSanXuatId">
                                                        <option value="">&nbsp;</option>
                                                        @foreach ($lstHangSanXuat as $item)
                                                            <option value="{{ $item->id }}" @if ($item->id == old('HangSanXuatId')) selected @endif>
                                                                {{ $item->Ten }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('HangSanXuatId'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('HangSanXuatId') }}</i>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Loại sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon pink">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="chosen-select" data-placeholder="" name="LoaiSanPhamId">
                                                        <option value="">&nbsp;</option>
                                                        @foreach ($lstLoaiSanPham as $item)
                                                            <option value="{{ $item->id }}" @if ($item->id == old('LoaiSanPhamId')) selected @endif>
                                                                {{ $item->TenLoai }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('LoaiSanPhamId'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('LoaiSanPhamId') }}</i>
                                            @endif
                                        </div>
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

            <div id="showModal"></div>
        </div><!-- /.main-content -->

    @endsection

    @section('scriptThisPage')
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>
        <script src="/storage/assets/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="/storage/assets/js/date-time/bootstrap-timepicker.min.js"></script>
        <script src="/storage/assets/js/date-time/moment.min.js"></script>
        <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
        <script src="/storage/assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="/storage/assets/js/jquery.knob.min.js"></script>
        <script src="/storage/assets/js/jquery.autosize.min.js"></script>
        <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/storage/assets/js/bootstrap-tag.min.js"></script>
        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'icon-cloud-upload',
                    droppable: true,
                    thumbnail: 'large'
                })

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
            });
        </script>
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

                @if (!empty($request['SanPhamMoi']))
                    toastr.success('Thêm sản phẩm {{ $request['SanPhamMoi'] }} thành công', 'Thành công', {
                    timeOut: 3000
                    });
                @endif
            });
        </script>
        {{-- thông báo error end --}}

        @include("Admin.SanPham.script.SanPham-show-script")
    @endsection
