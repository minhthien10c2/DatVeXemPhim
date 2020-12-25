<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    Protected $table = 'khuyenmai';
    Protected $fillable = ['id', 'TieuDe', 'HinhAnh', 'ChiTiet', 'created_at' ,'updated_at'] ;
}
