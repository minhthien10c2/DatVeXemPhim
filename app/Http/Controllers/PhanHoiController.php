<?php

namespace App\Http\Controllers;

use App\Models\PhanHoi;
use Illuminate\Http\Request;

class PhanHoiController extends Controller
{
    public function getDanhSach()
    {
        $phanhoi = PhanHoi::all();
        return view('Admin.PhanHoi.DanhSach', compact('phanhoi'));
    }

    public function getThem()
    {
        return view('Admin.PhanHoi.Them')->with('mes','Thêm thành công');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tieude' => ['required'],
            'chitiet' => ['required'],
        ]);

        $orm = new PhanHoi();   
        $orm->IDNguoiDung = $request->idnguoidung;
        $orm->TieuDe = $request->tieude;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('phanhoi.danhsach');
    }

    public function getSua($id)
    {
        $phanhoi = PhanHoi::find($id);
        return view('Admin.PhanHoi.Sua', compact('phanhoi'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = PhanHoi::find($id);
        $orm->IDNguoiDung = $request->idnguoidung;
        $orm->TieuDe = $request->tieude;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('phanhoi.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = PhanHoi::find($id);
        $orm->delete();
        return redirect()->route('phanhoi.danhsach')->with('mes','Xóa thành công');
    }
}
