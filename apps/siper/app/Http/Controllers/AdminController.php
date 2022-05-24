<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Petugas=new Petugas();
        $this->User= new User();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ['pengunjung'=> $this->User->viewPengunjung(),
    ];
        return view('admin.admin-dashboard-pengunjung', $data);
    
    }



    public function indexBook(){
        return view('admin.admin-status-buku');
    }

    public function indexPetugas(){
        $data = ['petugas'=> $this->Petugas->viewPetugas(),
        ];
        return view('admin.admin-dashboard-petugas', $data);
        // $pass = $data['petugas'][0]->password;
        // $pass = Hash::make($pass);
        // dd($pass);
       
     
    }

    public function profileAdmin(){
        return view('admin.profile-admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function showpetugas()
    // {
    //    $data = Petugas::all();
    //    return view('admin.admin-dashboard-petugas',compact('data'));   
    //  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahpetugas()
    {
        return view('admin.tambahpetugas');
    //     
    }
    
    public function insertpetugas(Request $request){

        // dd($request->all());
        $data = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'no_telepon' => $request-> no_telepon,
            'password' => Hash::make($request->password),
            'level'=> "petugas",
           
        ]);
        $data->save();
         return redirect()->route('admin-dashboard-petugas');
       
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
