<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/profile-pengunjung.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Profil | Pengunjung</title>
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

  <center>
    <h2 class="title"> Profile </h2> 
  <hr class="lines">
  <br>
  
    <body>
      <div class="wrap">
           <table>
              <tr>
                  <td rowspan="8" width="100px"> <img src="https://images.assetsdelivery.com/compings_v2/thesomeday123/thesomeday1231712/thesomeday123171200008.jpg" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:30px" border="2px" ></td>
              </tr>
              <tr>
                  <td><b>Username </b></td>
                  <td>:</td> <td> {{Auth::user()->username}} </td>
              </tr>
              
              <tr>
                  <td><b>Nama </b></td>
                  <td>:</td> <td> {{Auth::user()->name}} </td>
              </tr>
              <tr>
                  <td><b>Password </b></td>
                  <td>:</td> <td> {{Auth::user()->password}} </td>
              </tr>
              <tr>
                  <td><b>Email </b></td><td>:</td> <td>{{Auth::user()->email}}</td>
              </tr>
              <tr>
                <td><b>Nomor Telepon</b></td><td>:</td> <td>{{Auth::user()->no_telepon}}</td>
            </tr>
            
          </table>
          </center>
  <br> <br>
  <center>
  <div class="button-update-profile-pengunjung">
              <a type="submit" class="btn btn-primary" href="" role="button" data-target=#editprofil data-toggle="modal"> Update </a>
              <a type="button" class="btn btn-secondary" href="home" role="button"> Back </a>
                </div>
      </div>
      </center>
<!-- Update Modals  -->

<div class="modal fade" id="editprofil" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
             
                <div class="modal-body">
                    <form action=" {{ route('editprofile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control"  value=" " name="name" id="exampleInputName1" aria-describedby="emailHelp">
                             
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control"   name="name" id="exampleInputName1" aria-describedby="emailHelp">
                             
                            </div>


                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" id="exampleInputNotelp" aria-describedby="emailHelp">
                             
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
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