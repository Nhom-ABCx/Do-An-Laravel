{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Edit_HangSanXuat')

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
                <a href="#">Hãng Sản Xuất</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            <li class="active">Edit Hãng Sản Xuất</li>
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
                <a class="btn btn-primary" href="{{ route('HangSanXuat.index') }}"> Back</a>
            </div>
            <div class="page-header position-relative">
                <h1>
                    Edit Hãng Sản Xuất
                </h1>

            </div><!-- /.page-header -->

            <div class="row-fluid">
                <div class="span12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form action="{{ route('HangSanXuat.update', $hsx) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tên Hãng</strong>
                                    <input type="text" name="Ten" value="{{ $hsx->Ten }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Địa Chỉ</strong>
                                    <input type="text" name="DiaChi" value="{{ $hsx->DiaChi }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email</strong>
                                    <input type="text" name="Email" value="{{ $hsx->Email }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone</strong>
                                    <input type="text" name="Phone" value="{{ $hsx->Phone }}" class="form-control">
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
