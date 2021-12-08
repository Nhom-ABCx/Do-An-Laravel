{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Create_CT-Khuyen-Mai')

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
                <a href="#">Forms</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            <li class="active">Thêm chương tình khuyến mãi</li>
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
                <a class="btn btn-primary" href="{{ route('KhuyenMai.index') }}"> Back</a>
            </div>
            <div class="page-header position-relative">
                <h1>
                    Thêm chương trình khuyến mãi mới
                </h1>

            </div><!-- /.page-header -->

            <div class="row-fluid">
                <div class="span12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form action="{{ route('KhuyenMai.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tên Chương Trình KM</strong>
                                    <input type="text" name="TenChuongTrinh" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mô tả</strong>
                                    <input type="text" name="MoTa" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ngày bắt đầu</strong>
                                    <input type="date" name="FromDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ngày kết thúc</strong>
                                    <input type="date" name="ToDate" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                    </form>
                </div><!-- /.span -->
            </div><!-- /.row-fluid -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@endsection

@section('scriptThisPage')

@endsection
