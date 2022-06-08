<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $buku = DB::table('buku')->get();
        return view('admin.admin-status-buku',['buku' => $buku]);
    
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

    public function editpetugas(){
        $user= User::find(Request()->id);
        $user->username=Request()-> username;
        $user->name=Request()-> name;
        $user->email=Request()-> email;
        $user->no_telepon=Request()-> no_telepon;
        $user->password=Request()-> password;
        
        $user->save();
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
        return redirect()->route('profile-admin')->with('success', 'Success');   ;
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