<?php

namespace App\Http\Controllers;

use App\Models\DinhDang;
use Illuminate\Http\Request;

class DinhDangController extends Controller
{

    public function getDanhSach()
    {
        $dinhdang = DinhDang::all();
        return view('Admin.DinhDang.DanhSach', compact('dinhdang'));
    }

    public function getThem()
    {
        return view('Admin.DinhDang.Them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tendinhdang' => ['required', 'unique:dinhdang'],
        ]);

        $orm = new DinhDang();
        $orm->TenDinhDang = $request->tendinhdang;
        $orm->save();
        return redirect()->route('dinhdang.danhsach')->with('mes','Thêm thành công');
    }

    public function getSua($id)
    {
        $dinhdang = DinhDang::find($id);
        return view('Admin.DinhDang.Sua', compact('dinhdang'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tendinhdang' => ['required', 'unique:dinhdang,tendinhdang,'.$id],
        ]);
        
        $orm = DinhDang::find($id);
        $orm->TenDinhDang = $request->tendinhdang;
        $orm->save();
        return redirect()->route('dinhdang.danhsach')->with('mes','Sửa thành công ');
    }

    public function getXoa($id)
    {
        $orm = DinhDang::find($id);
        $orm->delete();
        return redirect()->route('dinhdang.danhsach')->with('mes','Xóa thành công');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DinhDang  $dinhDang
     * @return \Illuminate\Http\Response
     */
    public function show(DinhDang $dinhDang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DinhDang  $dinhDang
     * @return \Illuminate\Http\Response
     */
    public function edit(DinhDang $dinhDang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DinhDang  $dinhDang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DinhDang $dinhDang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DinhDang  $dinhDang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DinhDang $dinhDang)
    {
        //
    }
}
