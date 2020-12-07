<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhim_Phim;
use Illuminate\Http\Request;

class LoaiPhimPhimController extends Controller
{
    public function getDanhSach()
    {
        $loaiphimphim = LoaiPhimPhim::all();
        return view('loaiphimphim.danhsach', compact('loaiphimphim'));
    }

    public function getThem()
    {
        return view('loaiphimphim.them');
    }

    public function postThem(Request $request)
    {
        $orm = new LoaiPhimPhim();
        $orm->IDLoaiPhim = $request->idloaiphim;
        $orm->IDPhim = $request->idphim;
        $orm->save();
        return redirect()->route('loaiphimphim');
    }

    public function getSua($id)
    {
        $loaiphimphim = LoaiPhimPhim::find($id);
        return view('loaiphimphim.sua', compact('loaiphimphim'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = LoaiPhimPhim::find($id);
        $orm->IDLoaiPhim = $request->idloaiphim;
        $orm->IDPhim = $request->idphim;
        $orm->save();
        return redirect()->route('loaiphimphim');
    }

    public function getXoa($id)
    {
        $orm = LoaiPhimPhim::find($id);
        $orm->delete();
        return redirect()->route('loaiphimphim');
    }
}
