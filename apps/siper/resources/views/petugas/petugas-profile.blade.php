<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="css/petugas_profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>petugas-profile</title>

    <link rel="stylesheet" href="css/petugas_profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Homepage | SIPER</title>

  </head>
  <body>

    <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-white bg-blue">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIPER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">Book</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading3">Contact Us</a>
                  </li>

                  
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                     
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                            <li><a href="petugas-pengembalian"class="dropdown-item" href="#">Petugas</a></li>
                            <li><a href="petugas-profile.html" class="dropdown-item" href="#">Profile</a></li>

                            <li><a href="profile_admin.html"class="dropdown-item" href="#">Petugas</a></li>
                            <li><a href="loanhistory_admin.html" class="dropdown-item" href="#">Profile</a></li>

                            <li><a class="dropdown-item" href="#">Logout</a></li>
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
                  <td>:</td> <td> ardikasolagratia </td>
              </tr>
               <!-- Password field -->
              <tr>
                  <td><b>Password </b></td>
                  <td>:</td> 
                  <td>
                      <input type="password" value="FakePSW" id="myInput"> 


                      <input type="checkbox" onclick="myFunction()">Show Password
                  </td>
              </tr>
              

                      <!-- An element to toggle between password visibility -->
                      <input type="checkbox" onclick="myFunction()">Show Password
                  </td>
              </tr>

              <tr>
                  <td><b>Nama </b></td>
                  <td>:</td> <td> Ardika Solagratia </td>
              </tr>

              
              <tr>
                  <td><b>Jenis Kelamin </b></td><td>:</td> <td>Perempuan</td>
              </tr>

              <tr>
              <td><b>No. Telepon </b></td><td>:</td> <td>081234567890</td>
              </tr>

              <tr>
                  <td><b>Jenis Kelamin </b></td><td>:</td> <td>Perempuan</td>
              </tr>

            
          </table>
          </center>
  <br> <br>
  <center>
  <div class="button-update-profile-pengunjung">

              <a type="submit" class="btn btn-primary" href="petugas-edit profile.html" role="button"> Update </a>
              <a type="button" class="btn btn-secondary" href="petugas-perpanjangan.html" role="button"> Back </a>

              <a type="submit" class="btn btn-primary" href="editprofile_pengunjung.html" role="button"> Update </a>
              <a type="button" class="btn btn-secondary" href="homepage_pengunjung.html" role="button"> Back </a>

                </div>
      </div>
    </body>
    </html>