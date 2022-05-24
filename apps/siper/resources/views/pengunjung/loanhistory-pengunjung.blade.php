<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loanhistory-pengunjung.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Riwayat Peminjaman</title>
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
                          <li><a href="profile-pengunjung"class="dropdown-item" href="#">Profil</a></li>
                          <li><a href="loanhistory-pengunjung" class="dropdown-item" href="#">Riwayat</a></li>
                          <li><a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form></li>
                         </ul>
                      </li>
        </div>
      </div>
    </nav>

  <!-- body -->
<center>
  <h2 class="title"> Riwayat Peminjaman Buku  </h2> 
<hr class="lines">
<br>

<!-- Daftar Riwayat Buku-->

<div class="cards">
    <div class="card-header">
      1
    </div>
    <center>
    <img src="/images/book1.jpeg" class="img" alt="gambarbuku">
    </center>
    <div class="card-body">
      <div class="content">
      <h5 class="card-title">The Midnight Library</h5>
      <h7 class="card-title">29 April 2022 - 14 Mei 2022 </h7>
      <br>  <br>
      <a href="perpanjang-waktu" class="btn btn-primary">Perpanjang Waktu</a>
    </div>
  </div>
</div>
<br>
<div class="cards">
  <div class="card-header">
    2
  </div>
  <center>
  <img src="/images/book1.jpeg" class="img" alt="gambarbuku">
  </center>
  <div class="card-body">
    <div class="content">
    <h5 class="card-title">The Power Of Habit</h5>
    <h7 class="card-title">29 April 2022 - 14 Mei 2022 </h7>
    <br>  <br>
    <a href="loaningpage_pengunjung.html" class="btn btn-primary">Sudah Dikembalikan</a>
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

  </html>