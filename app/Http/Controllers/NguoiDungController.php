<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NguoiDungController extends Controller
{
    
    public function getDangNhap()
    {
        return view('Admin.login');
    }

    public function postDangNhap(Request $request)
    {     
        if(Auth::attempt(['email'=>$request->Email,'password'=>$request->Password]))
        {
            return redirect()->route('admin');
        }
        else 
        {
            return redirect()->route('dangnhap');
            
        }
    }


    public function getDangKy()
    {
        return view('Admin.layouts.signup');
    }

    public function postDangKy(Request $request)
    {
        $orm = new User();
        $orm->name = $request->HoTen;
        $orm->SDT = $request->SDT;
        $orm->DiaChi = $request->DiaChi;
        $orm->Quyen = 0;
        $orm->email = $request->Email;
        $orm->password = Hash::make($request->Password);
        $orm->save();
        return redirect()->route('dangnhap');
    }


    public function getDanhSach()
    {
        $nguoidung = User::all();
        return view('Admin.NguoiDung.DanhSach', compact('nguoidung'));
    }

}
