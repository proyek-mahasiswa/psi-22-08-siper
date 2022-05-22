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
</html>
