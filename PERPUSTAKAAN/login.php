<?php  
	// menghubungkan dengan koneksi
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div></div>
		<div class="containerr">
			<form action="proses_login.php" method="post">
				<p class="kk">LOGIN</p>
				<div>
					<?php if (isset($_GET['error'])) { ?>
						<p class="errorr"><?php echo $_GET['error']; ?></p>
					<?php } ?>
				</div>
				<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Username</label>
           		   		<input type="text" name="username"  placeholder="Username">
           		   </div>
           		</div>
           		<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Password</label>
           		    	<input type="password" name="password"  placeholder="Password">
            	   </div>
            	</div>
				<div class="main-user-info">
                  <div class="user-input-box">
            		<input type="submit" class="btn" name="submit" value="Login" placeholder="Nama">
					</div>
            	</div>
            </form>
        </div>
    </div>
</body>
</html>

