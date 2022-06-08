<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $datas = Peminjaman::where('status','diproses')->get();
        return view('petugas.peminjaman', compact('datas'));
    }

    public function vPengembalian(){
        $datas = Peminjaman::where('status','request pengembalian')->get();
        return view('petugas.pengembalian',compact('datas'));
    }

    public function vPerpanjangan(){
        $datas = Peminjaman::where('status','request perpanjangan')->get();
        return view('petugas.perpanjangan', compact('datas'));
    }

    public function vDatabuku(){
        $datas = Peminjaman::where('status','!=','diproses')->get();
        return view('petugas.databuku',compact('datas'));
    }

    public function vDaftarbuku(){
        $buku = ['buku'=> $this->Buku->viewBuku(),
    ];
        return view('petugas.daftarbuku', $buku);
      
    }
    
    public function profilePetugas(){
        return view('petugas.profile-petugas');
    }


    public function terimaPerpanjang(Peminjaman $peminjaman){
        $peminjaman->status = 'sudah diperpanjang';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back()->with('confirm', 'Berhasil Menerima Perpanjangan');
    }
   
    public function tolakPerpanjang(Peminjaman $peminjaman){
        $peminjaman->status = 'perpanjangan ditolak';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back()->with('confirm', 'Berhasil Menolak Perpanjangan');
    }


    public function rusak(Peminjaman $peminjaman){
        $peminjaman->status = 'dikembalikan rusak';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back()->with('confirm', 'Berhasil Mengupdate');
    }

    public function hilang(Peminjaman $peminjaman){
        $peminjaman->status = 'hilang';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back()->with('confirm', 'Berhasil Mengupdate');
    }
    
    public function dikembalikan(Peminjaman $peminjaman){
        $peminjaman->status = 'dikembalikan';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back()->with('confirm', 'Berhasil Mengupdate');
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

    public function hapusbuku(Buku $buku){
        $buku->delete();
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



    public function terima(Peminjaman $buku){
        $buku->status = 'diterima';
        $buku->updated_at = now();
        $buku->update();
        return redirect()->back()->with('confirm', 'Berhasil Menerima');
    }
    
    public function tolak(Peminjaman $buku){
        $buku->status = 'ditolak';
        $buku->updated_at = now();
        $buku->update();
        return redirect()->back()->with('reject', 'Berhasil Menolak');
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
    public function editprofile(User $user, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,'.$user->id,
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'no_telepon' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());   
        }

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telepon = $request->no_telepon;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return redirect()->route('profilePetugas')->with('success', 'Success');   ;
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
    public function destroy(User $petugas)
    {
        $petugas->delete();
        return redirect()->route('admin-dashboard-petugas');
    }
}
