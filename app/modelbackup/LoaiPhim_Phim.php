<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiPhim_Phim extends Model
{
    use HasFactory;

    public function Phim()
    {
        return $this->belongsTo('App\Models\Phim', 'IDPhim', 'id');
    }

    public function LoaiPhim()
    {
        return $this->belongsTo('App\Models\LoaiPhim', 'IDLoaiPhim', 'id');
    }
}
