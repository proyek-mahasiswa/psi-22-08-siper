<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'no_telepon',
        'level',
        'password',

    ];

    public function viewPetugas(){
        return DB::table('users')->where('level','petugas')->orderBy('created_at','desc')->get();
}
}
