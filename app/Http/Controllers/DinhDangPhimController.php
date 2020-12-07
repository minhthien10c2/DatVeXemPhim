<?php

namespace App\Http\Controllers;

use App\Models\DinhDang_Phim;
use Illuminate\Http\Request;

class DinhDangPhimController extends Controller
{
    public function getDanhSach()
    {
        $dinhdangphim = DinhDangPhim::all();
        return view('dinhdangphim.danhsach', compact('dinhdangphim'));
    }

    public function getThem()
    {
        return view('dinhdangphim.them');
    }

    public function postThem(Request $request)
    {
        $orm = new DinhDangPhim();
        $orm->IDDinhDang = $request->iddinhdang;
        $orm->IDPhim = $request->idphim;
        $orm->save();
        return redirect()->route('dinhdangphim');
    }

    public function getSua($id)
    {
        $dinhdang_phim = DinhDangPhim::find($id);
        return view('dinhdang_phim.sua', compact('dinhdangphim'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = DinhDangPhim::find($id);
        $orm->IDDinhDang = $request->iddinhdang;
        $orm->IDPhim = $request->idphim;
        $orm->save();
        return redirect()->route('dinhdangphim');
    }

    public function getXoa($id)
    {
        $orm = DinhDangPhim::find($id);
        $orm->delete();
        return redirect()->route('dinhdangphim');
    }
}
