{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Edit_CT-Khuyen-Mai')

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
                <a href="#">CT-Khuyến mãi</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            <li class="active">Edit CT-Khuyến Mãi</li>
        </ul><!-- .breadcrumb -->

<<<<<<< HEAD
    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="icon-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- #nav-search -->
    <div class="page-content">
        <div class="span4">
            <div class="pull">
                <a type="button" class="btn btn-info " href="{{ route('KhuyenMai.index') }}"><i class="fa fa-angle-double-left"></i> Back</a>
            </div>
            <form class="form-horizontal" role="form" action="{{route('KhuyenMai.update',$ctkm)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="widget-box">
                    <div class="widget-header">
                        <h4>Edit CT-Khuyến mãi</h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="row-fluid">
                                <label for="id-date-picker-1">Tên chương trình</label>
                            </div>

                            <div class="control-group">
                                <div class="row-fluid input-append">
                                    <input name="TenChuongTrinh"  value="{{$ctkm->TenChuongTrinh}}" type="text" />
                                </div>
                            </div>
                            <hr />
                            <div class="row-fluid">
                                <label for="id-date-picker-1">Mô tả</label>
                            </div>

                            <div class="control-group">
                                <div class="row-fluid input-append">
                                    <input type="text"  value="{{$ctkm->MoTa}}"   name="MoTa" />
                                </div>
                            </div>
                            <hr />

                            <div class="row-fluid">
                                <label for="id-date-range-picker-1">Ngày bắt đầu</label>
                            </div>

                            <div class="control-group">
                                <div class="row-fluid input-prepend">
                                    <input class="span10" type="date" value="{{$ctkm->FromDate}}" name="FromDate" id="id-date-range-picker-1" />
                                </div>
                            </div>
                            <hr />
                            <div class="row-fluid">
                                <label for="id-date-range-picker-1">Ngày kết thúc</label>
                            </div>

                            <div class="control-group">
                                <div class="row-fluid input-prepend">
                                    <input class="span10" type="date" value="{{$ctkm->ToDate}}" name="ToDate" id="id-date-range-picker-1" />
                                </div>
                            </div>
                            <hr />
                            <button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i> Hoàn tất </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
=======
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
                <a class="btn btn-primary" href="{{ route('KhuyenMai.index') }}"> Back</a>
            </div>
            <div class="page-header position-relative">
                <h1>
                    Edit CT-khuyến mãi
                </h1>

            </div><!-- /.page-header -->

            <div class="row-fluid">
                <div class="span12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form action="{{ route('KhuyenMai.update', $ctkm) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tên Chương Trình KM</strong>
                                    <input type="text" name="TenChuongTrinh" value="{{ $ctkm->TenChuongTrinh }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mô tả</strong>
                                    <input type="text" name="MoTa" value="{{ $ctkm->MoTa }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ngày bắt đầu</strong>
                                    <input type="date" name="FromDate" value="{{ $ctkm->FromDate }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ngày kết thúc</strong>
                                    <input type="date" name="ToDate" value="{{ $ctkm->ToDate }}" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                    </form>
                </div><!-- /.span -->
            </div><!-- /.row-fluid -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
>>>>>>> 84e15b2f1dec31940231adf050f0a009a7c8c659
@endsection

@section('scriptThisPage')

@endsection
