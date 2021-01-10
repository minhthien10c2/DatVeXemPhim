<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;

    Protected $table = 've';
    Protected $fillable = ['id', 'IDNguoiDung', 'IDSuatChieu', 'SoGhe', 'created_at' ,'updated_at'] ;

    public function User()
    {
        return $this->belongsTo('App\Models\User', 'IDNguoiDung', 'id');
    }

    public function SuatChieu()
    {
        return $this->belongsTo('App\Models\SuatChieu', 'IDSuatChieu', 'id');
    }

    public function Ghe()
    {
        return $this->belongsTo('App\Models\Ghe', 'IDGhe', 'id');
    }
}
