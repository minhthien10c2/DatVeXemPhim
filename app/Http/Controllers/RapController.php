<?php

namespace App\Http\Controllers;

use App\Models\Rap;
use App\Models\HeThongRap;
use App\Models\ThanhPho;
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
        $hethongrap = HeThongRap::all();
        $thanhpho = ThanhPho::all();
        return view('Admin.Rap.Them', compact('hethongrap', 'thanhpho'));
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'hethongrap' => ['required'],
            'quanhuyen' => ['required'],
            'tenrap' => ['required', 'unique:rap'],
        ]);

        $orm = new Rap();
        $orm->IDHeThongRap = $request->hethongrap;
        $orm->IDQuanHuyen = $request->quanhuyen;
        $orm->TenRap = $request->tenrap;
        $orm->save();
        return redirect()->route('rap.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $hethongrap = HeThongRap::all();
        $thanhpho = ThanhPho::all();
        $rap = Rap::find($id);
        return view('Admin.Rap.Sua', compact('rap', 'hethongrap', 'thanhpho'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'hethongrap' => ['required'],
            'quanhuyen' => ['required'],
            'tenrap' => ['required', 'unique:rap'],
        ]);
        
        $orm = Rap::find($id);
        $orm->IDHeThongRap = $request->hethongrap;
        $orm->IDQuanHuyen = $request->quanhuyen;
        $orm->TenRap = $request->tenrap;
        $orm->save();
        return redirect()->route('rap.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = Rap::find($id);
        $orm->delete();
        return redirect()->route('rap.danhsach')->with('mes','Xóa thành công');
    }
}
