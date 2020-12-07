<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use Illuminate\Http\Request;

class GheController extends Controller
{
    public function getDanhSach()
    {
        $ghe = Ghe::all();
        return view('ghe.danhsach', compact('ghe'));
    }

    public function getThem()
    {
        return view('ghe.them');
    }

    public function postThem(Request $request)
    {
        $orm = new Ghe();
        $orm->IDPhong = $request->idphong;
        $orm->TenGhe = $request->tenghe;  /////Ten Ghe Chua Co TRong CSDL
        $orm->LoaiGhe = $request->loaighe;
        $orm->TinhTrang = $request->tinhtrang;
        $orm->save();
        return redirect()->route('ghe');
    }

    public function getSua($id)
    {
        $ghe = Ghe::find($id);
        return view('ghe.sua', compact('ghe'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = Ghe::find($id);
        $orm->IDPhong = $request->idphong;
        $orm->TenGhe = $request->tenghe; /////Ten Ghe Chua Co TRong CSDL
        $orm->LoaiGhe = $request->loaighe;
        $orm->TinhTrang = $request->tinhtrang;
        $orm->save();
        return redirect()->route('ghe');
    }

    public function getXoa($id)
    {
        $orm = Ghe::find($id);
        $orm->delete();
        return redirect()->route('ghe');
    }
}
