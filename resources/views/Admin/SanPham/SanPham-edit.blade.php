{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Edit-Sản Phẩm')

@section('headThisPage')
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    {{-- image show --}}
    <link rel="stylesheet" href="/storage/assets/css/colorbox.css" />
    {{-- image show end --}}
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
                    <a href="{{ route('Home.index') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('SanPham.index') }}">Quản lý sản phẩm</a>
                </li>

                @if (URL::current() == route('SanPham.create'))
                    <li class="active">Thêm</li>
                @else
                    <li>
                        <a href="{{ route('SanPham.edit', ['sanPham' => $sanPham]) }}">{{ $sanPham->id }}</a>
                    </li>

                    <li class="active">Chỉnh sửa</li>
                @endif

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
                    <!-- PAGE CONTENT BEGINS -->
                    {{-- web để search Icon trong template https://fontawesome.com/v3.2/icons/ --}}
                    @if (URL::current() == route('SanPham.create'))
                        <form id="submitForm" class="form-horizontal" role="form" action="{{ route('SanPham.store') }}" method="post" enctype="multipart/form-data">
                        @else
                            <form id="submitForm" class="form-horizontal" role="form" action="{{ route('SanPham.update', $sanPham) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                    @endif
                    @csrf
                    <div class="space-10"></div>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Sản phẩm</h3>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">

                                @if (URL::current() == route('SanPham.create'))
                                    <div class="form-group">
                                        <span class="error-text FileExcel-error"></span>
                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Thêm sản phẩm bằng Excel ? </label>

                                        <div class="col-sm-2">
                                            <input type="file" accept=".xlsx, .xls, .csv, .ods" name="FileExcel">
                                        </div>
                                    </div>

                                    <div class="space-4"></div>
                                @else
                                @endif

                                <div class="form-group">
                                    <span class="error-text TenSanPham-error"></span>
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tên sản phẩm </label>

                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon-coffee"></i>
                                            </span>
                                            <textarea id="form-field-11" class="autosize-transition form-control" placeholder="Nhập tên sản phẩm" name="TenSanPham">
                                                @if (URL::current() == route('SanPham.create'))
@else
{{ $sanPham->TenSanPham }} @endif
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <h4 class="header green clearfix" style="padding: 0 1% 0 1%">
                                        Mô tả sản phẩm
                                        <span class="block pull-right">
                                            <small class="grey middle">Chọn giao diện: &nbsp;</small>

                                            <span class="btn-toolbar inline middle no-margin">
                                                <span data-toggle="buttons" class="btn-group no-margin">
                                                    <label class="btn btn-sm btn-yellow">1<input type="radio" value="1" /></label>
                                                    <label class="btn btn-sm btn-yellow">2<input type="radio" value="2" /></label>
                                                    <label class="btn btn-sm btn-yellow active">3<input type="radio" value="3" /></label>
                                                </span>
                                            </span>
                                        </span>
                                    </h4>

                                    <div class="wysiwyg-editor" id="editor1">
                                        @if (URL::current() == route('SanPham.create'))
                                        @else
                                            {{ $sanPham->MoTa }}
                                        @endif
                                    </div>

                                    <div class="hr hr-double dotted"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-10"></div>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Hình ảnh</h3>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <ul class="ace-thumbnails">

                                        @if (URL::current() == route('SanPham.create'))
                                        @else
                                            @foreach ($sanPham->HinhAnh as $item)
                                                <li id="HinhAnh-{{ $item->id }}">
                                                    <a href="{{ $item->HinhAnh }}" data-rel="colorbox">
                                                        <img style="width:150px;max-height:150px;" alt=" 150x150" src="{{ $item->HinhAnh }}" />
                                                        <div class="text">
                                                            <div class="inner">...</div>
                                                        </div>
                                                    </a>

                                                    <div class="tools tools-bottom">
                                                        {{-- <a href="#">
                                                        <i class="icon-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="icon-paper-clip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="icon-pencil"></i>
                                                    </a> --}}

                                                        <a href="javascript:void(0)" title="Xóa ?" onclick="xoaHinhAnhSanPham({{ $item->id }})">
                                                            <i class="icon-remove red"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <input multiple type="file" accept="image/*" id="id-input-file-3" name="HinhAnh[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-10"></div>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Thông tin chung</h3>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Thuộc tính</label>

                                    <div id="form-thuoctinh" class="col-sm-10">
                                        @if (URL::current() == route('SanPham.create'))
                                        @else
                                            @foreach ($sanPham->ThuocTinh as $key => $value)
                                                <div class="div-thuoctinh">
                                                    <span class="input-icon">
                                                        <input type="text" class="input-xlarge" value="{{ $key }}" name="ThuocTinhChung[0][]">
                                                        <i class="icon-apple blue"></i>
                                                    </span>

                                                    <span class="input-icon input-icon-right">
                                                        <input type="text" class="input-xxlarge" value="{{ $value }}" name="ThuocTinhChung[1][]">
                                                        <i class="icon-android green"></i>
                                                    </span>

                                                    <a href="javascript:void(0)" id="xoa-thuoctinh-{{ $loop->index }}" onclick="xoaTheInputThuocTinh({{ $loop->index }})" class="btn btn-white">
                                                        <i class="icon-trash red"></i>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif

                                        <div id="div-themthuoctinh">
                                            <input type="text" class="input-xlarge" placeholder="Tên" id="txtThuocTinh-Key">

                                            <input type="text" class="input-xxlarge" placeholder="Giá trị" id="txtThuocTinh-Value">

                                            <a href="javascript:void(0)" onclick="themTheInputThuocTinh()" class="btn btn-white" data-rel="tooltip" data-placement="top" title="Thêm mới 1 thuộc tính">
                                                <i class="icon-plus green"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <span class="error-text HangSanXuatId-error"></span>
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Hãng sản xuất</label>

                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon-sort-by-attributes"></i>
                                            </span>

                                            <select class="width-90 chosen-select" id="form-field-select-3" data-placeholder="" name="HangSanXuatId">
                                                <option value="">&nbsp;</option>

                                                @foreach ($lstHangSanXuat as $item)
                                                    <option value="{{ $item->id }}" @if (URL::current() == route('SanPham.create')) @else @if ($item->id == $sanPham->HangSanXuatId) selected @endif @endif>
                                                        {{ $item->TenHangSanXuat }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <span class="error-text LoaiSanPhamId-error"></span>
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Loại sản phẩm
                                    </label>

                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon-sort-by-attributes"></i>
                                            </span>

                                            <select class="width-90 chosen-select" id="form-field-select-3" data-placeholder="" name="LoaiSanPhamId">
                                                <option value="">&nbsp;</option>

                                                @foreach ($lstLoaiSanPham as $item)
                                                    <option value="{{ $item->id }}" @if (URL::current() == route('SanPham.create')) @else @if ($item->id == $sanPham->LoaiSanPhamId) selected @endif @endif>
                                                        {{ $item->TenLoai }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                @if (URL::current() == route('SanPham.create'))
                                @else
                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tổng số lượng tồn </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-foursquare"></i>
                                                </span>

                                                <input type="text" class="form-control center" readonly id="form-input-readonly" value="{{ $sanPham->tongSoLuongTon() }}" />
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                @if (URL::current() == route('SanPham.create'))
                                @else
                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Lượt mua </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-bar-chart"></i>
                                                </span>

                                                <input class="form-control center" readonly type="text" id="form-input-readonly" value="{{ $sanPham->LuotMua }}">
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="space-4"></div>


                                <div class="form-group">
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Trạng thái (Ẩn/Bán) </label>

                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <label class="pull-right inline">
                                                @if (URL::current() == route('SanPham.create'))
                                                    <input id="gritter-light" type="checkbox" class="ace ace-switch ace-switch-4" name="TrangThai" value="1">
                                                @else
                                                    <input id="gritter-light" @if ($sanPham->TrangThai) checked @endif type="checkbox" class="ace ace-switch ace-switch-4" name="TrangThai"
                                                        value="1">
                                                @endif
                                                <span class="lbl"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-10"></div>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Biến thể sản phẩm</h3>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="space-4"></div>

                                <div class="form-group">
                                    <span class="error-text ThuocTinh-error"></span>
                                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Biến thể</label>

                                    <div id="accordion" class="accordion-style1 panel-group col-sm-10">
                                        @if (URL::current() == route('SanPham.create'))
                                        @else
                                            @foreach ($sanPham->ThuocTinhToHop as $thuocTinh)
                                                <div class="panel panel-default" id="xoa-thuoctinh-khac-{{ $loop->index }}">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->index }}">
                                                                <i class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
                                                                &nbsp; <i class=" icon-asterisk smaller-75 green"></i>
                                                                <label id="tenthuoctinh-{{ $loop->index }}"> {{ $thuocTinh }} </label>
                                                                <label style="width: 20px"></label>

                                                                <span id="lstThuocTinh">
                                                                    @foreach ($sanPham->lstThuocTinh()[$loop->index] as $item)
                                                                        <span
                                                                            class="badge badge-{{ collect(['grey', 'success', 'warning', 'danger', 'info', 'purple', 'inverse', 'pink', 'yellow'])->random() }}">
                                                                            {{ $item }}
                                                                        </span>
                                                                    @endforeach
                                                                </span>
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div class="panel-collapse collapse" id="collapse{{ $loop->index }}">
                                                        <div class="panel-body">

                                                            <div class="form-group">
                                                                <label>Tên thuộc tính</label>

                                                                <div>
                                                                    <div class="input-group">
                                                                        <input type="text" class="autosize-transition form-control" placeholder="vd: Size/Color" name="ThuocTinh[]"
                                                                            value="{{ $sanPham->ThuocTinhToHop[$loop->index] }}" style="font-weight: bold;" id="txtTenThuocTinh-{{ $loop->index }}"
                                                                            onchange="inputTenThuocTinhToHopChange({{ $loop->index }})" />


                                                                        <a href="javascript:void(0)" onclick="xoaThuocTinhKhac({{ $loop->index }})" class="input-group-addon red"
                                                                            style="background-color:transparent" title="Xóa thuộc tính">
                                                                            <i class="icon-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label>Giá trị thuộc tính</label>

                                                                <div id="form-thuoctinh-tohop-{{ $loop->index }}">
                                                                    @foreach ($sanPham->lstThuocTinh()[$loop->index] as $item)
                                                                        <div class="input-group" style="margin-bottom: 5px">
                                                                            <input type="text" class="autosize-transition form-control" placeholder="vd: Red/Green/Blue"
                                                                                name="ThuocTinhToHop[{{ $loop->parent->index }}][]" ThuocTinh="{{ $thuocTinh }}" value="{{ $item }}"
                                                                                style="font-weight: bold;" onchange="inputThuocTinhToHopChange({{ $loop->parent->index }})" />

                                                                            <a href="javascript:void(0)" id="xoa-thuoctinh-tohop-{{ $loop->parent->index }}-{{ $loop->index }}"
                                                                                onclick="xoaTheInputBienThe({{ $loop->parent->index }},{{ $loop->index }})" class="input-group-addon red"
                                                                                style="background-color:transparent">
                                                                                <i class="icon-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="input-group" style="margin-bottom: 5px">
                                                                    <input id="txtThemThuocTinh-{{ $loop->index }}" type="text" class="autosize-transition form-control"
                                                                        placeholder="Thêm giá trị khác ?" value="" />

                                                                    <a href="javascript:void(0)" onclick="themTheInputBienThe({{ $loop->index }})" role="button" class="input-group-addon green"
                                                                        data-rel="tooltip" data-placement="bottom" title="Thêm mới 1 thuộc tính">
                                                                        <i class="icon-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                        @if (URL::current() == route('SanPham.create'))
                                            <button onclick="themThuocTinhKhac(this)" type="button" class="btn btn-sm btn-success">
                                                <i class="icon-plus icon-on-right bigger-110"></i>
                                                Thêm thuộc tính khác
                                            </button>
                                        @endif
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="table-responsive">
                                    <table id="BienTheSanPham" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center"><i class="icon-adn"></i></th>
                                                <th><i class="icon-align-left"></i>Mẫu mã</th>
                                                <th><i class="icon-money"></i>Giá bán</th>
                                                <th>
                                                    <i class="icon-check-sign"></i>Trạng thái (Ẩn/Bán)
                                                    <label class="pull-right inline">
                                                        <input type="checkbox" class="ace ace-switch ace-switch-6" value="1">
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-10"></div>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Sản phẩm</h3>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">

                            </div>
                        </div>
                    </div>



                    <div class="space-4"></div>

                    <div class="clearfix form-actions">
                        <div style="float: right">
                            {{-- <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button> --}}

                            &nbsp; &nbsp; &nbsp;

                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                Lưu
                            </button>
                        </div>
                    </div>
                    </form>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->

    </div><!-- /.main-content -->
@endsection

@section('scriptThisPage')
    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
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
    {{-- cai phần mô tả descipsion với mấy cái của trang web --}}
    @include('Admin.SanPham.script.SanPham-edit-script')



    {{-- image show --}}

    <script src="/storage/assets/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            var colorbox_params = {
                reposition: true,
                scalePhotos: true,
                scrolling: false,
                previous: '<i class="icon-arrow-left"></i>',
                next: '<i class="icon-arrow-right"></i>',
                close: '&times;',
                current: '{current} of {total}',
                maxWidth: '100%',
                maxHeight: '100%',
                onOpen: function() {
                    document.body.style.overflow = 'hidden';
                },
                onClosed: function() {
                    document.body.style.overflow = 'auto';
                },
                onComplete: function() {
                    $.colorbox.resize();
                }
            };

            $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
            $("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>"); //let's add a custom loading icon

            /**$(window).on('resize.colorbox', function() {
                try {
                    //this function has been changed in recent versions of colorbox, so it won't work
                    $.fn.colorbox.load();//to redraw the current frame
                } catch(e){}
            });*/
        })
    </script>

    {{-- image show end --}}
@endsection
