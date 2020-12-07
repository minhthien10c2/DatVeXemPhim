<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    use HasFactory;

    public function HeThongRap()
    {
        return $this->belongsTo('App\Models\HeThongRap', 'IDHeThongRap', 'id');
    }

    public function QuanHuyen()
    {
        return $this->belongsTo('App\Models\QuanHuyen', 'IDQuanHuyen', 'id');
    }
}
