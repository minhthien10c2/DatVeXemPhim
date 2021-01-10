<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminIndex()
    {
        if(Auth::User()->Quyen == 1)
            return view('Admin.layouts.index');
        else
            return redirect()->route('homeindex');
    }
}
