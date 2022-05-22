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
                'tahun_terbit' => $request->tahun_terbit,
                'rak_buku' => $request->rak_buku,
            ]);
            $book->save();
            return redirect('daftarbuku');
        }
    

        public function showBook()
    {
        
            // mengambil data dari table buku
            $books = DB::table('books') -> get();

            // mengirim data bukuke view 
            return view('homepage_pengunjung', ['books' => $books]);
            }
    



public function getDetail($id){

  //  $book = DB::table('books')->where('id', $id)->first();

 //   return view('loaningpage_pengunjung', ['id' => $id]);
//}
$book = Book::find($id);
return view("loaningpage_pengunjung")->with("book", $book);
}
}