<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\LoaiPhim;
use App\Models\DinhDang;
use App\Models\SuatChieu;
use App\Models\PhanHoi;
use App\Models\KhuyenMai;
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

    public function getUserInfo()
    {
        return view('Home.Page.userInfo');
    }

    public function getListPhanHoi()
    {
        $phanhoi = PhanHoi::all();
        return view('Home.Page.listPhanHoi', compact('phanhoi'));
    }

    public function getPhanHoi()
    {
        return view('Home.Page.PhanHoi');
    }

    public function getListKhuyenMai()
    {
        $khuyenmai = KhuyenMai::orderBy('id','DESC')->take(3)->get();
        return view('Home.Page.listKhuyenMai', compact('khuyenmai'));
    }

    public function getKhuyenMai($id)
    {
        $khuyenmai = KhuyenMai::find($id);
        return view('Home.Page.KhuyenMai', compact('khuyenmai'));
    }

    public function getChiTietPhim($id)
    {
        $phim = Phim::find($id);
        $suatchieu = SuatChieu::where('IDPhim', $id)->with('phong')->distinct('IDRap')->get();
       
        
        
        return view('Home.Page.chitietphim', compact('phim','suatchieu'));
    }
}
