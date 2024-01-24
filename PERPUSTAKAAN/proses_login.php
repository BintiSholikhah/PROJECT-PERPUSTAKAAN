<?php
// Variable untuk koneksi ke MySQL
$host = "localhost";
$username = "root";
$password = "";
$databasename = "perpustakaan";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($host, $username, $password, $databasename);


	if (isset($_POST['username']) && isset($_POST['password'])) {
		function validate($data){
	       $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}



	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username) && empty($password) ) {
		header("Location: login.php?error=Isi Username dan Password");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Isi Password");
	    exit();
	}else if(empty($username)){
        header("Location: login.php?error=Isi Username");
	    exit();
	}else{
		$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                session_start();
            	$_SESSION['username'] = $row['username'];
            	header("Location: admin.php");
		        exit();
            }else{
				header("Location: login.php?error=Username atau Password salah");
		        exit();
			}
		}else{
			header("Location: login.php?error=Username atau Password salah");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}