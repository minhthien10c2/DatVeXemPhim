<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    use HasFactory;

    Protected $table = 'ghe';
    Protected $fillable = ['id', 'IDPhong', 'LoaiGhe', 'TinhTrang', 'created_at' ,'updated_at'] ;

    public function Phong()
    {
        return $this->belongsTo('App\Models\Phong', 'IDPhong', 'id');
    }
}
