<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\LoaiPhim;
use App\Models\DinhDang;
use App\Models\DinhDang_Phim;
use App\Models\LoaiPhim_Phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    public function getDanhSach()
    {
        $phim = Phim::all();
        return view('Admin.Phim.DanhSach', compact('phim'));
    }

    public function getThem()
    {
        $dinhdang = DinhDang::all();
        $loaiphim = LoaiPhim::all();
        return view('Admin.Phim.Them',compact('dinhdang', 'loaiphim'));
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tenphim' => ['required', 'unique:phim'],
            'thoiluong' => ['required', 'max:3', 'numeric'],
            'trailer' => ['required'],
            'luatuoi' => ['required', 'max:2', 'numeric'],
            'mota' => ['required'],
            'hinhanh' => ['required'],
            'namsanxuat' => ['required','between:1990, 2021', 'numeric'],
        ]);

        $orm = new Phim();
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        $orm->HinhAnh = $request->hinhanh;
        $orm->NamSanXuat = $request->namsanxuat;
        $orm->save();
        return redirect()->route('phim.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    { 
        $phim = Phim::find($id);
        $dinhdang = DinhDang::all();
        $loaiphim = LoaiPhim::all();
        $dinhdangphim = DinhDang_Phim::where('IDPhim', $id)->get();
        $loaiphimphim = LoaiPhim_Phim::where('IDPhim', $id)->get();
        return view('Admin.Phim.Sua', compact('phim', 'dinhdangphim', 'loaiphimphim', 'dinhdang', 'loaiphim'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tenphim' => ['required', 'unique:phim'],
            'thoiluong' => ['required', 'max:3', 'numeric'],
            'trailer' => ['required'],
            'luatuoi' => ['required', 'max:2', 'numeric'],
            'mota' => ['required'],
            'hinhanh' => ['required'],
            'namsanxuat' => ['required','between:1990, 2021', 'numeric'],
        ]);

        $orm = Phim::find($id);
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        $orm->HinhAnh = $request->hinhanh;
        $orm->NamSanXuat = $request->namsanxuat;
        $orm->save();
        return redirect()->route('phim.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = Phim::find($id);
        $orm->delete();
        return redirect()->route('phim.danhsach')->with('mes','Xóa thành công');
    }
}
