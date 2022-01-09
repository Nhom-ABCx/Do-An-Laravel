<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    //protected $primaryKey = null;
    //public $incrementing = false;
    protected $fillable = [
        'Body',
        'KhachHangId', //1 trong 2
        'NhanVienId', //1 trong 2
        'ConversationId',
    ];
    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'NhanVienId');
    }
    public function Conversation()
    {
        return $this->belongsTo(Conversation::class, 'ConversationId');
    }
}
