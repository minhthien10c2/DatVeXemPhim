<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    Protected $table = 'phong';
    Protected $fillable = ['id', 'IDRap', 'IDDinhDang', 'TenPhong', 'SoGheToiDa', 'created_at' ,'updated_at'] ;

    public function Rap()
    {
        return $this->belongsTo('App\Models\Rap', 'IDRap', 'id');
    }

    public function DinhDang()
    {
        return $this->belongsTo('App\Models\DinhDang', 'IDDinhDang', 'id');
    }

    public function Ghe()
    {
        return $this->hasMany('App\Models\Ghe', 'IDPhong', 'id');
    }

    public function SuatChieu()
    {
        return $this->hasMany('App\Models\SuatChieu', 'IDPhong', 'id');
    }
}
