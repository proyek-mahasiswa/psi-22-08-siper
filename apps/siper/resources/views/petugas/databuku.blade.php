<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/databuku.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Data Buku | SIPER</title>
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

      <center>
       <h1>Profil Perpustakaan</h1>
       <h2>SMA Swasta HKBP 2 Tarutung</h2> 
   
      </center>

<!-- search bar-->
<!-- <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand"></a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
  
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
  </nav>
  <br /> -->
  <!--end of search bar-->
  <div class="container">
  <div class="row"><nav style="margin-left:400px; margin-bottom:40px;"class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
    
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
  </nav>
    <div class="col-sm">
    <td>



    <ul class="list-group">
  <li class="list-group-item " aria-current="true"><a class="nav-link active" aria-current="page" href="{{ route('v_pengunjung') }}">Pengunjung</a></li>
  <li class="list-group-item "><a class="nav-link" href="{{ route('v_peminjaman') }}">Peminjaman</a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_pengembalian') }}">Pengembalian </a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_perpanjangan') }}">Perpanjangan </a></li>
  <li class="list-group-item active"><a class="nav-link" href="{{ route('v_databuku') }}">Data Buku </a></li>
  <li class="list-group-item">  <a class="nav-link" href="{{ route('v_daftarbuku') }}">Daftar Buku </a></li>
</ul>

</div>
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Judul</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Biologi</td>
      <td>Diterima</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Ditolak</td>
    </tr>
  </tbody>
</table>
    
  
    </div>
  <!-- <table border="1px" align="center" width="80%">
 
    <td><ul class="nav flex-column">
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
      <td border="1px"class="isiData">
          <th>#</th>
            <th>Nama</th>
            <th>Buku yang dipinjam</th>
            <th>Keterangan</th>
  </td>
        
</td> -->


  <!-- <table class="table table-bordered" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Buku yang dipinjam</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Ardika Solagratia</td>
            <td>kalkulus</td>
            <td>Dipinjam</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Ignatia</td>
            <td>Novel</td>
            <td>Dikembalikan</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Agnes</td>
            <td>Magal.S</td>
            <td>Dikembaliakn</td>
          </tr>
        </tbody>
  </table> -->
  </table>
      <!--Footer -->
  
  </body>


</html>


