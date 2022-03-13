<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class SlideShow extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = "slide_shows";
    protected $fillable = [
        'HinhAnh',
        'MoTa',
    ];
}
