<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhim;
use Illuminate\Http\Request;

class LoaiPhimController extends Controller
{
    public function getDanhSach()
    {
        $loaiphim = LoaiPhim::all();
        return view('Admin.LoaiPhim.DanhSach', compact('loaiphim'));
    }

    public function getThem()
    {
        return view('Admin.LoaiPhim.Them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tenloaiphim' => ['required', 'unique:loaiphim'],
        ]);

        $orm = new LoaiPhim();
        $orm->TenLoaiPhim = $request->tenloaiphim;
        $orm->save();
        return redirect()->route('loaiphim.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $loaiphim = LoaiPhim::find($id);
        return view('Admin.LoaiPhim.Sua', compact('loaiphim'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tenloaiphim' => ['required', 'unique:loaiphim'],
        ]);

        $orm = LoaiPhim::find($id);
        $orm->TenLoaiPhim = $request->tenloaiphim;
        $orm->save();
        return redirect()->route('loaiphim.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = LoaiPhim::find($id);
        $orm->delete();
        return redirect()->route('loaiphim.danhsach')->with('mes','Xóa thành công');
    }
}
