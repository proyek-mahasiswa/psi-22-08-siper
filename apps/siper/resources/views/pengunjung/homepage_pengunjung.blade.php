<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/homepage_pengunjung.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Homepage | SIPER</title>
  </head>
  <body>

    <!-- navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-white bg-blue fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">SIPER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>

                  
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>
                     
                       <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a href="profile-pengunjung"class="dropdown-item">Profil</a></li>
                        <li><a href="loanhistory-pengunjung" class="dropdown-item">Riwayat</a></li>
                        <li><a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a></li>

          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
                       </ul>
                    </li>
      </div>
    </div>
  </nav>
  

</form>



<center>
<h2 class="name"> Sistem Informasi Perpustakaan SMA Swasta HKBP 2 Tarutung  </h2> 
<hr class="line">
</center>

<div class="row">
  <div class="col-md-4">
  <form class="form" method="get" action="/search">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input wire:model="search" type="text" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Judul Buku">
        <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary mb-1">Search</button>
        </span>
        </div>
    </div>
</div>


<div id="scrollspyHeading1">
<div class="row row-cols-1 row-cols-md-4 ">
@foreach ($buku as $datas)
  <div class="col">
<br>
    <div class="card">
      <img src="/img/book.png" class="card-img-top" alt="Tidak ada gambar">
      <div class="card-body">
        <h5 class="card-title">{{ $datas->judul}}</h5>
        <p class="card-text"> Nama Pengarang : {{ $datas -> pengarang }} </p>
        <p class="card-text"> Rak Buku : {{ $datas -> rak }}</p>
       
      <a href="/pinjam/{{ $datas->id }}" class="btn btn-primary">Detail</a>
     
       
         </div>

      </div>
    </div>
    @endforeach
  </div>

  
</div> 
</div>
<!--Footer -->

</body>
</html>