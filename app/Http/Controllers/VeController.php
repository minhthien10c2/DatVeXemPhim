<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use Illuminate\Http\Request;

class VeController extends Controller
{
    public function getDanhSach()
    {
        $ve = Ve::all();
        return view('Admin.Ve.DanhSach', compact('ve'));
    }

    public function getThem()
    {
        return view('Admin.Ve.Them');
    }

    public function postThem(Request $request)
    {
        $orm = new Ve();
        $orm->IDNguoiDung = $request->idphim;
        $orm->IDSuatChieu = $request->idphong;
        $orm->SoGhe = $request->ngaychieu;
        $orm->save();
        return redirect()->route('ve');
    }

    public function getSua($id)
    {
        $ve = Ve::find($id);
        return view('Admin.Ve.Sua', compact('ve'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = Ve::find($id);
        $orm->IDNguoiDung = $request->idphim;
        $orm->IDSuatChieu = $request->idphong;
        $orm->SoGhe = $request->ngaychieu;
        $orm->save();
        return redirect()->route('ve');
    }

    public function getXoa($id)
    {
        $orm = Ve::find($id);
        $orm->delete();
        return redirect()->route('ve');
    }
}
