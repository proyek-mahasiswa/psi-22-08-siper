<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamans";
    protected $fillable = ['user_id', 'buku_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id','id');
    }
}
