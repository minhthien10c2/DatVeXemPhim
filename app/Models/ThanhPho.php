<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;

    Protected $table = 'thanhpho';
    Protected $fillable = ['id', 'TenThanhPho', 'created_at' ,'updated_at'] ;

    public function ThanhPho()
    {
        return $this->hasMany('App\Models\ThanhPho', 'IDThanhPho', 'id');
    }
}
