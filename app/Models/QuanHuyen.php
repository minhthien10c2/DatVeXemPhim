<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    use HasFactory;

    Protected $table = 'quanhuyen';
    Protected $fillable = ['id', 'IDThanhPho', 'TenQuanHuyen', 'created_at' ,'updated_at'] ;

    public function Rap()
    {
        return $this->hasMany('App\Models\Rap', 'IDQuanHuyen', 'id');
    }

    public function ThanhPho()
    {
        return $this->belongsTo('App\Models\ThanhPho', 'IDThanhPho', 'id');
    }
}
