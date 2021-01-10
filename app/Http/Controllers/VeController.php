<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use App\Models\SuatChieu;
use App\Models\Ghe;
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
        

        $suatchieu = SuatChieu::where('IDPhim', $request->idphim)
        ->where('IDPhong', $request->phong)
        ->where('NgayChieu', $request->ngaychieu)
        ->where('GioBatDau', $request->suatchieu)
        ->get();

       

        foreach($request->seats as $value)
        {
            $orm = new Ve();
            $orm->IDNguoiDung = $request->idnguoidung;
            $orm->IDSuatChieu =  $suatchieu[0]->id;
            $orm->IDGhe = $value;
            $orm->save();
            $ghe = Ghe::find($value);
            $ghe->TinhTrang = 1;
            $ghe->save();
        }
        
        return redirect()->route('homeindex');
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
