<?php

namespace App\Http\Controllers;

use App\Models\PhanHoi;
use Illuminate\Http\Request;

class PhanHoiController extends Controller
{
    public function getDanhSach()
    {
        $phanhoi = PhanHoi::all();
        return view('phanhoi.danhsach', compact('phanhoi'));
    }

    public function getThem()
    {
        return view('phanhoi.them');
    }

    public function postThem(Request $request)
    {
        $orm = new PhanHoi();
        $orm->IDNguoiDung = $request->idnguoidung;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('phanhoi');
    }

    public function getSua($id)
    {
        $phanhoi = PhanHoi::find($id);
        return view('phanhoi.sua', compact('phanhoi'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = PhanHoi::find($id);
        $orm->IDNguoiDung = $request->idnguoidung;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('phanhoi');
    }

    public function getXoa($id)
    {
        $orm = PhanHoi::find($id);
        $orm->delete();
        return redirect()->route('phanhoi');
    }
}
