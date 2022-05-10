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
    <div class="card-register">
        <h1>Register</h1>
    <div class="formRegister">
        <form action="/create_account"
        method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">

        <label for="roles">Role</label>
        <select id="roles" name="roles">
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
            <option value="Pengunjung">Pengunjung</option>
        </select>

        <input type="submit" value="Submit">
        <p>Sudah punya akun?</p> <a href="/login">Silahkan login</a>
       
    </form>
        </div>

        </div>
</body>
</html>
