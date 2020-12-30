<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\LoaiPhim;
use App\Models\DinhDang;
use App\Models\SuatChieu;
use App\Models\DinhDang_Phim;
use App\Models\LoaiPhim_Phim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function homeIndex()
    {
        $phimlimit4 = Phim::orderBy('id','DESC')->take(4)->get();
        $phimall = Phim::paginate(6);
        $suatchieu = SuatChieu::all();
        return view('Home.Page.home', compact('phimlimit4', 'phimall', 'suatchieu'));
    }

}
