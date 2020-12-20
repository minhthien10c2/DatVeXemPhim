<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    use HasFactory;

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
}
