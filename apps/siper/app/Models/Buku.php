<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Buku extends Model
{
    protected $table='buku';

    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'tahunterbit',
        'rak',

    ];

    public function viewBuku(){
        return DB::table('buku')->orderBy('created_at','desc')->get();
    }
}
