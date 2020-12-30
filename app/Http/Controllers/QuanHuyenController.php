<?php

namespace App\Http\Controllers;

use App\Models\QuanHuyen;
use App\Models\ThanhPho;
use Illuminate\Http\Request;

class QuanHuyenController extends Controller
{
    public function getDanhSach()
    {
        $quanhuyen = QuanHuyen::all();
        return view('Admin.QuanHuyen.DanhSach', compact('quanhuyen'));
    }

    public function getThem()
    {
        $thanhpho = ThanhPho::all();
        return view('Admin.QuanHuyen.Them', compact('thanhpho'));
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'thanhpho' => ['required'],
            'tenquanhuyen' => ['required', 'unique:quanhuyen'],
        ]);

        $orm = new QuanHuyen();
        $orm->IDThanhPho = $request->thanhpho;
        $orm->TenQuanHuyen = $request->tenquanhuyen;
        $orm->save();
        return redirect()->route('quanhuyen.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $quanhuyen = QuanHuyen::find($id);
        $thanhpho = ThanhPho::all();
        return view('Admin.QuanHuyen.Sua', compact('quanhuyen', 'thanhpho'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'thanhpho' => ['required'],
            'tenquanhuyen' => ['required', 'unique:quanhuyen,tenquanhuyen,'.$id],
        ]);

        $orm = QuanHuyen::find($id);
        $orm->IDThanhPho = $request->thanhpho;
        $orm->TenQuanHuyen = $request->tenquanhuyen;
        $orm->save();
        return redirect()->route('quanhuyen.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = QuanHuyen::find($id);
        $orm->delete();
        return redirect()->route('quanhuyen.danhsach')->with('mes','Xóa thành công');
    }

    public function getAjaxGetQuanHuyen(Request $request){
        $data = $request->all();
        if ($data['matp']){
            $output = "";
            $quanhuyen = QuanHuyen::where('IDThanhPho', $data['matp'])->get();
            foreach($quanhuyen as $qh){
                $output .= '<option value="'.$qh->id.'">'.$qh->TenQuanHuyen.'</option>';
            }
        }               
        echo $output;
    }
}
