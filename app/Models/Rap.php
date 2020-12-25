<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    use HasFactory;

    Protected $table = 'rap';
    Protected $fillable = ['id', 'IDHeThongRap', 'IDQuanHuyen', 'TenRap', 'created_at' ,'updated_at'] ;

    public function HeThongRap()
    {
        return $this->belongsTo('App\Models\HeThongRap', 'IDHeThongRap', 'id');
    }

    public function QuanHuyen()
    {
        return $this->belongsTo('App\Models\QuanHuyen', 'IDQuanHuyen', 'id');
    }
}
