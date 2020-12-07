<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;

    public function DinhDang_Phim()
    {
        return $this->hasMany('App\Models\DinhDang_Phim', 'IDPhim', 'id');
    }

    public function TheLoai_Phim()
    {
        return $this->hasMany('App\Models\TheLoai_Phim', 'IDPhim', 'id');
    }

    public function SuatChieu()
    {
        return $this->hasMany('App\Models\SuatChieu', 'IDPhim', 'id');
    }
}
