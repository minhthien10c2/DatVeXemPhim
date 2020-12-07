<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    public function getDanhSach()
    {
        $phong = Phong::all();
        return view('phong.danhsach', compact('phong'));
    }

    public function getThem()
    {
        return view('phong.them');
    }

    public function postThem(Request $request)
    {
        $orm = new Phong();
        $orm->IDRap = $request->idrap;
        $orm->TenPhong = $request->tenphong;
        $orm->SoGheToiDa = $request->soghetoida;
        $orm->IDDinhDang = $request->iddinhdang;
        $orm->save();
        return redirect()->route('phong');
    }

    public function getSua($id)
    {
        $phong = Phong::find($id);
        return view('phong.sua', compact('phong'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = Phong::find($id);
        $orm->IDRap = $request->idrap;
        $orm->TenPhong = $request->tenphong;
        $orm->SoGheToiDa = $request->soghetoida;
        $orm->IDDinhDang = $request->iddinhdang;
        $orm->save();
        return redirect()->route('phong');
    }

    public function getXoa($id)
    {
        $orm = Phong::find($id);
        $orm->delete();
        return redirect()->route('phong');
    }
}
