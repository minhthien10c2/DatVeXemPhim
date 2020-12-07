<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhim;
use Illuminate\Http\Request;

class LoaiPhimController extends Controller
{
    public function getDanhSach()
    {
        $loaiphim = LoaiPhim::all();
        return view('loaiphim.danhsach', compact('loaiphim'));
    }

    public function getThem()
    {
        return view('loaiphim.them');
    }

    public function postThem(Request $request)
    {
        $orm = new LoaiPhim();
        $orm->TenLoaiPhim = $request->tenloaiphim;
        $orm->save();
        return redirect()->route('loaiphim');
    }

    public function getSua($id)
    {
        $loaiphim = LoaiPhim::find($id);
        return view('loaiphim.sua', compact('loaiphim'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = LoaiPhim::find($id);
        $orm->TenLoaiPhim = $request->tenloaiphim;
        $orm->save();
        return redirect()->route('loaiphim');
    }

    public function getXoa($id)
    {
        $orm = LoaiPhim::find($id);
        $orm->delete();
        return redirect()->route('loaiphim');
    }
}
