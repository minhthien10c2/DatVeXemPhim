<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    public function getDanhSach()
    {
        $phim = Phim::all();
        return view('phim.danhsach', compact('phim'));
    }

    public function getThem()
    {
        return view('phim.them');
    }

    public function postThem(Request $request)
    {
        $orm = new Phim();
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        $orm->HinhAnh = $request->hinhanh;
        $orm->NamSanXuat = $request->namsanxuat;
        $orm->save();
        return redirect()->route('phim');
    }

    public function getSua($id)
    {
        $phim = Phim::find($id);
        return view('phim.sua', compact('phim'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = Phim::find($id);
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        $orm->HinhAnh = $request->hinhanh;
        $orm->NamSanXuat = $request->namsanxuat;
        $orm->save();
        return redirect()->route('phim');
    }

    public function getXoa($id)
    {
        $orm = Phim::find($id);
        $orm->delete();
        return redirect()->route('phim');
    }
}
