<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use App\Models\Rap;
use App\Models\DinhDang;
use App\Models\HeThongRap;
use App\Models\Ghe;
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
        if($orm->save()){
            $dem = 1;
            for($i=1;$i<=$request->soghetoida;$i++)
            {
                if($dem == 11)
                    $dem = 1;
                if($i <= 10)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "A".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
                
                if($i >= 11 && $i <= 20)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "B".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
                
                if($i >= 21 && $i <= 30)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "C".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
                
                if($i >= 31 && $i <= 40)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "D".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
                
                if($i >= 41 && $i <= 50)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "E".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
                
                if($i >= 51 && $i <= 60)
                {
                    $ghe = new Ghe();
                    $ghe->IDPhong = Phong::latest()->first()->id;
                    $ghe->LoaiGhe = "F".($dem++);
                    $ghe->TinhTrang = 0;
                    $ghe->save();
                }
            }
            return redirect()->route('phong.danhsach')->with('mes','Thêm thành công');
        }
        
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
