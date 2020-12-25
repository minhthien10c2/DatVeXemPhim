<?php

namespace App\Http\Controllers;

use App\Models\Rap;
use Illuminate\Http\Request;

class RapController extends Controller
{
    public function getDanhSach()
    {
        $rap = Rap::all();
        return view('Admin.Rap.DanhSach', compact('rap'));
    }

    public function getThem()
    {
        return view('Admin.Rap.Them');
    }

    public function postThem(Request $request)
    {
        $orm = new Rap();
        $orm->IDHeThongRap = $request->idhethongrap;
        $orm->IDQuanHuyen = $request->idquanhuyen;
        $orm->TenRap = $request->tenrap;
        $orm->DiaChiRap = $request->diachirap;
        $orm->save();
        return redirect()->route('rap');
    }

    public function getSua($id)
    {
        $rap = Rap::find($id);
        return view('Admin.Rap.Sua', compact('rap'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = Rap::find($id);
        $orm->IDHeThongRap = $request->idhethongrap;
        $orm->IDQuanHuyen = $request->idquanhuyen;
        $orm->TenRap = $request->tenrap;
        $orm->DiaChiRap = $request->diachirap;
        $orm->save();
        return redirect()->route('rap');
    }

    public function getXoa($id)
    {
        $orm = Rap::find($id);
        $orm->delete();
        return redirect()->route('rap');
    }
}
