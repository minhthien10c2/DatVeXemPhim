<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;

    public function ThanhPho()
    {
        return $this->hasMany('App\Models\ThanhPho', 'IDThanhPho', 'id');
    }
}
