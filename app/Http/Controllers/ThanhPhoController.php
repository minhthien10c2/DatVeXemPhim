<?php

namespace App\Http\Controllers;

use App\Models\ThanhPho;
use Illuminate\Http\Request;

class ThanhPhoController extends Controller
{
    public function getDanhSach()
    {
        $thanhpho = ThanhPho::all();
        return view('Admin.ThanhPho.DanhSach', compact('thanhpho'));
    }

    public function getThem()
    {
        return view('Admin.ThanhPho.Them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tenthanhpho' => ['required','unique:thanhpho'],
        ]);

        $orm = new ThanhPho();
        $orm->TenThanhPho = $request->tenthanhpho;
        $orm->save();
        return redirect()->route('thanhpho.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $thanhpho = ThanhPho::find($id);
        return view('Admin.ThanhPho.Sua', compact('thanhpho'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tenthanhpho' => ['required','unique:thanhpho,tenthanhpho,'.$id],
        ]);

        $orm = ThanhPho::find($id);
        $orm->TenThanhPho = $request->tenthanhpho;
        $orm->save();
        return redirect()->route('thanhpho.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = ThanhPho::find($id);
        $orm->delete();
        return redirect()->route('thanhpho.danhsach')->with('mes','Xóa thành công');
    }
}
