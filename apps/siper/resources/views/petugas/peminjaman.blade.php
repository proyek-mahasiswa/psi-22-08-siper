<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/peminjaman.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Peminjaman | SIPER</title>
  </head>


  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-white bg-blue">
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
<nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand"></a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
  
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <!--end of search bar-->
  <table border="0px" align="center" width="80%">
    <td>
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('v_pengunjung') }}">Pengunjung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_peminjaman') }}">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_pengembalian') }}">Pengembalian </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('v_perpanjangan') }}">Perpanjangan </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('v_databuku') }}">Data Buku </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('v_daftarbuku') }}">Daftar Buku </a>
          </li>
        </li>
        </li>
      </ul>
    
      </td>
      <td class=cardForm>
        <div class="card mb-3" style="max-width: 490px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://img2.pngdownload.id/20190807/gxp/kisspng-businessperson-avatar-user-profile-business-admini-5d4a5d51a0e693.2711748415651546416591.jpg" width="150x150" class="img-fluid rounded-start" alt="...">
            </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">Nama  : Bagas</p>
                      <p class="card-text">Status: Siswa Aktif</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
          </div>
        </div>
            <td>
            <button type="submit" value="submit" class="btn btn-primary">Diterima</button>
            <button type="submit" value="submit"class="btn btn-danger" >Ditolak</button>
            </td>
      </td>
</table>
  <!-- <center>
    <!- <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Rusak</button>
    <button type="button" class="btn btn-primary">Hilang</button>
    <button type="button" class="btn btn-primary">Sudah dikembalikan</button>
  </div> -->
<!-- 
  <a class="btn btn-primary" href="#" role="button">Diterima</a>
  <button class="btn btn-primary" type="submit">Ditolak</button>
  </center> -->
 
  </body>

  </html>