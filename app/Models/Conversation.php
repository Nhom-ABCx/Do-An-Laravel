<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $table = 'conversations';
    //protected $primaryKey = null;
    //public $incrementing = false;
    protected $fillable = [
        'KhachHangId',
        'NhanVienId',
    ];
    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'NhanVienId');
    }
    public function Message()
    {
        return $this->hasMany(Message::class, 'ConversationId');
    }
}
