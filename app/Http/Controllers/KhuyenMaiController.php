<?php

namespace App\Http\Controllers;

use App\Models\KhuyenMai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, [
            'tieude' => ['required', 'unique:khuyenmai'],
            'hinhanh' => ['required'],
            'chitiet' => ['required'],
        ]);

        if($request->hasFile('hinhanh'))
        {
            // Xác định tên tập tin
            $extension = $request->file('hinhanh')->extension();
            $newfilename = Str::slug($request->tieude, '-') . '.' . $extension;

            // Upload vào thư mục và trả về đường dẫn
            $path = Storage::putFileAs('IMG', $request->file('hinhanh'), $newfilename);
        }

        $orm = new KhuyenMai();
        $orm->TieuDe = $request->tieude;
        if($request->hasFile('hinhanh')) $orm->HinhAnh =Str::slug($request->tieude, '-').'.'.$request->file('hinhanh')->extension();
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('khuyenmai.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $khuyenmai = KhuyenMai::find($id);
        return view('Admin.KhuyenMai.Sua', compact('khuyenmai'));
    }

    public function postSua(Request $request, $id)
    {
        // $this->validate($request, [
        //     'tieude' => ['required', 'unique:khuyenmai'],
        //     'hinhanh' => ['required'],
        //     'chitiet' => ['required'],
        // ]);

        $orm = KhuyenMai::find($id);

        if($request->hasFile('hinhanh'))
        {
            // Xóa tập tin cũ
           
            Storage::delete('IMG/'.$orm->HinhAnh);

             // Xác định tên tập tin
             $extension = $request->file('hinhanh')->extension();
             $newfilename = Str::slug($request->tieude, '-') . '.' . $extension;
 
             // Upload vào thư mục và trả về đường dẫn
             $path = Storage::putFileAs('IMG', $request->file('hinhanh'), $newfilename);
        }

        $orm->TieuDe = $request->tieude;
        if($request->hasFile('hinhanh')) $orm->HinhAnh =Str::slug($request->tieude, '-').'.'.$request->file('hinhanh')->extension();
        $orm->ChiTiet = $request->chitiet;
        $orm->save();
        return redirect()->route('khuyenmai.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = KhuyenMai::find($id);
        Storage::delete('IMG/'.$orm->HinhAnh);
        $orm->delete();
        return redirect()->route('khuyenmai.danhsach')->with('mes','Xóa thành công');
    }
}
