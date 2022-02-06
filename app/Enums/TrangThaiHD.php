<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TrangThaiHD extends Enum
{
    // Đang chờ xác nhận 1 //lúc khách vừa đặt hàng, gọi điện cho khách để tránh tình trạng đặt bừa
    // Đang xử lý 2    //khách đặt hàng nhưng chưa soạn ra sản phẩm từ kho
    // Đã xử lý 3 //đã soạn ra sản phẩm, chuẩn bị đưa đến đơn vị vận chuyển
    // Đang giao 4 //shipper đang trong quá trình giao hàng
    // Giao thành cỏng  5 //đã ship hàng thành công
    // deleted_at   // khách đã hủy đơn
    const DangXacNhan =   1;
    const DangXuLy =   2;
    const DaXuLy = 3;
    const DangGiao = 4;
    const DaGiao = 5;

    public static function getDescription($value): string
    {
        if ($value === self::DangXacNhan) {
            return $value . ' Đang chờ xác nhận';
        }
        if ($value === self::DangXuLy) {
            return $value . ' Đang xử lý';
        }
        if ($value === self::DaXuLy) {
            return $value . ' Đã xử lý';
        }
        if ($value === self::DangGiao) {
            return $value . ' Đang giao';
        }
        if ($value === self::DaGiao) {
            return $value . ' Đã giao';
        }

        return parent::getDescription($value);
    }
}
