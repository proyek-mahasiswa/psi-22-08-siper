<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="petugas-perpanjangan.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Tambah Buku</title>
  </head>
  <body>

    <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-white bg-blue fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIPER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage_pengunjung.html">Home</a>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="homepage_pengunjung.html">Book</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading3">Contact Us</a>
                  </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                     
                       <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a href="petugas-profile.html" class="dropdown-item" href="#">profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                       </ul>
                    </li>
                </div>
            </div>
        </nav>

    <div class="rows">
        <div class="col-12">
            <center>
                <h2 class="title"> Tambah Buku </h2> 
              <hr class="lines">
              <br>
              <form action="/buku" method="POST">
        @csrf
              </center> 
        </div>

            <div class="mb-3">
              <label for="judul_buku">Judul Buku</label>
              <input type="text" class="form-control" id="judul_buku"name="judul_buku" placeholder="Judul Buku">
            </div>
          
    
            <div class="mb-3">
               <label for="pengarang" >Pengarang</label>
               <input type="text" class="form-control" id="examplepengarang" name="pengarang" placeholder="Pengarang">
           </div>	          
        
           
            <div class="mb-3">
              <label for="penerbit">Penerbit</label>
              <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
            </div>
  
            
              <div class="mb-3">
                 <label for="tahun_terbit">Tahun Penerbit</label>
                 <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun_Terbit">
             </div>	          

             
              <div class="mb-3">
                 <label for="rak_buku" >Rak Buku</label>
                 <input type="text" class="form-control" id="rak_buku" name="rak_buku" placeholder="rak_buku">
             </div>	 		
    		
   
          <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button> 
  
        </div>
        <br>
    </form>
  </html>