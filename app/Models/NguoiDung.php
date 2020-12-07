<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    public function Ve()
    {
        return $this->hasMany('App\Models\Ve', 'IDNguoiDung', 'id');
    }

    public function PhanHoi()
    {
        return $this->hasMany('App\Models\PhanHoi', 'IDNguoiDung', 'id');
    }
}
