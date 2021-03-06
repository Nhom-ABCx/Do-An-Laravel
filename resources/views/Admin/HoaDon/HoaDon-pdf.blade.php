<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 1</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-size: 12px;
            font-family: DejaVu Sans;
            /* font chu de hien thi UTF-8 tren pdf */
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 70px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            /* white-space: nowrap; */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
            ;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

    </style>
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img src="https://previews.123rf.com/images/nitarismayanti/nitarismayanti2006/nitarismayanti200600129/150364199-.jpg?fj=1">
        </div>
        <h1>Người nhận: {{ $hoaDon->DiaChi->TenNguoiNhan }}</h1>
        <div id="company" class="clearfix">
            <div>Suha Shop</div>
            <div>Địa chỉ tại abc/xyz Đường 123</div>
            <div>(602) 519-0450</div>
            <div><a href="mailto:ShuhaShop@example.com">ShuhaShop@example.com</a></div>
        </div>
        <div id="project" style="width: 50%;">
            <div><span>Mã đơn hàng</span> {{ $hoaDon->id }}</div>
            <div><span>Khách</span> {{ $hoaDon->DiaChi->KhachHang->HoTen ?? $hoaDon->DiaChi->KhachHang->Username }}</div>
            <div><span>Địa chỉ giao</span>
                {{ $hoaDon->DiaChi->DiaChiChiTiet }}
                @if (!empty($hoaDon->DiaChi->PhuongXa)), {{ $hoaDon->DiaChi->PhuongXa }}  @endif
                @if (!empty($hoaDon->DiaChi->QuanHuyen)), {{ $hoaDon->DiaChi->QuanHuyen }}  @endif
                @if (!empty($hoaDon->DiaChi->TinhThanhPho)), {{ $hoaDon->DiaChi->TinhThanhPho }}  @endif
            </div>
            <div><span>Số điện thoại</span> {{ $hoaDon->DiaChi->Phone }}</div>
            <div><span>Ngày đặt</span> {{ $hoaDon->created_at->format('d-m-Y') }}</div>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th class="service">Sản phẩm</th>
                    <th class="desc">Số lượng</th>
                    <th>Giá bán</th>
                    <th>Giá giảm voucher</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dsChiTietHD as $item)
                    <tr>
                        <td class="service">{{ $item->SanPham->TenSanPham }}</td>
                        <td class="qty">{{ $item->SoLuong }}</td>
                        <td class="unit">{{ number_format($item->GiaBan) }}</td>
                        <td class="unit">{{ number_format($item->GiaGiam) }}</td>
                        <td class="total">{{ number_format($item->ThanhTien) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="grand total">Tổng tiền ({{$hoaDon->TongSoLuong}} SP)</td>
                    <td class="grand total">{{number_format($hoaDon->TongTien)}}</td>
                </tr>
            </tbody>
        </table>
        <div id="notices">
            <div>Lưu ý:</div>
            <div class="notice">Lưu ý gì gì đó đó</div>
        </div>
    </main>
    <footer>
        Hóa đơn này được tạo trên máy tính, nó hợp lệ không cần chữ ký và con dấu.
    </footer>
</body>

</html>
