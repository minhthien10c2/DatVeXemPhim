<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use Illuminate\Http\Request;

class GheController extends Controller
{
    public function getDanhSach()
    {
        $ghe = Ghe::all();
        return view('Admin.Ghe.DanhSach', compact('ghe'));
    }

    public function getThem()
    {
        return view('Admin.Ghe.Them');
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
        return view('Admin.Ghe.Sua', compact('ghe'));
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
 
    public function getAjaxGetGhe(Request $request){
        $data = $request->all();
        if ($data['maphong']){
            $ghe = Ghe::where('IDPhong', $data['maphong'])->get();
        }               
        echo $ghe;
    }
}
