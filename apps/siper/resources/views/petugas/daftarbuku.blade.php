    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link rel="stylesheet" href="css/daftarbuku.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Daftar Buku | SIPER</title>
      </head>
      <body>
    
     <!-- navbar -->

     <nav class="navbar navbar-expand-lg navbar-white bg-blue fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">SIPER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span> </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Home</a>
            </li>
                
                  
  
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a href="profilePetugas"class="dropdown-item" >Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                         </form><li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    
    <!-- body -->

    <center>
       <h1>Profil Perpustakaan</h1>
       <h2>SMA Swasta HKBP 2 Tarutung</h2> 
       <hr class="line">
      </center>
    
    

      <!-- search bar-->
      
      <nav class="navbar navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    
            <button type="submit" class="btn btn-primary">Search</button>
    
          </form>
        </div>
      </nav>
    
    <!--end of search bar-->
    
    <!-- data buku-->
  

    <!-- <div class="button" href="petugas-form tambah buku.html">
    </a></span> <button>Tambahkan</button>
    </div> -->

                        <div class="kembali">
                        <a class="btn btn-danger" href="home" role="button">Kembali</a>
                        </div>
<br>
                        <div class="tambahb">
                        <a class="btn btn-primary" href="tambahBuku" role="button" data-target="#tambah-buku" data-toggle="modal">Tambahkan</a>
                        </div>
<br>


@foreach ($buku as $row)
    <div id="scrollspyHeading1">
    <div class="row row-cols-1 row-cols-md-4 ">
      <div class="col">
        <div class="card">
          <img src="/images/book1.jpeg" class="card-img-top" alt="rim1">
          <div class="card-body">
            <h5 class="card-title">{{$row->judul}}</h5>
            <p class="card-text"> Penerbit : {{$row->penerbit}}</p>
            <p class="card-text"> Tahun Terbit : {{$row->tahunterbit}} </p>
            <a href="petugas-edit" class="btn btn-warning">Edit</a>
          </div>
        </div>
      </div>
  @endforeach

  

    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="tambah-buku" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Tambah Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                
                <div class="modal-body">
                    <form action="{{route('insertbuku')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control"  value=" " name="judul" id="judul" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-5">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input type="text" class="form-control"  value=" " name="pengarang" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-5">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control"  value=" " name="penerbit" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-5">
                                <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                                <input type="text" class="form-control"  value="" name="tahunterbit" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-5">
                                <label for="rak" class="form-label">Rak</label>
                                <input type="text" class="form-control"  value=" " name="rak" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>
                            

                         
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                </div>
            </div>
        </div>
    </div>
    
    <!--Footer -->
    <footer>
    <div class="text-center">
      <div class="container p-2"></div>
      <div class="text-center p-1">
        © 2022 Copyright: SIPER SMA Swasta HKBP 2 Tarutung </div>
      <div class="text-center p-1">
        Contact Us On : xxxxxxxx </div>
    </div>
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </html>