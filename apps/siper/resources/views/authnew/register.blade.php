<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="reg-box">
    <div class="card-register">
        <h1>Register | SIPER</h1>
            <div class="formRegister">
                <form action="/create_account"
                method="POST">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email">

                <label for="no_telepon">No Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="No Telepon">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">

                <input type="submit" value="Submit">
                <h2>Sudah punya akun?</h2> <a href="/login" id="login">Silahkan login</a>
            
            </form>
                </div>

        </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
