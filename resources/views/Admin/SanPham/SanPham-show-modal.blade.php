<div id="showSanPham" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width: 53%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">{{ $sanPham->TenSanPham }}</h4>
            </div>
            <div class="modal-body overflow-visible">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">

                        <label>Hình ảnh</label>
                        <div class="space"></div>
                        @foreach ($sanPham->HinhAnh as $hinhAnh)
                            <img src='{{ $hinhAnh->HinhAnh }}' width='130' height='130'>
                        @endforeach

                        <div class="space"></div>
                        <label>Thuộc tính: {{ collect($sanPham->ThuocTinhToHop)->join(' | ') }}</label>
                        {{-- -- --}}
                        <label>Xuất ra các tổ hợp sản phẩm như tgdd</label>
                    </div>

                    <div class="col-xs-12 col-sm-7">
                        <div class="form-group">
                            <label>Mô tả</label>

                            <div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="icon-edit"></i>
                                    </span>

                                    <textarea class="autosize-transition form-control" style="font-weight: bold;" readonly>{{ $sanPham->MoTa }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Hãng sản xuất</label>
                            <label style="float: right">Loại sản phẩm</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="{{ $sanPham->HangSanXuat->TenHangSanXuat }}" />
                                    <i class="icon-dashboard pink"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="{{ $sanPham->LoaiSanPham->TenLoai }}" />
                                    <i class="icon-gamepad orange"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tổng số lượng tồn</label>
                            <label style="float: right">Tổng lượt mua</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="{{ $sanPham->tongSoLuongTon() }}" />
                                    <i class="icon-bar-chart pink"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="{{ $sanPham->LuotMua }}" />
                                    <i class="icon-leaf green"></i>
                                </span>
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label>Giá nhập</label>
                            <label style="float: right">Giá bán</label>

                            <div>
                                <span class="input-icon">
                                    <input class="input-large" style="font-weight: bold;" readonly type="text" value="{{ number_format($sanPham->GiaNhap) }}" />
                                    <i class="icon-credit-card red"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-large" style="text-align:right; font-weight: bold;" readonly type="text" value="{{ number_format($sanPham->GiaBan) }}" />
                                    <i class="icon-money blue"></i>
                                </span>
                            </div>
                        </div> --}}

                        <label>Thuộc tính</label>
                        @foreach ($sanPham->ThuocTinh as $key => $value)
                            <div class="form-group">
                                <span class="input-icon">
                                    <input class="input-medium" style="font-weight: bold;" readonly type="text" value="{{ $key }}" />
                                    <i class="icon-apple blue"></i>
                                </span>
                                <span class="input-icon input-icon-right">
                                    <input class="input-xlarge" style="text-align:right; font-weight: bold;" readonly type="text" value="{{ $value }}" title="{{ $value }}" />
                                    <i class="icon-android green"></i>
                                </span>
                            </div>
                        @endforeach

                        <div class="form-group">
                            <label>Ngày tạo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <input class="form-control" style="font-weight: bold;" readonly type="text" value="{{ $sanPham->created_at }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
