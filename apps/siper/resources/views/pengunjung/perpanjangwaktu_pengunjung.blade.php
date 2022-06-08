<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/perpanjanganwaktu_pengunjung.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Perpanjang Waktu Pengembalian</title>
  </head>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
           

                  
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                     
                       <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a href="profile-pengunjung"class="dropdown-item" href="#">Profil</a></li>
                        <li><a href="loanhistory_pengunjung" class="dropdown-item" href="#">Riwayat</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                       </ul>
                    </li>
      </div>
    </div>
  </nav>

  <center>
    <h2 class="title"> Perpanjang Waktu Peminjaman </h2> 
  <hr class="lines">
  <br>

  <body>
        <div class="wrap">
             <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="/img/book.png" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:30px" border="2px" ></td>
                </tr>
                <tr>
                    <td><b>Nama Buku </b></td>
                    <td>:</td> <td> {{$peminjaman->buku->judul}} </td>
                </tr>
                <tr>
                    <td><b>Pengarang</b></td><td>:</td> <td>{{$peminjaman->buku->pengarang}}</td>
                </tr>
                <tr>
                    <tr>
                        <td><b> Penerbit </b></td><td>:</td> <td> {{$peminjaman->buku->penerbit}}</td>
                    </tr>
                <tr>
                    <td><b>Tahun Terbit </b></td><td>:</td> <td>{{$peminjaman->buku->tahunterbit}}</td>
                </tr>
            </table>
            </center>
    <br> <br>
    
    <!-- Input Tanggal Peminjaman-->
    <form action="{{route('perpanjang', $peminjaman->id)}}" method="POST">
      @csrf
      @method('patch')
      <center>
      <div class="row">
          <div class="col-6">
              <div class="mb-4">
                  <label for="inputTanggalAwal" class="form-label">Tanggal Peminjaman Awal</label>
                  <input type="date" name="inputTanggalAwal" class="form-control" id="inputTanggalAwal" aria-describedby="tanggalAwalHelp" value="{{$peminjaman->tanggal_pinjam}}">
                  @if (\Session::has('error_inputTanggalAwal'))
                        <div id="tanggalAwalHelp" class="form-text text-danger"><i>{!! \Session::get('error_inputTanggalAwal') !!}</i></div>
                  @endif
              </div>
          </div>
          <div class="col-6">
              <div class="mb-4">
                  <label for="inputTanggalAkhir" class="form-label">Tanggal Perpanjangan Waktu</label>
                  <input type="date" name="inputTanggalAkhir" class="form-control" id="inputTanggalAkhir" aria-describedby="tanggalAkhirHelp">
                  @if (\Session::has('error_inputTanggalAkhir'))
                    <div id="tanggalAwalHelp" class="form-text text-danger"><i>{!! \Session::get('error_inputTanggalAkhir') !!}</i></div>
                  @endif
              </div>
          </div>
      </div>
      <center>
      <h3 class="title"> Ajukan Perpanjangan Waktu ?  </h3> 
        @if (\Session::has('success'))
          <div id="tanggalAwalHelp" class="form-text text-success"><i>{!! \Session::get('success') !!}</i></div>
        @endif
      <div class="button-pengajuan">
                  <button type="submit" class="btn btn-primary" > Ajukan </button>
                  <a type="button" class="btn btn-secondary" onclick="location.href ='{{route('loanhistory-pengunjung')}}'" role="button"> Batalkan </a>
      </div>
    </div>
    </form>

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