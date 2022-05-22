<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {
        // return view('homepage_pengunjung');
        if(Auth::user()->level == 'pengunjung'){
           return view('pengunjung.homepage_pengunjung');

        }
        else if(Auth::user()->level == 'petugas'){
            return view('petugas.homepagepengunjung_petugas');
    }

        else if(Auth::user()->level == 'admin'){
            return view('admin.admin-dashboard-pengunjung');
    }
    }
}