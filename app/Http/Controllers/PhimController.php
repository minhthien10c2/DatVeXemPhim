<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\LoaiPhim;
use App\Models\DinhDang;
use App\Models\DinhDang_Phim;
use App\Models\LoaiPhim_Phim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;

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
        // $this->validate($request, [
        //     'tenphim' => ['required', 'unique:phim'],
        //     'thoiluong' => ['required', 'max:3', 'numeric'],
        //     'trailer' => ['required'],
        //     'luatuoi' => ['required', 'max:2', 'numeric'],
        //     'mota' => ['required'],
        //     'hinhanh' => ['required'],
        //     'namsanxuat' => ['required','between:1990, 2021', 'numeric'],
        // ]);


        
        // if($request->hasFile('hinhanh')){
        //     $file = $request->file('hinhanh');
        //     $extent = $file->getClientOriginalExtension();
        //     if(($extent != 'jpg') && ($extent != 'jpeg') && ($extent != 'png')){
        //         return redirect()->route('phim.them')->with('mes','Lỗi hình ảnh');
        //     }

        //     $name = $file->getClientOriginalName();
        //     $hinh = Str::slug($request->tenphim);
        //     while (file_exists())
        // }

        
        if($request->hasFile('hinhanh'))
        {
            // Xác định tên tập tin
            $extension = $request->file('hinhanh')->extension();
            $newfilename = Str::slug($request->tenphim, '-') . '.' . $extension;

            // Upload vào thư mục và trả về đường dẫn
            $path = Storage::putFileAs('IMG', $request->file('hinhanh'), $newfilename);
        }


        $orm = new Phim();
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        if($request->hasFile('hinhanh')) $orm->HinhAnh =$request->tenphim.'.'.$request->file('hinhanh')->extension();
        $orm->NamSanXuat = $request->namsanxuat;
        if($orm->save()){
            foreach($request->dinhdang as $value)
            {
                $ddp = new DinhDang_Phim();
                $ddp->IDPhim = Phim::latest()->first()->id;
                $ddp->IDDinhDang = $value;
                $ddp->save();
            }

            foreach($request->loaiphim as $value)
            {
                $lpp = new LoaiPhim_Phim();
                $lpp->IDPhim = Phim::latest()->first()->id;
                $lpp->IDLoaiPhim = $value;
                $lpp->save();
            }
        }
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

        if($request->hasFile('hinhanh'))
        {
            // Xóa tập tin cũ
           
            Storage::delete('IMG/'.$orm->HinhAnh);

            // Xác định tên tập tin mới
            $extension = $request->file('hinhanh')->extension();
            $newfilename = Str::slug($request->tenphim, '-') . '.' . $extension;

            // Upload vào thư mục và trả về đường dẫn
            $lsp = LoaiSanPham::find($request->loaisanpham_id);
            $path = Storage::putFileAs('IMG', $request->file('hinhanh'), $newfilename);
        }

       
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
        Storage::delete('IMG/'.$orm->HinhAnh);
        $orm->delete();
        return redirect()->route('phim.danhsach')->with('mes','Xóa thành công');
    }
}
