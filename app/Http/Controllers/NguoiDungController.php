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
        return view('Home.Page.dangnhap');
    }

    public function postDangNhap(Request $request)
    {     
        if(Auth::attempt(['email'=>$request->Email,'password'=>$request->Password]))
        {
            return redirect()->route('homeindex');
        }
        else 
        {
            return redirect()->route('dangnhap');   
        }
    }

    public function getDangNhapAdmin()
    {
        return view('Admin.login');
    }

    public function postDangNhapAdmin(Request $request)
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

    public function postDangXuat(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function getDangKy()
    {
        return view('Admin.layouts.signup');
    }

    public function postDangKy(Request $request)
    {
        $this->validate($request, [
            'HoTen' => ['required'],
            'SDT' => ['required', 'digits: 10', 'unique:users'],
            'DiaChi' => ['required'],
            'Email' => ['required', 'unique:users', 'email:rfc,dns'],
            'Password' => ['required', 'min:8'],
            'Password-Confirm' => ['required', 'same:Password'],
            'remember' => ['required'],
        ]);

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

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'HoTen' => ['required'],
            'SDT' => ['required', 'digits: 10','unique:users,SDT,'.$id],
            'DiaChi' => ['required'],
        ]);

        $orm = User::find($id);
        $orm->name = $request->HoTen;
        $orm->SDT = $request->SDT;
        $orm->DiaChi = $request->DiaChi; 
        $orm->password = Hash::make($request->Password);
        $orm->save();
        return redirect()->route('thongtinnguoidung')->with('mes','Sửa thành công');
    }
}
