{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
    {{-- đoạn include Link chỉ dành cho trang tránh gây lỗi CSS --}}
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
                    <a href="#">Home</a>
                </li>

                <li class="active">Khách Hàng</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>
        <div class="col-xs-12">
            <h3 class="header smaller lighter blue">Khách hàng</h3>
            <div class="page-content">
                <div class="row">
                    <form class="form-inline"
                        action="{{ request()->is('KhuyenMaii/DaXoa') ? route('KhuyenMai.DaXoa') : route('KhuyenMai.index') }}"
                        method="get">

                        @if (request()->is('KhuyenMaii/DaXoa'))
                            <a class="btn btn-inverse" href="{{ route('KhuyenMai.index') }}"> Black</a>
                        @else
                            <a href="{{ route('KhuyenMai.DaXoa') }}" class="btn btn-inverse">
                                <i class="icon-trash"></i>
                                Danh sách đen
                            </a>
                        @endif
                    </form>

                    <hr>
                    <div class="table-header">
                        Bảng Chương Trình Khuyến mãi
                    </div>

                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-align-left"></i>
                                        Username
                                    </th>

                                    <th>
                                        <i class="fa fa-file-text-o"></i>
                                        Email
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar"></i>
                                        Phone
                                    </th>
                                    <th>
                                        <i class="fa fa-calendar-check-o"></i>
                                        Mật khẩu
                                    </th>
                                    <th>
                                        <i class="fa fa-pencil"></i>
                                        Họ tên
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Ngày sinh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Giới tính
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        Hình ảnh
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        create at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        update at
                                    </th>
                                    <th>
                                        <i class="fa fa-check-square-o"></i>
                                        delete at
                                    </th>
                                    {{-- <th>
                                        <i class="fa fa-trash"></i>
                                        deleted_at
                                    </th> --}}
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- {{ dd($khachHang) }} --}}
                                @foreach ($khachHang as $item)
                                    <tr>
                                        <td>{{ $item->Username }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Phone }}</td>
                                        <td>{{ $item->MatKhau }}</td>
                                        <td>{{ $item->HoTen }}</td>
                                        <td>{{ $item->NgaySinh }}</td>
                                        <td>{{ $item->GioiTinh }}</td>
                                        <td>{{ $item->DiaChi }}</td>
                                        <td>{{ $item->HinhAnh }}</td>
                                        <td>{{ $item->MatKhau }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        {{-- <td>{{ $item->deleted_at }}</td> --}}
                                        @if (request()->is('KhuyenMaii/DaXoa'))
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="{{ route('KhuyenMai.KhoiPhuc', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        {{-- @method("PUT") --}}
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        @else
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="fa fa-plus"></i>
                                                    </a>

                                                    <a class="green" href="{{ route('KhuyenMai.edit', $item) }}"
                                                        title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="{{ route('KhuyenMai.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-link red" title="Xoá"><i
                                                                class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul
                                                            class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                    title="View">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                    title="Edit">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                    title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.main-content -->
@endsection

@section('scriptThisPage')
    {{-- Đoạn script chỉ xài cho trang --}}
@endsection
