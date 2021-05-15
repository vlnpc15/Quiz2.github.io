<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($connection,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QUIZ 2 Pemrograman Website</title>
	<style>
        body{
            background-image: url("map.jpg");
            margin-top: 2%;
            margin-bottom: 5%;
            color: white;
            font-weight: bold;
        }
        h2{
            font-size: 250%;
        }
		.container{
			background-color: darkslategray;
            padding: 1px;
            box-shadow: 0 13px 1rem rgb(255, 255, 255), inset 0 -1px 0 rgba(255, 255, 255, 0.815);
            margin: auto 30% auto 30%;
		}
		a{
			color: white;
			font-size: larger;
		}
	</style>
</head>
<body align=center>
	<h2>Login Success</h2>
	<div class="container">
		<p>Selamat datang :</p>
		<?php echo $row['fullname']; ?>
		<br><br>
	</div>		
	<br><br>
	<a  href="logout.php">Logout</a>
</body>
</html>