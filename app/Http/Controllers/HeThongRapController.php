<?php

namespace App\Http\Controllers;

use App\Models\HeThongRap;
use Illuminate\Http\Request;

class HeThongRapController extends Controller
{
    public function getDanhSach()
    {
        $hethongrap = HeThongRap::all();
        return view('Admin.HeThongRap.DanhSach', compact('hethongrap'));
    }

    public function getThem()
    {
        return view('Admin.HeThongRap.Them');
    }

    public function postThem(Request $request)
    {
        $orm = new HeThongRap();
        $orm->TenHeThongRap = $request->tenhethongrap;
        $orm->save();
        return redirect()->route('hethongrap.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $hethongrap = HeThongRap::find($id);
        return view('Admin.HeThongRap.Sua', compact('hethongrap'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = HeThongRap::find($id);
        $orm->TenHeThongRap = $request->tenhethongrap;
        $orm->save();
        return redirect()->route('hethongrap.danhsach')->with('mes','Sửa thành công ');
    }

    public function getXoa($id)
    {
        $orm = HeThongRap::find($id);
        $orm->delete();
        return redirect()->route('hethongrap.danhsach')->with('mes','Xóa thành công');
    }
}
