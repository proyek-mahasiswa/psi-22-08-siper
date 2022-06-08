<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Buku;
use App\Models\User;
use App\Models\Buku as ModelsBuku;
use App\Models\Peminjaman;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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


    public function profilePengunjung(){
        return view('pengunjung.profile-pengunjung');
    }

    public function loanHistory(){
        $datas = Peminjaman::where('user_id', Auth::user()->id)->get();
        return view('pengunjung.loanhistory-pengunjung', compact('datas'));
    }

    public function perpanjangwaktu(Peminjaman $peminjaman){
        return view('pengunjung.perpanjangwaktu_pengunjung', compact('peminjaman'));
    }

    public function perpanjang(Peminjaman $peminjaman, Request $request){
        $validator = Validator::make($request->all(), [
            'inputTanggalAwal' => 'required',
            'inputTanggalAkhir' => 'required',
        ]);

        if ($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('inputTanggalAwal')){
                return redirect()->back()->with('error_inputTanggalAwal', $errors->first('inputTanggalAwal'));   
            }elseif($errors->has('inputTanggalAkhir')){
                return redirect()->back()->with('error_inputTanggalAkhir', $errors->first('inputTanggalAkhir'));   
            }
        }

        $peminjaman->tanggal_pinjam = $request->inputTanggalAwal;
        $peminjaman->tanggal_kembali = $request->inputTanggalAkhir;
        $peminjaman->status = 'request perpanjangan';
        $peminjaman->update();
        return redirect()->back()->with('success', 'Success');   ;
    }

    public function kembalikan(Peminjaman $peminjaman){
        $peminjaman->status = 'request pengembalian';
        $peminjaman->updated_at = now();
        $peminjaman->update();
        return redirect()->back();   
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
      $buku = DB::table('buku') -> get();
      return view('pengunjung.homepage_pengunjung', ['buku' => $buku]);
    }

    public function search(Request $request){
        $search = $request->get('search');
        $buku = DB::table ('buku')->where ('judul', 'like', '%'.$search.'%')->paginate(4);
        return view('pengunjung.homepage_pengunjung',['buku'=> $buku]);
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
        return redirect()->route('profile-pengunjung')->with('success', 'Success');   ;
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
    public function destroy(User $pengunjung)
    {
        $pengunjung->delete();
        return redirect()->route('admin-dashboard-pengunjung');
    }
}
