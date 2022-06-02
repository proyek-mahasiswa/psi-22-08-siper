<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Buku;
use app\Http\Models\User;
use App\Models\Buku as ModelsBuku;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\DB;


class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $buku = ModelsBuku::where('id', $id)->first();
        return view('pengunjung.loaningpage_pengunjung')->with(compact(['buku']));
    }


    public function profilePengunjung()
    {
        return view('pengunjung.profile-pengunjung');
    }

    public function loanHistory()
    {
        return view('pengunjung.loanhistory-pengunjung');
    }

    public function perpanjangwaktu()
    {
        return view('pengunjung.perpanjangwaktu_pengunjung');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $buku = DB::table('buku')->get();
        return view('pengunjung.homepage_pengunjung', ['buku' => $buku]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $buku = DB::table('buku')->where('judul', 'like', '%' . $search . '%')->paginate(4);
        return view('pengunjung.homepage_pengunjung', ['buku' => $buku]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
