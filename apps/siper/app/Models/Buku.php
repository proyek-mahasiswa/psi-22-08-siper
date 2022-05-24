<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'tahunterbit',
        'rak',
        'gambar',

    ];

    public function viewBuku(){
        return DB::table('buku')->orderBy('created_at','desc')->get();
    }
}
