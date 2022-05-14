<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    
        public function index()
        {
            return view('petugas.tambah_buku');
        }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeBook(Request $request)
    {
        
            $book = Book::create([
                
                'judul_buku' => $request->judul_buku,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request-> tahun_terbit,
                'rak_buku' => $request-> rak_buku,
            ]);
            $book->save();
            return redirect('/buku.daftar_buku');
        }
    
    }

