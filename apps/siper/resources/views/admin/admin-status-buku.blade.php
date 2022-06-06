<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-status-buku.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <title>Admin|Status Buku</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-white bg-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">SIPER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username }}</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a href="profile-admin" class="dropdown-item">Profile</a></li>
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
    <!-- body -->
    <center>
        <h2 class="title"> SIPER SMA SWASTA HKBP 2 TARUTUNG </h2>
    </center>
    <div class="menu">
                <ul>
                <a href="admin-dashboard-pengunjung" class="">Pengunjung</a>
                <a href="admin-dashboard-petugas" class="">Petugas</a>
                <a href="admin-status-buku" class="active">Status Buku</a>
                </ul>
    </div>
    <h1 class="text-center mb-4 ">Data Status Buku</h1>
    <div class="container">
    <div class="row">
        
    <table class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">Lainnya</th>
      <th scope="col"></th>
      <th scope="col">Buku</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($buku as $row) 
    <tr>
      <th scope="row"><input type="submit" class="btn btn-success" value="Details" href="#" data-target="#detail" data-toggle="modal"></input></th>
      <td></td>
      <td>{{$row->judul}}</td>
      <td></td>
    </tr>
    
  </tbody>
  
@endforeach
<!--Details -->


@foreach ($buku as $row)
<div class="modal fade" id="detail" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form>
                        
                        @csrf
            
                        <div class="mb-3">
                            <label for="username" class="form-label">Judul Buku</label>
                                <p>{{$row->judul}}</p>
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Pengarang</label>
                                <p>{{$row->pengarang}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Penerbit</label>
                                <p>{{$row->penerbit}}</p>   
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                <p>{{$row->tahunterbit}}</p>  
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Rak Buku</label>
                                <p>{{$row->rak}}</p>
                        </div>
                </form>
             
            @endforeach 
        </table>
    </body>
</html>























    <!-- </div>
</div>

    <table border="0" align="center" width="1000px" style="margin:auto">
        <tr class="nama-aktif">
            <th width="100px">
                <br>
                <br>
                <th width="100px">Gambar</th>
            <th width="200px">Buku</th>
            <th width="450px">Keterangan</th>
            </th>
        </tr>
        
            
                <tr>
                    <td></td>
                    <td></td>
                    <td align="left" height="10px">Judul Buku</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td align="left" height="10px">Pengarang</td>
                
                </tr>

                <tr>
                <td></td>
                <td></td>
                <td align="left" height="10px">Penerbit</td>   
            
                </tr>

                <tr>
                    
                <td></td>
                <td><input type="submit" class="btn btn-primary" value="Detail" href="#"></input></td>
                <td align="left" height="10px">Tahun penerbit</td>
                <td ></td>
                
             
                    
                </tr>
    </table> -->
<!--Footer -->

</body>
<footer>
    <div class="text-center">
    <div class="container p-2"></div>
    <div class="text-center p-1">
    © 2022 Copyright: SIPER SMA Swasta HKBP 2 Tarutung </div>
    <div class="text-center p-1">
    Contact Us On : xxxxxxxx </div>
    </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>

