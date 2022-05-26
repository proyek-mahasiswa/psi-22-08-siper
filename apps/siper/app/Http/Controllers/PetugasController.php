<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->User = new User();
        $this->Buku = new Buku();
        $this->middleware('auth');
       
    }
    
    public function index()
    {
        $data = Buku::all();
        $data = User::all();
        
        $user = ['pengunjung'=> $this->User->viewPengunjung(),
    ];
        
        return view('petugas.homepagepengunjung_petugas',compact('data'),$user);
    }

    public function vPengunjung(){

        $user = ['pengunjung'=> $this->User->viewPengunjung(),
    ];
        return view('petugas.homepagepengunjung_petugas', $user );
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
        $buku = ['buku'=> $this->Buku->viewBuku(),
    ];
        return view('petugas.daftarbuku', $buku);
      
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
        $buku = Buku::create([
            'judul' => $request-> judul,
            'pengarang' => $request-> pengarang,
            'penerbit' => $request-> penerbit,
            'tahunterbit' => $request-> tahunterbit,
            'rak' => $request-> rak,
           
        ]);

        $buku->save();
         return redirect()->route('v_daftarbuku');
    }

    public function editbuku(){
        $buku= Buku::find(Request()->id);
        $buku->judul=Request()->judul;
        $buku->pengarang=Request()->pengarang;
        $buku->penerbit=Request()->penerbit;
        $buku->tahunterbit=Request()->tahunterbit;
        $buku->rak=Request()->rak;
        
        $buku->save();
        return redirect()->route('v_daftarbuku');

    }

    public function hapusbuku(){
        $buku = Buku::find($id);
        $buku -> delete();

        return redirect()->back();
    }

    public function searchbuku(Request $request){
        $search = $request->get('search');
        $buku = DB::table ('buku')->where ('judul', 'like', '%'.$search.'%')->paginate();
        return view('petugas.daftarbuku',['buku'=> $buku]);
    }

    public function searchpengunjung(Request $request){
        $search = $request->get('search');
        $user = DB::table ('users')->where ('username', 'like', '%'.$search.'%')->paginate();
        return view('petugas.homepagepengunjung_petugas',['pengunjung'=> $user]);
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
