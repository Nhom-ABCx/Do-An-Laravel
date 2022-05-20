<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // /* MaSanPham: DT-Iphone-I3X-20200520-1 */
        //khi insert
        DB::unprepared('CREATE TRIGGER tao_MaSanPham_CTSanPham BEFORE INSERT ON `ct_san_phams` FOR EACH ROW
            BEGIN
                set NEW.MaSanPham=(SELECT CONCAT_WS("-",lsp.Code,
                        hsx.TenHangSanXuat,
                        CONCAT(LEFT(UPPER(sp.TenSanPham), 1),
                        MID(UPPER(sp.TenSanPham), LENGTH(sp.TenSanPham)/2, 1),
                        RIGHT(UPPER(sp.TenSanPham), 1)
                        ),
                        DATE_FORMAT(sp.created_at,"%Y%m%d%H%i%s"),
                        IFNULL((SELECT COUNT(id)+1 from ct_san_phams where SanPhamId=NEW.SanPhamId),1)
                        )
                    from san_phams sp
                    INNER JOIN Loai_San_Phams lsp ON sp.LoaiSanPhamId=lsp.id
                    INNER JOIN hang_san_xuats hsx ON sp.HangSanXuatId=hsx.id
                    WHERE sp.id=NEW.SanPhamId
                    );
            END');

        //khi insert
        DB::unprepared('CREATE TRIGGER thanhTien_CTHoaDon BEFORE INSERT ON `ct_hoa_dons` FOR EACH ROW
            BEGIN
                set
                    NEW.GiaNhap=(select GiaNhap from ct_san_phams b where b.Id=NEW.CTSanPhamId),
                    NEW.GiaBan=(select GiaBan-IFNULL((select b.GiamGia from ct_san_phams as a, ct_chuong_trinh_kms as b WHERE a.id=b.CTSanPhamId and a.id=NEW.CTSanPhamId),0) from ct_san_phams b where b.Id=NEW.CTSanPhamId),
                    NEW.ThanhTien=(NEW.SoLuong*NEW.GiaBan);
            END');
        DB::unprepared('CREATE TRIGGER thanhTien_CTHoaDonNhap BEFORE INSERT ON `ct_hoa_don_nhaps` FOR EACH ROW
            BEGIN
                set NEW.ThanhTien=(NEW.SoLuong*NEW.GiaNhap);
            END');
        //khi update
        DB::unprepared('CREATE TRIGGER thanhTien_CTHoaDon_update BEFORE UPDATE ON `ct_hoa_dons` FOR EACH ROW
            BEGIN
                set
                    NEW.GiaNhap=(select GiaNhap from ct_san_phams b where b.Id=NEW.CTSanPhamId),
                    NEW.GiaBan=(select GiaBan-IFNULL((select b.GiamGia from ct_san_phams as a, ct_chuong_trinh_kms as b WHERE a.id=b.CTSanPhamId and a.id=NEW.CTSanPhamId),0) from ct_san_phams b where b.Id=NEW.CTSanPhamId),
                    NEW.ThanhTien=(NEW.SoLuong*NEW.GiaBan);
            END');
        DB::unprepared('CREATE TRIGGER tongTien_CTHoaDon_afupdate AFTER UPDATE ON `ct_hoa_dons` FOR EACH ROW
            BEGIN
                CALL update_TongTien_HoaDon();
            END');
        DB::unprepared('CREATE TRIGGER thanhTien_CTHoaDonNhap_update BEFORE UPDATE ON `ct_hoa_don_nhaps` FOR EACH ROW
            BEGIN
                set NEW.ThanhTien=(NEW.SoLuong*NEW.GiaNhap);
            END');
        DB::unprepared('CREATE TRIGGER tongTien_CTHoaDonNhap_afupdate AFTER UPDATE ON `ct_hoa_don_nhaps` FOR EACH ROW
            BEGIN
                CALL update_TongTien_HoaDonNhap();
            END');
        //khi delete
        DB::unprepared('CREATE TRIGGER tongTien_CTHoaDon_afdelete AFTER DELETE ON `ct_hoa_dons` FOR EACH ROW
            BEGIN
                CALL update_TongTien_HoaDon();
            END');
        DB::unprepared('CREATE TRIGGER tongTien_CTHoaDonNhap_afdelete AFTER DELETE ON `ct_hoa_don_nhaps` FOR EACH ROW
            BEGIN
                CALL update_TongTien_HoaDonNhap();
            END');



        DB::unprepared('CREATE TRIGGER them_DiaChi AFTER INSERT ON `tai_khoans` FOR EACH ROW
            BEGIN
                IF (NEW.LoaiTaiKhoanId=3 OR NEW.LoaiTaiKhoanId=4) THEN
                    insert into Dia_Chis(TaiKhoanId,TenNguoiNhan,Phone,DiaChiChiTiet) VALUES (NEW.id,NEW.HoTen,NEW.Phone,NEW.DiaChi);
                END IF;
            END');



        //procedure
        DB::unprepared('DROP PROCEDURE IF EXISTS update_TongTien_HoaDon');
        DB::unprepared('CREATE PROCEDURE update_TongTien_HoaDon ()
        BEGIN
            update hoa_dons a LEFT JOIN vouchers ON vouchers.id=a.VoucherId, (select HoaDonId,SUM(ThanhTien) as tongTien,SUM(SoLuong) as tongSoLuong from ct_hoa_dons GROUP BY HoaDonId) b
            set a.TongTien=b.tongTien-IFNULL(GiamGia,0), a.TongSoLuong=b.tongSoLuong
            where a.id=b.HoaDonId;
        END');

        DB::unprepared('DROP PROCEDURE IF EXISTS update_TongTien_HoaDonNhap');
        DB::unprepared('CREATE PROCEDURE update_TongTien_HoaDonNhap ()
        BEGIN
            update hoa_don_nhaps a, (select HoaDonNhapId,SUM(ThanhTien) as tongTien,SUM(SoLuong) as tongSoLuong from ct_hoa_don_nhaps GROUP BY HoaDonNhapId) b
            set a.TongTien=b.tongTien, a.TongSoLuong=b.tongSoLuong
            where a.id=b.HoaDonNhapId;
        END');

        DB::unprepared('DROP FUNCTION IF EXISTS func_Tao_MaSanPham_CTSanPham_deUpdate');
        DB::unprepared('CREATE FUNCTION func_Tao_MaSanPham_CTSanPham_deUpdate (thisSanPhamId INT,thisCTSanPhamId INT)
        RETURNS NVARCHAR(255) DETERMINISTIC
        BEGIN
             RETURN (SELECT CONCAT_WS("-",lsp.Code,
                        hsx.TenHangSanXuat,
                        CONCAT(LEFT(UPPER(sp.TenSanPham), 1),
                        MID(UPPER(sp.TenSanPham), LENGTH(sp.TenSanPham)/2, 1),
                        RIGHT(UPPER(sp.TenSanPham), 1)
                        ),
                        DATE_FORMAT(sp.created_at,"%Y%m%d%H%i%s"),
                        (SELECT SUBSTRING_INDEX(MaSanPham, "-", -1) from ct_san_phams where SanPhamId=thisSanPhamId and id=thisCTSanPhamId)
                        )
                from san_phams sp
                INNER JOIN Loai_San_Phams lsp ON sp.LoaiSanPhamId=lsp.id
                INNER JOIN hang_san_xuats hsx ON sp.HangSanXuatId=hsx.id
                WHERE sp.id=thisSanPhamId);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER tao_MaSanPham_CTSanPham');
        DB::unprepared('DROP TRIGGER thanhTien_CTHoaDon');
        DB::unprepared('DROP TRIGGER thanhTien_CTHoaDonNhap');
        DB::unprepared('DROP TRIGGER thanhTien_CTHoaDon_update');
        DB::unprepared('DROP TRIGGER tongTien_CTHoaDon_afupdate');
        DB::unprepared('DROP TRIGGER thanhTien_CTHoaDonNhap_update');
        DB::unprepared('DROP TRIGGER tongTien_CTHoaDonNhap_afupdate');
        DB::unprepared('DROP TRIGGER tongTien_CTHoaDon_afdelete');
        DB::unprepared('DROP TRIGGER tongTien_CTHoaDonNhap_afdelete');
        DB::unprepared('DROP TRIGGER them_DiaChi');
    }
}
