<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeThongRap extends Model
{
    use HasFactory;

    Protected $table = 'hethongrap';
    Protected $fillable = ['id', 'TenHeThongRap', 'created_at' ,'updated_at'] ;
    
    public function Rap()
    {
        return $this->hasMany('App\Models\Rap', 'IDHeThongRap', 'id');
    }
}
