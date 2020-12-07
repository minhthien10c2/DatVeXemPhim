<?php

namespace App\Http\Controllers;

use App\Models\HeThongRap;
use Illuminate\Http\Request;

class HeThongRapController extends Controller
{
    public function getDanhSach()
    {
        $hethongrap = HeThongRap::all();
        return view('hethongrap.danhsach', compact('hethongrap'));
    }

    public function getThem()
    {
        return view('hethongrap.them');
    }

    public function postThem(Request $request)
    {
        $orm = new HeThongRap();
        $orm->TenHeThongRap = $request->tenhethongrap;
        $orm->save();
        return redirect()->route('hethongrap');
    }

    public function getSua($id)
    {
        $hethongrap = HeThongRap::find($id);
        return view('hethongrap.sua', compact('hethongrap'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = HeThongRap::find($id);
        $orm->TenHeThongRap = $request->tenhethongrap;
        $orm->save();
        return redirect()->route('hethongrap');
    }

    public function getXoa($id)
    {
        $orm = HeThongRap::find($id);
        $orm->delete();
        return redirect()->route('hethongrap');
    }
}
