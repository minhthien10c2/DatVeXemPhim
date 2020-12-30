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
use Illuminate\Support\Facades\DB;

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
            'thoiluong' => ['required', 'numeric'],
            'trailer' => ['required'],
            'luatuoi' => ['required', 'numeric'],
            'mota' => ['required'],
            'hinhanh' => ['required','image', 'max: 2048'],
            'namsanxuat' => ['required','between:1990, 2021', 'numeric'],
        ]);


        
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
        if($request->hasFile('hinhanh')) $orm->HinhAnh =Str::slug($request->tenphim, '-').'.'.$request->file('hinhanh')->extension();
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
            'tenphim' => ['required', 'unique:phim,tenphim,'.$id],
            'thoiluong' => ['required', 'numeric'],
            'trailer' => ['required'],
            'luatuoi' => ['required', 'numeric'],
            'mota' => ['required'],
            'hinhanh' => ['image', 'max: 2048'],
            'namsanxuat' => ['required','between:1990, 2021', 'numeric'],
        ]);
        
        $orm = Phim::find($id);

        if($request->hasFile('hinhanh'))
        {
            // Xóa tập tin cũ
           
            Storage::delete('IMG/'.$orm->HinhAnh);

             // Xác định tên tập tin
             $extension = $request->file('hinhanh')->extension();
             $newfilename = Str::slug($request->tenphim, '-') . '.' . $extension;
 
             // Upload vào thư mục và trả về đường dẫn
             $path = Storage::putFileAs('IMG', $request->file('hinhanh'), $newfilename);
        }

       
        $orm->TenPhim = $request->tenphim;
        $orm->ThoiLuong = $request->thoiluong;
        $orm->Trailer = $request->trailer;
        $orm->LuaTuoi = $request->luatuoi;
        $orm->MoTa = $request->mota;
        if($request->hasFile('hinhanh')) $orm->HinhAnh =Str::slug($request->tenphim, '-').'.'.$request->file('hinhanh')->extension();
        $orm->NamSanXuat = $request->namsanxuat;
        if($orm->save()){
            $ddphimold = DinhDang_Phim::where('IDPhim', $id)->get();
            
            foreach($ddphimold as $ddpold){
                DB::table('dinhdang_phim')->where('IDPhim', $ddpold->IDPhim)->delete();
            }

            foreach($request->dinhdang as $ddpnew){
                $ddp = new DinhDang_Phim();
                $ddp->IDPhim = Phim::find($id)->id;
                $ddp->IDDinhDang = $ddpnew;
                $ddp->save();              
            }
            
            $lpphimold = LoaiPhim_Phim::where('IDPhim', $id)->get();
            
            foreach($lpphimold as $lppold){
                DB::table('loaiphim_phim')->where('IDPhim', $lppold->IDPhim)->delete();
            }

            foreach($request->loaiphim as $lppnew){
                $lpp = new LoaiPhim_Phim();
                $lpp->IDPhim = Phim::find($id)->id;
                $lpp->IDLoaiPhim = $lppnew;
                $lpp->save();              
            }  
            
        }
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
