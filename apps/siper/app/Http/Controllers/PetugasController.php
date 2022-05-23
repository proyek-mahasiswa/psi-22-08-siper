<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Buku = new Buku();
        $this->middleware('auth');
       
    }
    
    public function index()
    {
        $data = Buku::all();
        
        return view('petugas.homepagepengunjung_petugas',compact('data'));
    }

    public function vPengunjung(){
        return view('petugas.homepagepengunjung_petugas');
    }

    public function vPeminjaman(){
        return view('petugas.peminjaman');
    }

    public function vPengembalian(){
        return view('petugas.pengembalian');
    }

    public function vPerpanjangan(){
        return view('petugas.perpanjangan');
    }

    public function vDatabuku(){
        return view('petugas.databuku');
    }

    public function vDaftarbuku(){
        $data = ['buku'=> $this->Buku->viewBuku(),
    ];
    return view('petugas.daftarbuku', $data);
      
    }
    
    public function profilePetugas(){
        return view('petugas.profile-petugas');
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

    public function insertbuku(Request $request){

        // dd($request->all());
        $data = Buku::create([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahunterbit' => $request-> tahunterbit,
            'rak' => $request-> rak,
           
        ]);

        $data->save();
         return redirect()->route('homepagepengunjung_petugas');
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
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
