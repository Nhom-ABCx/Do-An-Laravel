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
        DB::unprepared('CREATE TRIGGER them_CT_SanPham_Value AFTER INSERT ON `ct_san_phams` FOR EACH ROW
                BEGIN
                    INSERT INTO `ct_san_pham_values` (SanPhamId,CTSanPhamId,ThuocTinhId)
                        SELECT NEW.SanPhamId, NEW.id, lsptt.ThuocTinhId
                        FROM san_phams sp
                        INNER JOIN loai_san_pham_thuoc_tinhs lsptt ON sp.LoaiSanPhamId=lsptt.LoaiSanPhamId;
                END');
        DB::unprepared('CREATE TRIGGER kiemTra_update_Ct_SanPham_value BEFORE UPDATE ON `ct_san_pham_values` FOR EACH ROW
                BEGIN
                    IF NEW.ThuocTinhValueId NOT IN (
                        SELECT ttvl.id
                        FROM thuoc_tinhs tt
                        INNER JOIN thuoc_tinh_values ttvl ON tt.id=ttvl.ThuocTinhId
                        WHERE NEW.ThuocTinhId=tt.id
                    ) THEN
                        SET NEW.ThuocTinhValueId = (
                            SELECT ttvl.id
                            FROM thuoc_tinhs tt
                            INNER JOIN thuoc_tinh_values ttvl ON tt.id=ttvl.ThuocTinhId
                            WHERE NEW.ThuocTinhId=tt.id
                            LIMIT 1);
                    END IF;
                END');
        // /* MaSanPham: DTI3X1-R6-S128 */
        DB::unprepared('CREATE TRIGGER tao_MaSanPham_CTSanPham AFTER UPDATE ON `ct_san_pham_values` FOR EACH ROW
                BEGIN
                    DECLARE NEWCTSanPhamId INT;
                    SET NEWCTSanPhamId = NEW.CTSanPhamId;

                    update ct_san_phams a,
                        (SELECT ctspvl.CTSanPhamId,ttvl.Value
                            FROM ct_san_pham_values ctspvl
                            INNER JOIN thuoc_tinh_values ttvl ON ctspvl.ThuocTinhValueId=ttvl.id
                            WHERE ttvl.ThuocTinhId=6) r,
                        (SELECT ctspvl.CTSanPhamId,ttvl.Value
                            FROM ct_san_pham_values ctspvl
                            INNER JOIN thuoc_tinh_values ttvl ON ctspvl.ThuocTinhValueId=ttvl.id
                            WHERE ttvl.ThuocTinhId=7) s
                    set a.MaSanPham=(
                        SELECT CONCAT_WS("-",CONCAT(
                            lsp.Code,LEFT(UPPER(sp.TenSanPham), 1),
                            MID(UPPER(sp.TenSanPham), LENGTH(sp.TenSanPham)/2, 1),
                            RIGHT(UPPER(sp.TenSanPham), 1),sp.id),CONCAT("R",r.Value),CONCAT("S",s.Value)
                            )
                        from san_phams sp
                        INNER JOIN Loai_San_Phams lsp ON sp.LoaiSanPhamId=lsp.id
                        )
                    where a.id=NEWCTSanPhamId and a.id=r.CTSanPhamId and a.id=s.CTSanPhamId;
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `them_CT_SanPham_Value`');
        DB::unprepared('DROP TRIGGER `kiemTra_update_Ct_SanPham_value`');
    }
}
