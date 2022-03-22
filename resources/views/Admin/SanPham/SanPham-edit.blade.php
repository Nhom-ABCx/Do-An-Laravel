{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Edit-Sản Phẩm')

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

                <li>
                    <a href="{{ route('SanPham.index') }}">Quản lý sản phẩm</a>
                </li>

                <li>
                    <a href="{{ route('SanPham.show', ['sanPham' => $sanPham]) }}">{{ $sanPham->id }}</a>
                </li>

                <li class="active">Chỉnh sửa</li>
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
                    <form id="submitForm" class="form-horizontal" role="form" action="{{ route('SanPham.update', $sanPham) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tên sản phẩm </label>

                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-coffee"></i>
                                                </span>
                                                <textarea id="form-field-11" class="autosize-transition form-control" placeholder="Nhập tên sản phẩm" name="TenSanPham">{{ $sanPham->TenSanPham }}</textarea>
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

                                        <div class="wysiwyg-editor" id="editor1">{{ $sanPham->MoTa }}</div>

                                        <div class="hr hr-double dotted"></div>
                                        <textarea name="MoTa" style="display:none;"></textarea>
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
                                    <div class="form-group">
                                        @foreach ($sanPham->HinhAnh as $item)
                                            <img style="width:150px;max-height:150px;object-fit:contain;float: left;" src="{{ $item->fixImage() }}" alt="">
                                        @endforeach

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
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Hãng sản xuất
                                        </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-sort-by-attributes"></i>
                                                </span>

                                                <select class="width-90 chosen-select" id="form-field-select-3" data-placeholder="" name="HangSanXuatId">
                                                    <option value="">&nbsp;</option>
                                                    @foreach ($lstHangSanXuat as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $sanPham->HangSanXuatId) selected @endif>
                                                            {{ $item->TenHangSanXuat }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
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
                                                        <option value="{{ $item->id }}" @if ($item->id == $sanPham->LoaiSanPhamId) selected @endif>
                                                            {{ $item->TenLoai }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Thuộc tính</label>

                                        <div id="accordion" class="accordion-style1 panel-group col-sm-10">
                                            @foreach ($sanPham->decodeThuocTinhToHop() as $thuocTinh)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->index }}">
                                                                <i class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
                                                                &nbsp; <i class=" icon-asterisk smaller-75 green"></i> {{ $thuocTinh }}
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
                                                                            value="{{ $sanPham->decodeThuocTinhToHop()[$loop->index] }}" style="font-weight: bold;" />


                                                                        <a href="#" class="input-group-addon red" style="background-color:transparent">
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
                                                                                name="ThuocTinhToHop[{{ $loop->parent->index }}][]" value="{{ $item }}" style="font-weight: bold;"
                                                                                onchange="inputThuocTinhToHopChange({{ $loop->parent->index }})" />

                                                                            <a href="javascript:void(0)" id="xoa-thuoctinh-tohop-{{ $loop->parent->index }}-{{ $loop->index }}"
                                                                                onclick="xoaTheInput({{ $loop->parent->index }},{{ $loop->index }})" class="input-group-addon red"
                                                                                style="background-color:transparent">
                                                                                <i class="icon-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="input-group" style="margin-bottom: 5px">
                                                                    <input id="txtThemThuocTinh-{{ $loop->index }}" type="text" class="autosize-transition form-control"
                                                                        placeholder="Thêm giá trị khác ?" value="" />

                                                                    <a href="javascript:void(0)" onclick="themTheInput({{ $loop->index }})" role="button" class="input-group-addon green"
                                                                        data-rel="tooltip" data-placement="bottom" title="Thêm mới 1 thuộc tính">
                                                                        <i class="icon-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <button onclick="themThuocTinhKhac(this)" type="button" class="btn btn-sm btn-success">
                                                <i class="icon-plus icon-on-right bigger-110"></i>
                                                Thêm thuộc tính khác
                                            </button>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Số lượng tồn </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-foursquare"></i>
                                                </span>

                                                <input type="text" class="form-control center" readonly id="form-input-readonly" value="{{ $sanPham->tongSoLuongTon() }}" />
                                            </div>
                                        </div>
                                    </div>

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


                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Giá Nhập </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-credit-card"></i>
                                                </span>

                                                {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner1" --}}
                                                <input type="text" class="input-mini" id="spinner1" value="{{ $sanPham->GiaNhap }}" name="GiaNhap" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Giá bán </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-money"></i>
                                                </span>

                                                {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner2" --}}
                                                <input type="text" class="input-mini" id="spinner2" value="{{ $sanPham->GiaBan }}" name="GiaBan" />
                                            </div>
                                        </div>
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
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button>

                                &nbsp; &nbsp; &nbsp;

                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Submit
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
    {{-- cai phần mô tả descipsion --}}
    @include('Admin.SanPham.script.SanPham-edit-script')
    <!-- inline scripts related to this page -->

    <script type="text/javascript">
        jQuery(function($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $(".chosen-select").chosen();
            $('#chosen-multiple-style').on('click', function(e) {
                var target = $(e.target).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });


            $('[data-rel=tooltip]').tooltip({
                container: 'body'
            });
            $('[data-rel=popover]').popover({
                container: 'body'
            });

            $('textarea[class*=autosize]').autosize({
                append: "\n"
            });
            $('textarea.limited').inputlimiter({
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });

            $.mask.definitions['~'] = '[+-]';
            $('.input-mask-date').mask('99/99/9999');
            $('.input-mask-phone').mask('(999) 999-9999');
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999", {
                placeholder: " ",
                completed: function() {
                    alert("You typed the following: " + this.val());
                }
            });



            $("#input-size-slider").css('width', '200px').slider({
                value: 1,
                range: "min",
                min: 1,
                max: 8,
                step: 1,
                slide: function(event, ui) {
                    var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small',
                        'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'
                    ];
                    var val = parseInt(ui.value);
                    $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                }
            });

            $("#input-span-slider").slider({
                value: 1,
                range: "min",
                min: 1,
                max: 12,
                step: 1,
                slide: function(event, ui) {
                    var val = parseInt(ui.value);
                    $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                }
            });


            $("#slider-range").css('height', '200px').slider({
                orientation: "vertical",
                range: true,
                min: 0,
                max: 100,
                values: [17, 67],
                slide: function(event, ui) {
                    var val = ui.values[$(ui.handle).index() - 1] + "";

                    if (!ui.handle.firstChild) {
                        $(ui.handle).append(
                            "<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>"
                        );
                    }
                    $(ui.handle.firstChild).show().children().eq(1).text(val);
                }
            }).find('a').on('blur', function() {
                $(this.firstChild).hide();
            });

            $("#slider-range-max").slider({
                range: "max",
                min: 1,
                max: 10,
                value: 2
            });

            $("#eq > span").css({
                width: '90%',
                'float': 'left',
                margin: '15px'
            }).each(function() {
                // read initial values from markup and remove that
                var value = parseInt($(this).text(), 10);
                $(this).empty().slider({
                    value: value,
                    range: "min",
                    animate: true

                });
            });


            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                no_file: 'No File ...',
                btn_choose: 'Choose',
                btn_change: 'Change',
                droppable: false,
                onchange: null,
                thumbnail: false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });

            $('#id-input-file-3').ace_file_input({
                style: 'well',
                btn_choose: 'Kéo thả hình vào đây hoặc click để chọn',
                btn_change: null,
                no_icon: 'icon-picture',
                droppable: true,
                thumbnail: 'large'
            })

            _valueSL = {{ $sanPham->tongSoLuongTon() }};
            _valueGN = 10000;
            _valueGB = 10000;
            $('#spinner0').ace_spinner({
                    value: _valueSL,
                    min: 0,
                    max: 200,
                    step: 10,
                    btn_up_class: 'btn-info',
                    btn_down_class: 'btn-info'
                })
                .on('change', function() {
                    //alert(this.value)
                });
            $('#spinner1').ace_spinner({
                value: _valueGN,
                min: 0,
                max: 1000000000,
                step: 10000,
                touch_spinner: true,
                icon_up: 'icon-caret-up',
                icon_down: 'icon-caret-down'
            });
            $('#spinner2').ace_spinner({
                value: _valueGB,
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



            $('.date-picker').datepicker({
                autoclose: true
            }).next().on(ace.click_event, function() {
                $(this).prev().focus();
            });
            $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function() {
                $(this).next().focus();
            });

            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            }).next().on(ace.click_event, function() {
                $(this).prev().focus();
            });

            $('#colorpicker1').colorpicker();
            $('#simple-colorpicker-1').ace_colorpicker();


            $(".knob").knob();


            //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
            var tag_input = $('#form-field-tags');
            if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
                tag_input.tag({
                    placeholder: tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.variable_US_STATES, //defined in ace.js >> ace.enable_search_ahead
                });
            } else {
                //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') +
                    '" rows="3">' + tag_input.val() + '</textarea>').remove();
                //$('#form-field-tags').autosize({append: "\n"});
            }




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
            /**
            //or you can activate the chosen plugin after modal is shown
            //this way select element becomes visible with dimensions and chosen works as expected
            $('#modal-form').on('shown', function () {
                $(this).find('.modal-chosen').chosen();
            })
            */

            //ajax


            $('#submitForm').on('submit', function(e) {
                //ngan chan form gui di
                e.preventDefault();
                let form = this;

                //truoc khi gui di thi` set value textarea, ko dat trong ham`beforeSend cua ajax dc, ko biet tai sao
                let a = $(form).find('#editor1').html();
                // console.log(a);
                let b = $(form).find('textarea[name="MoTa"]').text(a);

                $.ajax({
                    //gui di voi phuong thuc' cua Form
                    method: $(form).attr('method'),
                    //url = duong dan cua form
                    url: $(form).attr('action'),
                    //du lieu gui di
                    data: new FormData(form),
                    //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                    processData: false,
                    // Kiểu nội dung của dữ liệu được gửi lên server. minh gui len la FormData nen de false
                    contentType: false,
                    //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                    //dataType: 'json',
                    //truoc khi gui di thi thuc hien gi do', o day chinh loi~ = rong~
                    beforeSend: function() {},
                    success: function(response) {
                        window.location.href = response;
                    },
                    error: function(response) {
                        // console.log("request lỗi");
                        // //console.log(response.responseJSON.Username[0]);
                        // $.each(response.responseJSON, function(key, val) {
                        //     $(form).find('span.' + key + '-error').html('<i class="icon-remove bigger-110 red">' + val[0] + '</i>');
                        //     toastr.error(val[0], 'Có lỗi xảy ra', {
                        //         timeOut: 3000
                        //     });
                        // });
                    },
                });
            });
        });

        function inputThuocTinhToHopChange(index) {
            let tag = $('a[href="#collapse' + index + '"] span#lstThuocTinh');
            let html = '';
            $('input[name^="ThuocTinhToHop[' + index + ']"]').each(function() {
                //ngua ngua ve~ mau`
            var colors = ['grey', 'success', 'warning', 'danger', 'info', 'purple', 'inverse', 'pink', 'yellow'];
            var color = colors[Math.floor(Math.random() * colors.length)];

            //noi chuoi~
            html += `<span class="badge badge-` + color + `">` + $(this).val() + `</span>`;
        });
        tag.html(html);
    }

    function themThuocTinhKhac(selectThis) {
        let countDiv = $("#accordion div.panel-default").length;
        // console.log(countDiv);

        // $(`<div class="space-4"></div>`).insertBefore(selectThis);
    }

    function themTheInput(parentIndex) {
        //lay' ra so' luong input-group cua? #form
        var countDiv = $("#form-thuoctinh-tohop-" + parentIndex + " div.input-group").length;

        //them vào sau selector
        $('#form-thuoctinh-tohop-' + parentIndex).append(
            `<div class="input-group" style="margin-bottom: 5px"><input type="text" class="autosize-transition form-control" placeholder="" name="ThuocTinhToHop[` + parentIndex + `][]" value="` +
            $(
                '#txtThemThuocTinh-' + parentIndex).val() + `" style="font-weight: bold;" onchange="inputThuocTinhToHopChange(` + parentIndex +
            `)"/><a href="javascript:void(0)" id="xoa-thuoctinh-tohop-` +
            parentIndex + `-` + countDiv + `"onclick="xoaTheInput(` + parentIndex + `,` + countDiv +
            `)" class="input-group-addon red" style="background-color:transparent"><i class="icon-trash"></i></a></div>`);

            //reset cai the? input lai
            $('#txtThemThuocTinh-' + parentIndex).val('');
            //refesh
            inputThuocTinhToHopChange(parentIndex);
        }

        function xoaTheInput(parentIndex, index) {
            $('#xoa-thuoctinh-tohop-' + parentIndex + '-' + index).parent().remove();
            //refesh
            inputThuocTinhToHopChange(parentIndex);
        }
    </script>
@endsection
