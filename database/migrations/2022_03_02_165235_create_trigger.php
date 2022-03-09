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
        // /* MaSanPham: DT-Iphone-I3X-1 */
        DB::unprepared('CREATE TRIGGER tao_MaSanPham_CTSanPham_khiUpdate BEFORE INSERT ON `ct_san_phams` FOR EACH ROW
                BEGIN
                    set NEW.MaSanPham=(SELECT CONCAT_WS("-",lsp.Code,
                            hsx.TenHangSanXuat,
                            CONCAT(LEFT(UPPER(sp.TenSanPham), 1),
                            MID(UPPER(sp.TenSanPham), LENGTH(sp.TenSanPham)/2, 1),
                            RIGHT(UPPER(sp.TenSanPham), 1)),
                            (SELECT COUNT(SanPhamId+1) from ct_san_phams)
                            )
                        from san_phams sp
                        INNER JOIN Loai_San_Phams lsp ON sp.LoaiSanPhamId=lsp.id
                        INNER JOIN hang_san_xuats hsx ON sp.HangSanXuatId=hsx.id
                        );
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
    }
}
