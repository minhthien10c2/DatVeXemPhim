<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use App\Models\Rap;
use App\Models\DinhDang;
use App\Models\HeThongRap;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    public function getDanhSach()
    {
        $phong = Phong::all();
        return view('Admin.Phong.DanhSach', compact('phong'));
    }

    public function getThem()
    {
        $dinhdang = DinhDang::all();
        $rap = Rap::all();
        $hethongrap = HeThongRap::all();
        return view('Admin.Phong.Them', compact('dinhdang', 'rap','hethongrap'));
    }

    public function postThem(Request $request)
    {
        // $this->validate($request, [
        //     'rap' => ['required'],
        //     'tenphong' => ['required','unique:phong,tenphong,IDRap'.$request->rap],
        //     'soghetoida' => ['required', 'numeric', 'max:60'],
        //     'iddinhdang' => ['required'],
        // ]);

        $orm = new Phong();
        $orm->IDRap = $request->rap;
        $orm->TenPhong = $request->tenphong;
        $orm->SoGheToiDa = $request->soghetoida;
        $orm->IDDinhDang = $request->dinhdang;
        $orm->save();
        return redirect()->route('phong.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $phong = Phong::find($id);
        $dinhdang = DinhDang::all();
        $rap = Rap::all();
        $hethongrap = HeThongRap::all();
        return view('Admin.Phong.Sua', compact('phong', 'dinhdang', 'rap', 'hethongrap'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'rap' => ['required'],
            'tenphong' => ['required','unique:phong,tenphong,'.$id],
            'soghetoida' => ['required', 'numeric', 'max:60'],
            'iddinhdang' => ['required'],
        ]);

        $orm = Phong::find($id);
        $orm->IDRap = $request->rap;
        $orm->TenPhong = $request->tenphong;
        $orm->SoGheToiDa = $request->soghetoida;
        $orm->IDDinhDang = $request->dinhdang;
        $orm->save();
        return redirect()->route('phong.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = Phong::find($id);
        $orm->delete();
        return redirect()->route('phong.danhsach')->with('mes','Xóa thành công');
    }

    public function getAjaxGetPhong(Request $request){
        $data = $request->all();
        if ($data['mar']){
            $output = "";
            $phong = Phong::where('IDRap', $data['mar'])->get();
            foreach($phong as $p){
                $output .= '<option value="'.$p->id.'">'.$p->TenPhong.'</option>';
            }
        }               
        echo $output;
    }
}
