<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    use HasFactory;

    Protected $table = 'suatchieu';
    Protected $fillable = ['id', 'IDPhim', 'IDPhong', 'NgayChieu', 'GioBatDau', 'GiaVe', 'created_at' ,'updated_at'] ;

    public function Ve()
    {
        return $this->hasMany('App\Models\Ve', 'IDSuatChieu', 'id');
    }

    public function Phong()
    {
        return $this->belongsTo('App\Models\Phong', 'IDPhong', 'id');
    }

    public function Phim()
    {
        return $this->belongsTo('App\Models\Phim', 'IDPhim', 'id');
    }

    public function Rap()
    {
        return $this->belongsToMany(Rap::class);
    }
}
