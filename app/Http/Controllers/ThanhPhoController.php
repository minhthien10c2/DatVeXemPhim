<?php

namespace App\Http\Controllers;

use App\Models\ThanhPho;
use Illuminate\Http\Request;

class ThanhPhoController extends Controller
{
    public function getDanhSach()
    {
        $thanhpho = ThanhPho::all();
        return view('thanhpho.danhsach', compact('thanhpho'));
    }

    public function getThem()
    {
        return view('thanhpho.them');
    }

    public function postThem(Request $request)
    {
        $orm = new ThanhPho();
        $orm->TenThanhPho = $request->tenthanhpho;
        $orm->save();
        return redirect()->route('thanhpho');
    }

    public function getSua($id)
    {
        $thanhpho = ThanhPho::find($id);
        return view('thanhpho.sua', compact('thanhpho'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = ThanhPho::find($id);
        $orm->TenThanhPho = $request->tenthanhpho;
        $orm->save();
        return redirect()->route('thanhpho');
    }

    public function getXoa($id)
    {
        $orm = ThanhPho::find($id);
        $orm->delete();
        return redirect()->route('thanhpho');
    }
}
