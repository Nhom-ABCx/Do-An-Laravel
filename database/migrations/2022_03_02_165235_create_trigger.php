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
        // /* MaSanPham: DT-I3X-1 */
        DB::unprepared('CREATE TRIGGER tao_MaSanPham_CTSanPham_khiUpdate AFTER UPDATE ON `ct_san_pham_values` FOR EACH ROW
                BEGIN
                    DECLARE NEWCTSanPhamId INT;
                    SET NEWCTSanPhamId = NEW.CTSanPhamId;

                    update ct_san_phams a
                    set a.MaSanPham=(SELECT CONCAT_WS("-",lsp.Code,
                            CONCAT(LEFT(UPPER(sp.TenSanPham), 1),
                            MID(UPPER(sp.TenSanPham), LENGTH(sp.TenSanPham)/2, 1),
                            RIGHT(UPPER(sp.TenSanPham), 1)),NEW.CTSanPhamId
                            )
                        from san_phams sp
                        INNER JOIN Loai_San_Phams lsp ON sp.LoaiSanPhamId=lsp.id
                        )
                    where a.id=NEWCTSanPhamId;
                END');

        DB::unprepared('DROP PROCEDURE IF EXISTS updateTheo_bientheCu_Ct_SanPham_value');
        DB::unprepared('DROP PROCEDURE IF EXISTS update_ThuocTinhValue_Ct_SanPham_value');

        DB::unprepared('CREATE PROCEDURE updateTheo_bientheCu_Ct_SanPham_value (IN bientheCu_CTSanPhamId INT,IN bientheMoi_CTSanPhamId INT)
                BEGIN
                    UPDATE ct_san_pham_values a,(SELECT *
                        FROM ct_san_pham_values a
                        WHERE a.CTSanPhamId=bientheCu_CTSanPhamId) b
                    SET a.ThuocTinhValueId= b.ThuocTinhValueId
                    WHERE a.ThuocTinhId=b.ThuocTinhId and a.CTSanPhamId=bientheMoi_CTSanPhamId;
                END');
        DB::unprepared('CREATE PROCEDURE update_ThuocTinhValue_Ct_SanPham_value (IN bienthe_CTSanPhamId INT,IN bienthe_ThuocTinhId INT,IN bienthe_ThuocTinhValueId INT)
                BEGIN
                    UPDATE ct_san_pham_values a
                    SET a.ThuocTinhValueId=bienthe_ThuocTinhValueId
                    WHERE a.ThuocTinhId=bienthe_ThuocTinhId and a.CTSanPhamId=bienthe_CTSanPhamId;
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER them_CT_SanPham_Value');
        DB::unprepared('DROP TRIGGER kiemTra_update_Ct_SanPham_value');
        DB::unprepared('DROP TRIGGER tao_MaSanPham_CTSanPham');
        DB::unprepared('DROP PROCEDURE IF EXISTS updateTheo_bientheCu_Ct_SanPham_value');
        DB::unprepared('DROP PROCEDURE IF EXISTS update_ThuocTinhValue_Ct_SanPham_value');
    }
}
