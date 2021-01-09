<?php

namespace App\Http\Controllers;

use App\Models\SuatChieu;
use App\Models\Phim;
use App\Models\HeThongRap;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SuatChieuController extends Controller
{
    public function getDanhSach()
    {
        $suatchieu = SuatChieu::all();
        return view('Admin.SuatChieu.DanhSach', compact('suatchieu'));
    }

    public function getThem()
    {
        $phim = Phim::all();
        $hethongrap = HeThongRap::all();
        return view('Admin.SuatChieu.Them', compact('phim', 'hethongrap'));
    }

    public function postThem(Request $request)
    {
        // $this->validate($request, [
        //     'idphim' => ['required'],
        //     'idphong' => ['required'],
        //     'ngaychieu' => ['required'],
        //     'giobatdau' => ['required'],
        //     'giave' => ['required'],
        // ]);

        $orm = new SuatChieu();
        $orm->IDPhim = $request->phim;
        $orm->IDPhong = $request->phong;
        $orm->NgayChieu = Carbon::parse($request->ngaychieu)->format('yy/m/d');
        $orm->GioBatDau = $request->giobatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $suatchieu = SuatChieu::find($id);
        $hethongrap = HeThongRap::all();
        return view('Admin.SuatChieu.Sua', compact('suatchieu','hethongrap'));
    }

    public function postSua(Request $request, $id)
    {
        // $this->validate($request, [
        //     'idphim' => ['required'],
        //     'idphong' => ['required'],
        //     'ngaychieu' => ['required'],
        //     'giobatdau' => ['required'],
        //     'giave' => ['required'],
        // ]);
        
        $orm = SuatChieu::find($id);
        $orm->IDPhim = $request->phim;
        $orm->IDPhong = $request->phong;
        $orm->NgayChieu = Carbon::parse($request->ngaychieu)->format('yy/m/d');
        $orm->GioBatDau = $request->giobatdau;
        $orm->GiaVe = $request->giave;
        $orm->save();
        return redirect()->route('suatchieu.danhsach')->with('mes','Sửa thành công');
    }

    public function getXoa($id)
    {
        $orm = SuatChieu::find($id);
        $orm->delete();
        return redirect()->route('suatchieu.danhsach')->with('mes','Xóa thành công');
    }

    public function getAjaxNCByRAndSC(Request $request){
        $data = $request->all();
        if ($data['mar']){
            $output = "";
            $ngaychieu = DB::table('suatchieu as sc')
            ->select('sc.NgayChieu')
            ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
            ->join('rap as r','p.IDRap','=','r.id')
            ->where('sc.IDPhim','=', $data['idphim'])
            ->where('r.id','=',$data['mar'])
            ->orderBy('sc.NgayChieu','ASC')
            ->get();
            foreach($ngaychieu as $nc){
                $output .= '<option value="'.$nc->NgayChieu.'">'.$nc->NgayChieu.'</option>';
            }
        }               
        echo $output;
    }

    public function getAjaxGioChieuByRAndSC(Request $request){
        $data = $request->all();
        if ($data['mar'] && $data['ngaychieu']){
            $output = "";
            $giochieu = DB::table('suatchieu as sc')
            ->select('sc.GioBatDau')
            ->join('phong as p', 'sc.IDPhong', '=', 'p.id')
            ->join('rap as r','p.IDRap','=','r.id')
            ->where('sc.IDPhim','=', $data['idphim'])
            ->where('sc.NgayChieu', '=', $data['ngaychieu'])
            ->where('r.id', '=', $data['mar'])
            ->orderBy('sc.NgayChieu','ASC')
            ->get();
            foreach($giochieu as $gc){
                $output .= '<option value="'.$gc->GioBatDau.'">'.$gc->GioBatDau.'</option>';
            }
        }               
        echo $output;
    }
}
