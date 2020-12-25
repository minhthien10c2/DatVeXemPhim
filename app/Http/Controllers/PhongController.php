<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    public function getDanhSach()
    {
        $phong = Phong::all();
        return view('Admin.Phong.DanhSach', compact('phong'));
    }

    public function getThem()
    {
        return view('Admin.Phong.Them');
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
        return view('Admin.Phong.Sua', compact('phong'));
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
