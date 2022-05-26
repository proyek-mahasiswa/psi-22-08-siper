<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;

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
        $this->User= new User();
        $this->Petugas= new Petugas();
        
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
            $buku = DB::table('buku') -> get ();
           return view('pengunjung.homepage_pengunjung', ['buku' => $buku]);

        }
        else if(Auth::user()->level == 'petugas'){
            $data = ['pengunjung'=> $this->User->viewPengunjung(),
        ];
            return view('petugas.homepagepengunjung_petugas',$data);
    }

        else if(Auth::user()->level == 'admin'){
            $data = ['pengunjung'=> $this->User->viewPengunjung(),
        ];
            return view('admin.admin-dashboard-pengunjung',$data);
    }
    }
}