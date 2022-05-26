<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-dashboard-petugas.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <title>Admin|Petugas</title>
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
                            data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                        <li><a href="profile-admin" class="dropdown-item" href="#">Profile</a></li>
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
        <h2 class="title"> SIPER SMA SWASTA HKBP 2 TARUTUNG </h2>
    </center>
  
    <div class="menu">
                <ul>
                <a href="admin-dashboard-pengunjung" class="">Pengunjung</a>
                <a href="admin-dashboard-petugas" class="active">Petugas</a>
                <a href="admin-status-buku" class="">Status Buku</a>
                </ul>
    </div>
    <h1 class="text-center mb-4">Data Petugas</h1>
  <div class="container ">
  <input type="submit" class="btn btn-success" value="Tambah Petugas +" href="#" data-target="#insertpetugas" data-toggle="modal"></input>
      <div class="row">
      
        <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nama</th>
      <th scope="col"></th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($petugas as $row) 
  <tr>
      <th scope="row"></th>
      <td>{{$row->name}}</td>
      <td></td>
      <td>
      <input type="submit" class="btn btn-warning" value="Edit" href="" data-target="#edit-petugas{{$row->id}}" data-toggle="modal"></input>
                    <input type="submit" class="btn btn-danger" value="Hapus" href="/editpetugas" data-target="#hapuspetugas" data-toggle="modal"></input> 
      </td>
    </tr>
    @endforeach
  </tbody>

</table>

    </div>
</div>
   
   
    <!-- Edit Petugas  -->
    @foreach($petugas as $row)
    <div class="modal fade" id="edit-petugas{{$row->id}}" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Edit Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="{{route ('editpetugas')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$row->id}}">
                        <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control"  value="{{$row->username}} " name="username" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control"  value="{{$row->name}}" name="name" id="exampleInputName1" aria-describedby="emailHelp">
                             
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$row->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" value="{{$row->no_telepon}}" id="exampleInputNotelp" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" value="{{$row->password}}" name="password" id="exampleInputPassword1">
                            </div>

                         
                            <button type="submit" class="btn btn-primary" >Submit</button>
                            </form>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach


 <!-- Tambah Petugas  -->
    <div class="modal fade" id="insertpetugas" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Tambah Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="{{route('insertpetugas')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control"   name="username" id="exampleInputUsername1" aria-describedby="emailHelp">
                             
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control"   name="name" id="exampleInputName1" aria-describedby="emailHelp">
                             
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" id="exampleInputNotelp" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>

                         
                            <button type="submit" class="btn btn-primary" id="suksestambah">Submit</button>
                            </form>

                    </form>
                </div>
            </div>
        </div>
    </div>

    
  
    <!--Hapus Petugas-->
                        <div class="modal fade" id="hapuspetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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