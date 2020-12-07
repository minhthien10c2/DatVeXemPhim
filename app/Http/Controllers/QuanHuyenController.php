<?php

namespace App\Http\Controllers;

use App\Models\QuanHuyen;
use Illuminate\Http\Request;

class QuanHuyenController extends Controller
{
    public function getDanhSach()
    {
        $quanhuyen = QuanHuyen::all();
        return view('quanhuyen.danhsach', compact('quanhuyen'));
    }

    public function getThem()
    {
        return view('quanhuyen.them');
    }

    public function postThem(Request $request)
    {
        $orm = new QuanHuyen();
        $orm->IDThanhPho = $request->idthanhpho;
        $orm->TenQuanHuyen = $request->tenquanhuyen;
        $orm->save();
        return redirect()->route('quanhuyen');
    }

    public function getSua($id)
    {
        $quanhuyen = QuanHuyen::find($id);
        return view('quanhuyen.sua', compact('quanhuyen'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = QuanHuyen::find($id);
        $orm->IDThanhPho = $request->idthanhpho;
        $orm->TenQuanHuyen = $request->tenquanhuyen;
        $orm->save();
        return redirect()->route('quanhuyen');
    }

    public function getXoa($id)
    {
        $orm = QuanHuyen::find($id);
        $orm->delete();
        return redirect()->route('quanhuyen');
    }
}
