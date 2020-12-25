<?php

namespace App\Http\Controllers;

use App\Models\KhuyenMai;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function getDanhSach()
    {
        $khuyenmai = KhuyenMai::all();
        return view('Admin.KhuyenMai.DanhSach', compact('khuyenmai'));
    }

    public function getThem()
    {
        return view('Admin.KhuyenMai.Them');
    }

    public function postThem(Request $request)
    {
        $orm = new KhuyenMai();
        $orm->TieuDe = $request->tieude;
        $orm->HinhAnh = $request->hinhanh;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('khuyenmai');
    }

    public function getSua($id)
    {
        $khuyenmai = KhuyenMai::find($id);
        return view('Admin.KhuyenMai.Sua', compact('khuyenmai'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = KhuyenMai::find($id);
        $orm->TieuDe = $request->tieude;
        $orm->HinhAnh = $request->hinhanh;
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('khuyenmai');
    }

    public function getXoa($id)
    {
        $orm = KhuyenMai::find($id);
        $orm->delete();
        return redirect()->route('khuyenmai');
    }
}
