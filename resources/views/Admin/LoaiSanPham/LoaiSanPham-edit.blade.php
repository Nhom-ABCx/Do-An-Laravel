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
                <a href="#">Edit loại sản phẩm</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            {{-- <li class="active">Edit CT-Khuyến Mãi</li> --}}
        </ul><!-- .breadcrumb -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input"
                        autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
        <div class="page-content">
            <div class="span4">
                <div class="pull">
                    <a type="button" class="btn btn-info " href="{{ route('LoaiSanPham.index') }}"><i
                            class="fa fa-angle-double-left"></i> Back</a>
                </div>
                <form class="form-horizontal" role="form" action="{{ route('LoaiSanPham.update', $loaiSanPham) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4>Edit loại sản phẩm</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Tên loại</label>
                                </div>

                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        <textarea id="form-field-11" class="autosize-transition form-control"
                                            name="TenLoai">{{ $loaiSanPham->TenLoai }}</textarea>
                                    </div>
                                </div>
                                <hr />

                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Mô tả</label>
                                </div>
                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        {{-- <input type="text" value="{{ $ctkm->MoTa }}" name="MoTa" /> --}}
                                        <textarea id="form-field-11" class="autosize-transition form-control"
                                            name="MoTa">{{ $loaiSanPham->MoTa }}</textarea>
                                    </div>
                                </div>
                                <hr />
                                <button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i> Hoàn tất
                                </button>
                            </div>
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
