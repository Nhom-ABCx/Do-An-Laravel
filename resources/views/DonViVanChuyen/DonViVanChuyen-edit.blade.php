{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
@endsection

@section('body')
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
        <a href="#">Đơn vị vận chuyển</a>

        <span class="divider">
            <i class="icon-angle-right arrow-icon"></i>
        </span>
    </li>
    <li class="active">Edit-Đơn vị vận chuyển</li>
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
        <a class="btn btn-primary" href="{{ route('DonViVanChuyen.index') }}"> Back</a>
    </div>
    <div class="page-header position-relative">
        <h1>
            Edit-Đơn vị vận chuyển
        </h1>

    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            {{-- web để search Icon trong template https://fontawesome.com/v3.2/icons/ --}}

            <form class="form-horizontal" role="form" action="{{ route('DonViVanChuyen.update',$dvvc) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tên đơn vị </label>

                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-coffee"></i>
                            </span>

                            <input class="form-control" type="text" placeholder="Nhập tên đơn vị vận chuyển" value="{{ $dvvc->TenDonViVanChuyen }}" name="TenDonViVanChuyen" />
                        </div>
                    </div>
                    @if ($errors->has('TenDonViVanChuyen'))
                    <i class="icon-remove bigger-110 red"> {{ $errors->first('TenDonViVanChuyen') }}</i>
                    @endif
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Website </label>

                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-edit"></i>
                            </span>

                            <input class="form-control" type="text" placeholder="Nhập website" value="{{ $dvvc->Website }}" name="Website" />
                        </div>
                    </div>
                    @if ($errors->has('Website'))
                    <i class="icon-remove bigger-110 red"> {{ $errors->first('Website') }}</i>
                    @endif
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Email </label>

                    <div class="col-sm-3">
                        <div class="input-group">
                        <span class="input-group-addon">
                                <i class="fa fa-mail-reply-all"></i>
                        </span>
                        {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner3" --}}
                        <input type="text"  id="spinner3" value="{{$dvvc->Email  }}" name="Email" />
                        </div>
                        
                    </div>
                    @if ($errors->has('Email'))
                    <i class="fa fa-mail-reply-all"> {{ $errors->first('Email') }}</i>
                    @endif
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Phone </label>

                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-credit-card"></i>
                            </span>

                            {{-- số hiển thị của cái này thì chỉnh ở dưới javascript "spinner1" --}}
                            <input type="text"  id="spinner1" value="{{$dvvc->Phone}}" name="Phone" />
                        </div>
                    </div>
                    @if ($errors->has('Phone'))
                    <i class="icon-remove bigger-110 red"> {{ $errors->first('Phone') }}</i>
                    @endif
                </div>
                <div class="space-4"></div>

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
    Đoạn script chỉ xài cho trang
@endsection

