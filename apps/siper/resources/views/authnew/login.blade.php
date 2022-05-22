<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIPER</title>
	<link href="css/login.css" rel="stylesheet">
</head>
<body>
    
    <form action="{{ route('login') }}" method="post"> 
    @csrf
    <center>
	<div class="form-box">
		<div class="header-text">Login | SIPER</div>
            <div class="imgcontainer">
                <img src="https://cdn.kibrispdr.org/data/logo-perpustakaan-sekolah-1.jpg" width="120x120" alt="Avatar" class="avatar">
            </div>  
              
        <input placeholder="Your username" id=username type="username" name="username"> 

        <input placeholder="Your password" id=password type="password" name="password"> 
        
        <button type="submit" value="submit" >Login</button>
	</div>
    </form>
    </center>
 
</body>
</html>
