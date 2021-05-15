<?php
    if(isset($_POST['login'])){
		session_start();
		include('connection.php');
 
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=mysqli_query($connection,"select * from `user` where username='$username' && password='$password'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login gagal, user tidak ditemukan!";
			header('location:index.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				setcookie("user", $row['username'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['userid'];
			header('location:homepage.php');
		}
	}
	else{
		header('location:index.php');
		$_SESSION['message']="Diharapkan login terlebih dahulu!";
	    }
?>