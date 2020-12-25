<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiPhim extends Model
{
    use HasFactory;

    Protected $table = 'loaiphim';
    Protected $fillable = ['id', 'TenLoaiPhim', 'created_at' ,'updated_at'] ;

    public function LoaiPhim_Phim()
    {
        return $this->hasMany('App\Models\LoaiPhim_Phim', 'IDLoaiPhim', 'id');
    }
}
