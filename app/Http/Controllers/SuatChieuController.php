<?php

namespace App\Http\Controllers;

use App\Models\SuatChieu;
use App\Models\Phim;
use App\Models\HeThongRap;
use Illuminate\Http\Request;

class SuatChieuController extends Controller
{
    public function getDanhSach()
    {
        $suatchieu = SuatChieu::all();
        return view('Admin.SuatChieu.DanhSach', compact('suatchieu'));
    }

    public function getThem()
    {
        $phim = Phim::all();
        $hethongrap = HeThongRap::all();
        return view('Admin.SuatChieu.Them', compact('phim', 'hethongrap'));
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'idphim' => ['required'],
            'idphong' => ['required'],
            'ngaychieu' => ['required'],
            'giobatdau' => ['required'],
            'giave' => ['required'],
        ]);

        $orm = new SuatChieu();
        $orm->IDPhim = $request->idphim;
        $orm->IDPhong = $request->idphong;
        $orm->NgayChieu = $request->ngaychieu;
        $orm->GioBatDau = $request->giobatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $suatchieu = SuatChieu::find($id);
        return view('Admin.SuatChieu.Sua', compact('suatchieu'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'idphim' => ['required'],
            'idphong' => ['required'],
            'ngaychieu' => ['required'],
            'giobatdau' => ['required'],
            'giave' => ['required'],
        ]);
        
        $orm = SuatChieu::find($id);
        $orm->IDPhim = $request->idphim;
        $orm->IDPhong = $request->idphong;
        $orm->NgayChieu = $request->ngaychieu;
        $orm->NgayBatDau = $request->ngaybatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = SuatChieu::find($id);
        $orm->delete();
        return redirect()->route('suatchieu.danhsach')->with('mes','Xóa thành công');
    }
}
