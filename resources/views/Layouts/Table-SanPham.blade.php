{{-- phai co script moi hien thi day du table --}}
<div class="table-responsive">
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="center"><i class="icon-adn"></i>Id</th>
                <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                <th><i class="icon-file-text-alt"></i>Mô tả</th>
                <th><i class="icon-bar-chart"></i>Số lượng tồn</th>
                <th><i class="icon-money"></i>Giá nhập</th>
                <th><i class="icon-money"></i>Giá bán</th>
                <th><i class="icon-picture"></i>Hình ảnh</th>
                <th><i class="icon-bar-chart"></i>Lượt mua</th>
                <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                <th><i class="icon-android"></i>Loại sản phẩm</th>
                <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Create_at
                </th>
                <th>
                    <i class="icon-time bigger-110 hidden-480"></i>
                    Update_at
                </th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sanPham as $item)

                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->TenSanPham }}</td>
                    <td>{{ $item->MoTa }}</td>
                    <td>{{ $item->SoLuongTon }}</td>
                    <td>{{ number_format($item->GiaNhap) }}</td>
                    <td>{{ number_format($item->GiaBan) }}</td>
                    <td>
                        <img src='{{ $item->HinhAnh }}' alt="{{ $item->HinhAnh }}" width='100' height='100'>
                    </td>
                    <td>{{ $item->LuotMua }}</td>
                    <td>{{ $item->HangSanXuat->Ten }}</td>
                    <td>{{ $item->LoaiSanPham->TenLoai }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    @if (request()->is('SanPhamm/DaXoa'))
                        <td>
                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}" method="post">
                                    @csrf
                                    {{-- @method("PUT") --}}
                                    <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                </form>

                                <form id="form" action="{{ route('SanPham.XoaVinhVien', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn-link red bootbox-options" title="Xóa vĩnh viễn"><i class="icon-trash bigger-130"></i></button>
                                </form>
                            </div>

                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li>
                                            <form action="{{ route('SanPham.KhoiPhuc', $item->id) }}" method="post">
                                                @csrf
                                                {{-- @method("PUT") --}}
                                                <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i class="icon-undo bigger-120"></i></button>
                                            </form>
                                        </li>

                                        <li>
                                            <form id="form" action="{{ route('SanPham.XoaVinhVien', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="tooltip-error btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn"><i class="icon-trash bigger-130"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    @else
                        <td>
                            <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="icon-zoom-in bigger-130"></i>
                                </a>

                                <a class="green" href="{{ route('SanPham.edit', $item) }}" data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                    <i class="icon-pencil bigger-130"></i>
                                </a>

                                <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-130"></i></button>
                                </form>
                                {{-- <a class="red" href="{{ route('SanPham.destroy', $item) }}" data-method="delete">
                                <i class="icon-trash bigger-130"></i>
                            </a> --}}
                            </div>

                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="icon-zoom-in bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('SanPham.edit', $item) }}" class="tooltip-success" data-rel="tooltip" title="Chỉnh sửa">
                                                <span class="green">
                                                    <i class="icon-edit bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <form action="{{ route('SanPham.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-120"></i></button>
                                            </form>
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
