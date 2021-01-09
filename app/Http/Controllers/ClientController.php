<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\LoaiPhim;
use App\Models\DinhDang;
use App\Models\SuatChieu;
use App\Models\PhanHoi;
use App\Models\KhuyenMai;
use App\Models\Rap;
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
        
       $hethongrapbysuatchieu = DB::table('suatchieu as sc')
       ->select('htr.id','htr.TenHeThongRap')
       ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
       ->join('rap as r','p.IDRap','=','r.id')
       ->join('hethongrap as htr','r.IDHeThongRap','=','htr.id')
       ->where('sc.IDPhim','=', $id)
       ->distinct('htr.id')
       ->get();

       $rapbysuatchieuandhtr = DB::table('suatchieu as sc')
       ->select('r.id','r.IDHeThongRap','r.TenRap')
       ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
       ->join('rap as r','p.IDRap','=','r.id')
       ->where('sc.IDPhim','=', $id)
       ->distinct('r.id')
       ->get();

       $ngaychieuwithrbysuatchieu = DB::table('suatchieu as sc')
       ->select('sc.NgayChieu', 'r.id')
       ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
       ->join('rap as r','p.IDRap','=','r.id')
       ->where('sc.IDPhim','=', $id)
       ->orderBy('sc.NgayChieu','ASC')
       ->get();

       $giochieuwithrbysuatchieu = DB::table('suatchieu as sc')
       ->select('sc.GioBatDau','sc.NgayChieu', 'r.id')
       ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
       ->join('rap as r','p.IDRap','=','r.id')
       ->where('sc.IDPhim','=', $id)
       ->orderBy('sc.NgayChieu','ASC')
       ->get();
        
        
        return view('Home.Page.chitietphim', compact('phim','hethongrapbysuatchieu','rapbysuatchieuandhtr','ngaychieuwithrbysuatchieu','giochieuwithrbysuatchieu'));
    }

    public function getDatVe($id)
    {
        $phim = Phim::find($id);
        $suatchieu = SuatChieu::where('IDPhim', $id)->with('phong')->distinct('IDRap')->get();
        
        $hethongrapbysuatchieu = DB::table('suatchieu as sc')
        ->select('htr.id','htr.TenHeThongRap')
        ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
        ->join('rap as r','p.IDRap','=','r.id')
        ->join('hethongrap as htr','r.IDHeThongRap','=','htr.id')
        ->where('sc.IDPhim','=', $id)
        ->distinct('htr.id')
        ->get();

        return view('Home.Page.datve', compact('phim', 'suatchieu', 'hethongrapbysuatchieu'));
    }
}
