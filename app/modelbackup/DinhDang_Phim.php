<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinhDang_Phim extends Model
{
    use HasFactory;

    public function Phim()
    {
        return $this->belongsTo('App\Models\Phim', 'IDPhim', 'id');
    }

    public function DinhDang()
    {
        return $this->belongsTo('App\Models\DinhDang', 'IDDinhDang', 'id');
    }
}
