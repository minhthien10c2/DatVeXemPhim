<?php

namespace App\Http\Controllers;

use App\Models\DinhDang;
use Illuminate\Http\Request;

class DinhDangController extends Controller
{

    public function getDanhSach()
    {
        $dinhdang = DinDang::all();
        return view('dinhdang.danhsach', compact('dinhdang'));
    }

    public function getThem()
    {
        return view('loaisanpham.them');
    }

    public function postThem(Request $request)
    {
        $orm = new DinhDang();
        $orm->TenDinhDang = $request->tendinhdang;
        $orm->save();
        return redirect()->route('dinhdang');
    }

    public function getSua($id)
    {
        $dinhdang = DinhDang::find($id);
        return view('dinhdang.sua', compact('dinhdang'));
    }

    public function postSua(Request $request, $id)
    {
        $orm = DinhDang::find($id);
        $orm->TenDinhDang = $request->tendinhdang;
        $orm->save();
        return redirect()->route('dinhdang');
    }

    public function getXoa($id)
    {
        $orm = DinhDang::find($id);
        $orm->delete();
        return redirect()->route('dinhdang');
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
