<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-dashboard-pengunjung.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <title>Admin|Pengunjung</title>
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
                            data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->username}}</a>

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
    <div class="content1">
        <center>
            <h2 class="title"> SIPER SMA SWASTA HKBP 2 TARUTUNG </h2>
        </center>


        <div class="menu">
            <ul>
                <a href="admin-dashboard-pengunjung" class="active">Pengunjung</a>
                <a href="admin-dashboard-petugas" class="">Petugas</a>
                <a href="admin-status-buku" class="">Status Buku</a>
            </ul>
        </div>
    </div>
    
        <h1 class="text-center mb-4">Data Pengunjung</h1>
        <div class="container ">
        <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nama</th>
      <th scope="col"></th>
      <th scope="col">Aktivitas</th>
      
    </tr>
  </thead>
  <tbody>
  
  <tr>
  @foreach ($pengunjung as $row)
      <th scope="row"></th>
      
      <td><a href="" data-target="#lihatprofil" data-toggle="modal">{{$row->name}}</a></td>
      <td></td>
      <td>
                    <input type="submit" class="btn btn-danger" value="Hapus" href="#" data-target="#hapuspengunjung" data-toggle="modal"></input> 
      </td>
   
    </tr>
    @endforeach
  </tbody>

</table>

      </div>
  </div>




  </div>

<!-- Lihat Petugas  -->

<div class="modal fade" id="lihatprofil" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Profil Pengunjung</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="{{route('insertpetugas')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                             <p>{{$row->username}}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                               <p>{{$row->name}}</p>
                             
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                               <p>{{$row->email}}</p>
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                             <p>{{$row->no_telepon}}</p>
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <p>{{$row->password}}</p>
                            </div>

                         
                            <button type="button" class="btn btn-danger" data-dismiss="modal" >
                        <span aria-hidden="true">Close</span>
                    </button>
                            <!-- <a href="admin-dashboard-pengunjung" type="submit" class="btn btn-primary">Selesai</a> -->
                            </form>

                    </form>
                </div>
            </div>
        </div>
    </div>








   
<!--   
    <table border="0" align="center" width="1000px">
        <tr class="nama-aktif">
    
            <th width="200px">Nama</th>
            <th width="450px">Aktivitas</th>
        </tr>
        <tr>

            <td><a href="profil_pengunjung" class="href">Halo</a></td>
            <td><a type="submit" class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> Hapus </a></td>
        </tr>
      
    </table> -->

  

    <!--Modals Hapus-->
                            <div class="modal fade" id="hapuspengunjung" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <label for="">Apakah data ingin dihapus?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>
    

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>