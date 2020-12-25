<?php

namespace App\Http\Controllers;

use App\Models\SuatChieu;
use Illuminate\Http\Request;

class SuatChieuController extends Controller
{
    public function getDanhSach()
    {
        $suatchieu = SuatChieu::all();
        return view('Admin.SuatChieu.DanhSach', compact('suatchieu'));
    }

    public function getThem()
    {
        return view('Admin.SuatChieu.Them');
    }

    public function postThem(Request $request)
    {
        $orm = new SuatChieu();
        $orm->IDPhim = $request->idphim;
        $orm->IDPhong = $request->idphong;
        $orm->NgayChieu = $request->ngaychieu;
        $orm->NgayBatDau = $request->ngaybatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu');
    }

    public function getSua($id)
    {
        $suatchieu = SuatChieu::find($id);
        return view('Admin.SuatChieu.Sua', compact('suatchieu'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = SuatChieu::find($id);
        $orm->IDPhim = $request->idphim;
        $orm->IDPhong = $request->idphong;
        $orm->NgayChieu = $request->ngaychieu;
        $orm->NgayBatDau = $request->ngaybatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu');
    }

    public function getXoa($id)
    {
        $orm = SuatChieu::find($id);
        $orm->delete();
        return redirect()->route('suatchieu');
    }
}
