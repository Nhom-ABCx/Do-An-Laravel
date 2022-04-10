{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('Admin.layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
    {{-- đoạn include Link chỉ dành cho trang tránh gây lỗi CSS --}}
@endsection

@section('body')
    {{-- Trang nay la trang BODY --}}
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
                <a href="#">Thêm loại sản phẩm</a>
                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            {{-- <li class="active">CT-Khuyến mãi</li> --}}
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
            <div class="span4">
                <div class="pull">
                    <a type="button" class="btn btn-info " href="{{ route('LoaiSanPham.index') }}"><i class="fa fa-angle-double-left"></i> Back</a>
                </div>
                <form action="{{ route('LoaiSanPham.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4>Thêm loại sản phẩm</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Tên loại</label>
                                </div>

                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        <textarea name="TenLoai" cols="50" rows="3"></textarea>
                                    </div>
                                    @if ($errors->has('TenLoai'))
                                        <i class="icon-remove bigger-110 red"> {{ $errors->first('TenLoai') }}</i>
                                    @endif
                                </div>
                                <hr />
                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Mô tả</label>
                                </div>

                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        <textarea name="MoTa" cols="50" rows="3"></textarea>
                                    </div>
                                    @if ($errors->has('MoTa'))
                                        <i class="icon-remove bigger-110 red"> {{ $errors->first('MoTa') }}</i>
                                    @endif
                                </div>
                                <hr />
                                <button class="btn btn-primary " type="submit"><i class="fa fa-check-square-o"></i>
                                    Thêm</button>
                            </div>
                        </div>
                </form>
            </div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@endsection

@section('scriptThisPage')
    {{-- Đoạn script chỉ xài cho trang --}}
@endsection
