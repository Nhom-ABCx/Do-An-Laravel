<?php

namespace App\Imports;

use App\Models\SanPham;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SanPhamImport implements ToModel, WithHeadingRow
{
    //    https://viblo.asia/p/nhap-xuat-du-lieu-trong-laravel-voi-package-maatwebsiteexcel-6J3ZgoLBZmB
    private $rows = 0; //dem so dong`

    public function headingRow(): int
    {
        //Ở trên, hàm headingRow() có mục đích là sẽ loại bỏ những dòng tiêu đề của bảng,
        //hàm sẽ trả về số hàng mà bạn bỏ qua, như ví dụ ở trên thì mình sẽ bỏ qua hàng chứa thông tin của cột như tên tài khoản,
        // email, mật khẩu... Package cho phép chúng ta sử dụng các từ khóa ở phần tiêu đề để làm khóa mảng của mỗi hàng.
        //Ví dụ trên mình nhập dữ liệu cho thuộc tính username dựa trên cột username hoặc tên tài khoản.
        return 1;
    }

    public function batchSize(): int
    {
        //Khi bạn nhập một tệp lớn đồng nghĩa với việc một số lượng lớn các hàng sẽ được nhập từ đó dẫn đến hậu quả là bị nghẽn
        //hay gọi là thắt cổ chai và điều đó sẽ làm ảnh hưởng đến công việc nhập dữ liệu.
        // Bằng cách implements WithBatchInserts chúng ta sẽ giải quyết được vấn đề đó bằng cách quyết định số lượng dòng
        // sẽ được nhập vào database mỗi lần.
        return 1000;
    }
    public function chunkSize(): int
    {
        //Khác với phần trên, chunk reading sẽ quyết định số lượng dòng sẽ đọc mỗi lần thay vì đọc tất cả rồi lưu tạm vào bộ nhớ,
        //từ đó việc sử dụng bộ nhớ sẽ giảm đi, giúp việc kiểm soát bộ nhớ được tốt hơn.
        return 1000;
    }
    public function model(array $row)
    {
        ++$this->rows; //so' dong`
        return new SanPham([
            'HangSanXuatId' => $row['hangsanxuatid'],
            'LoaiSanPhamId' => $row['loaisanphamid'],
            'TenSanPham' => $row['tensanpham'],
            'ThuocTinh' => $row['thuoctinh'],
            'MoTa' => $row['mota'],
            'ThuocTinhToHop' => $row['ThuocTinhToHop'],
            //'birthday' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birthday'] ?? $row['ngay_sinh'])->format('Y-m-d'),
        ]);
    }
    //tra ve so' dong`
    public function getRowCount(): int
    {
        return $this->rows;
    }
}
