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
            <a class="navbar-brand" href="#">SIPER</a>
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
                            <li><a href="profile_admin.html" class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
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

    <div class="data">
        <h2>Data Status Buku</h2>
    </div>
    <br>

    <table border="0" align="center" width="1000px" style="margin:auto">
        <tr class="nama-aktif">
            <th width="100px">
                <br>
                <br>
            </th>

            <th width="200px">Buku</th>
            <th width="450px">Keterangan</th>
        </tr>
            
                <tr>
                    <td></td>
                    <td align="left" height="10px">Judul Buku</td>
                    <td></td>
                </tr>

                <tr>
                    <td align="center" height="10px"><img src="img/1.png" width="40" height="40"></td>
                    <td align="left" height="40px">Penerbit</td>
                    <td></td>
                </tr>

                <tr>
                    <td><input type="submit" class="btn btn-info" value="Detail" href="#"></input></td>
                    <td align="left" >Tahun penerbit</td>
                    <td></td>
                </tr>
    </table>
</body>

</html>