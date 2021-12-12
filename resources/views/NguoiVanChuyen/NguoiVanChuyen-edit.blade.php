{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
<!-- đoạn include Link chỉ dành cho trang tránh gây lỗi CSS -->
@endsection

@section('body')
<!-- Trang nay la trang BODY -->
<div class="main-content">

    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>

            <span class="divider">
                <i class="icon-angle-right arrow-icon"></i>
            </span>
        </li>

        <li>
            <a href="#">Vận chuyển</a>

            <span class="divider">
                <i class="icon-angle-right arrow-icon"></i>
            </span>
        </li>
        <li class="active">Edit người vận chuyển</li>
    </ul><!-- .breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="icon-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- #nav-search -->
    <div class="page-content">
        <div class="pull">
            <a class="btn btn-primary" href="{{ route('NguoiVanChuyen.index') }}"> Back</a>
        </div>
        <div class="page-header position-relative">
            <h1>
                Thêm người vận chuyển mới
            </h1>

        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                {{-- web để search Icon trong template https://fontawesome.com/v3.2/icons/ --}}

                <form class="form-horizontal" role="form" action="{{ route('NguoiVanChuyen.update',$nvc) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Họ tên </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-coffee"></i>
                                </span>

                                <input class="form-control" type="text" placeholder="Nhập tên người vận chuyển " value="{{$nvc->HoTen }}" name="HoTen" />
                            </div>
                        </div>
                        @if ($errors->has('HoTen'))
                        <i class="icon-remove bigger-110 red"> {{ $errors->first('HoTen') }}</i>
                        @endif
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Ngày sinh </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-edit"></i>
                                </span>

                                <input class="form-control" type="date" value="{{ $nvc->NgaySinh}}" name="NgaySinh" />
                            </div>
                        </div>
                        @if ($errors->has('NgaySinh'))
                        <i class="icon-remove bigger-110 red"> {{ $errors->first('NgaySinh') }}</i>
                        @endif
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Giới tính</label>
                        <div class="col-sm-3">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio"@if ($nvc->GioiTinh==1) checked==true
                                    
                                @endif value="1"  id="male" name="GioiTinh">
                                <label class="custom-control-label" for="male">Nam</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" @if ($nvc->GioiTinh==0) checked==true
                                    
                                @endif value="0" id="female" name="GioiTinh">
                                <label class="custom-control-label" for="female">Nữ</label>
                            </div>
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Địa chỉ </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-credit-card"></i>
                                </span>

                                {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner1" --}}
                                
                                <input type="text" placeholder="Nhập địa chỉ" id="spinner1" value="{{$nvc->DiaChi}}" name="DiaChi" />
                            </div>
                        </div>
                        @if ($errors->has('Diachi'))
                        <i class="icon-remove bigger-110 red"> {{ $errors->first('DiaChi') }}</i>
                        @endif
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Hình ảnh </label>

                        <div class="col-sm-2">
                            <input type="file" accept="image/*" id="id-input-file-3" name="HinhAnh">
                        </div>
                        <img style="width:150px;max-height:150px;object-fit:contain" src="{{ $nvc->HinhAnh }}" alt="">
                        @if ($errors->has('HinhAnh'))
                        <i class="icon-remove bigger-110 red"> {{ $errors->first('HinhAnh') }}</i>
                        @endif
                        <div id="displayImage"></div>
                    </div>


                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Số điện thoại</label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-bookmark"></i>
                                </span>

                                {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner1" --}}
                                <input type="text" id="spinner1" value="{{ $nvc->Phone }}" name="Phone" />
                            </div>
                        </div>
                        @if ($errors->has('Phone'))
                        <i class="icon-remove bigger-110 red"> {{ $errors->first('DiaChi') }}</i>
                        @endif
                    </div>

                    <div class="space-4"></div>

                    <div class="from-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">DVVC</label>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-fighter-jet"></i>
                                </span>
                                <select name="DonViVanChuyenId">
                                    <option value="">&nbsp;</option>
                                    @foreach ($dvvc as $item )
                                    <option value="{{$item->id}}" @if ($item->id == $nvc->DonViVanChuyenId) selected @endif>
                                        {{ $item->TenDonViVanChuyen }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <br>
                    <div class="clearfix form-actions">
                        <div class="col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
@endsection

@section('scriptThisPage')
<!-- Đoạn script chỉ xài cho trang -->
<!--[if lte IE 8]>
              <script src="/storage/assets/js/excanvas.min.js"></script>
              <![endif]-->

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
<!-- Đoạn script chỉ xài cho trang -->

<script type="text/javascript">
    jQuery(function($) {
        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop images here or click to choose',
            btn_change: null,
            no_icon: 'icon-picture',
            droppable: true,
            thumbnail: 'small' //large | fit
                //,icon_remove:null//set null, to hide remove/reset button
                /**,before_change:function(files, dropped) {
                    //Check an example below
                    //or examples/file-upload.html
                    return true;
                }*/
                /**,before_remove : function() {
                    return true;
                }*/
                ,
            preview_error: function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function() {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });
    });
</script>
@endsection