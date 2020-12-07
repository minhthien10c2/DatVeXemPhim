<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinhDang extends Model
{
    use HasFactory;

    public function DinhDang_Phim()
    {
        return $this->hasMany('App\Models\DinhDang_Phim', 'IDDinhDang', 'id');
    }

    public function Phong()
    {
        return $this->hasMany('App\Models\Phong', 'IDDinhDang', 'id');
    }
}
