{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Chi tiết hóa đơn nhập')

@section('headThisPage')
    {{-- datetime picker --}}
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    {{-- datetime picker end --}}

    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/jquery.gritter.css" />
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

        /* hien thi hinh anh khi select */
        .hinhAnh {
            display: none;
        }

        select option:first-child {
            display: none;
        }

        /* .hinhAnh img {
                                                        max-width: 150px;
                                                    } */

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
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('HoaDonNhap.index') }}">Quản lý hóa đơn nhập</a>
                </li>
                <li class="active">Chi tiết hóa đơn nhập</li>
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
                            <h3 class="header smaller lighter blue">Chi tiết hóa đơn nhập</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                    <i class="icon-plus"></i>
                                    Thêm sản phẩm vào chi tiết hóa đơn nhập
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng chi tiết hóa đơn nhập
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-bar-chart"></i>Số lượng</th>
                                    <th><i class="icon-money"></i>Giá nhập</th>
                                    <th><i class="icon-bar-chart"></i>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dsChiTietHD as $item)
                                    @php
                                        App\Http\Controllers\SanPhamController::fixImage($item->SanPham);
                                    @endphp
                                    <tr>
                                        <td class="center">{{ $item->SanPham->id }}</td>
                                        <td>{{ $item->SanPham->TenSanPham }}</td>
                                        <td>
                                            <img src='{{ $item->SanPham->HinhAnh }}' alt="{{ $item->SanPham->HinhAnh }}" width='100' height='100'>
                                        </td>
                                        <td>{{ $item->SoLuong }}</td>
                                        <td>{{ number_format($item->GiaNhap) }}</td>
                                        <td>{{ number_format($item->ThanhTien) }}</td>
                                        <td></td>
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
                        <form action="{{ route('HoaDonNhap.update', $hoaDonNhap) }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">Please fill the following form fields</h4>
                            </div>

                            <div class="modal-body overflow-visible">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="space"></div>

                                        @foreach ($dsSanPham as $item)
                                            <div class="imageSelector show-image output">
                                                <div id="{{ $item->id }}" class="hinhAnh">
                                                    <img src="{{ $item->HinhAnh }}" style="width: 100%" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Sản phẩm</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon-sort-by-attributes"></i>
                                                    </span>

                                                    <select class="width-90 chosen-select" id='imageSelector' name="SanPhamId">
                                                        <option value=''></option>
                                                        @foreach ($dsSanPham as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == old('SanPhamId') ? 'selected' : '' }}>{{ $item->TenSanPham }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->has('SanPhamId'))
                                                    <i class="icon-remove bigger-110 red"> {{ $errors->first('SanPhamId') }}</i>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label for="form-field-first">Số lượng</label>

                                            <div>
                                                {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner3" --}}
                                                <input type="text" class="input-mini" id="spinner3" value="{{ old('SoLuong') }}" name="SoLuong" />
                                            </div>
                                            @if ($errors->has('SoLuong'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('SoLuong') }}</i>
                                            @endif
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label for="form-field-first">Giá nhập</label>

                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon-credit-card"></i>
                                                    </span>

                                                    {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner1" --}}
                                                    <input type="text" class="input-mini" id="spinner1" value="{{ old('GiaNhap') }}" name="GiaNhap" />
                                                </div>
                                            </div>
                                            @if ($errors->has('GiaNhap'))
                                                <i class="icon-remove bigger-110 red"> {{ $errors->first('GiaNhap') }}</i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-sm" data-dismiss="modal">
                                    <i class="icon-remove"></i>
                                    Cancel
                                </button>

                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="icon-ok"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

    @endsection

    @section('scriptThisPage')
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        {{-- datetime picker` --}}
        <script src="/storage/assets/js/chosen.jquery.min.js"></script>
        <script src="/storage/assets/js/date-time/moment.min.js"></script>
        <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
        <script src="/storage/assets/js/jquery.autosize.min.js"></script>
        <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
        <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>

        <script type="text/javascript">
            $('input[name=NgayDat]').daterangepicker().prev().on(ace.click_event, function() {
                $(this).next().focus();
            });
        </script>
        {{-- end datetime picker --}}
        <!-- inline scripts related to this page -->
        {{-- datatable script --}}
        <script type="text/javascript">
            jQuery(function($) {
                var oTable1 = $('#sample-table-2').dataTable({
                    "aoColumns": [
                        null, null,
                        {
                            "bSortable": false
                        },
                        null, null, null,
                        {
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

            /////////modal combobox fix
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

            _valueSL = {{ old('SoLuong') ?? 0 }};
            _valueGN = {{ old('GiaNhap') ?? 0 }};
            $('#spinner1').ace_spinner({
                value: _valueGN,
                min: 0,
                max: 1000000000,
                step: 10000,
                touch_spinner: true,
                icon_up: 'icon-caret-up',
                icon_down: 'icon-caret-down'
            });
            $('#spinner3').ace_spinner({
                value: _valueSL,
                min: 0,
                max: 10000,
                step: 5,
                on_sides: true,
                icon_up: 'icon-plus smaller-75',
                icon_down: 'icon-minus smaller-75',
                btn_up_class: 'btn-success',
                btn_down_class: 'btn-danger'
            });

            // hien thi hinh anh khi select
            $('#imageSelector').change(function() {
                var select = $(this);
                $('.' + select.attr("id") + ' .hinhAnh').hide();
                $('#' + select.val()).show();
            });
        </script>
        {{-- datatable script End --}}

        {{-- thông báo error --}}
        <!-- page specific plugin scripts -->
        <!--[if lte IE 8]>
                                                                                                                                                                      <script src="assets/js/excanvas.min.js"></script>
                                                                                                                                                                      <![endif]-->

        <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/storage/assets/js/bootbox.min.js"></script>
        <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
        <script src="/storage/assets/js/jquery.gritter.min.js"></script>
        <script src="/storage/assets/js/spin.min.js"></script>

        <script type="text/javascript">
            jQuery(function($) {
                @if ($errors->any())
                    $(document).ready(function(){
                    $("#modal-form").modal("show");
                    });

                    @foreach ($errors->all() as $error)
                        $.gritter.add({
                        title: 'Có lỗi xảy ra',
                        text: '{{ $error }}',
                        class_name: 'gritter-error'
                        });
                    @endforeach
                @endif
            });
        </script>
        {{-- thông báo error end --}}
    @endsection
