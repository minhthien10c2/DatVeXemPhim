<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table = 'sanpham';

    public function NguoiDung()
    {
        return $this->belongsTo('App\Models\NguoiDung', 'IDNguoiDung', 'id');
    }

    public function SuatChieu()
    {
        return $this->belongsTo('App\Models\SuatChieu', 'IDSuatChieu', 'id');
    }
}
