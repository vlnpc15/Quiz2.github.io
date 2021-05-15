<?php
	session_start();
	include('connection.php');
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
        .login{
            background-color: darkslategray;
            padding: 1px;
            box-shadow: 0 13px 1rem rgb(255, 255, 255), inset 0 -1px 0 rgba(255, 255, 255, 0.815);
            margin: auto 30% auto 30%;
        }
        form{
            margin: 3% 2% 3% 2%;
            font-size: large;
        }
    </style>
</head>
<body>
    <h2 align=center>LOGIN</h2>
    <div class="login">
        <form method="POST" action="login.php" align=center>
            <label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username"><br><br>
            <label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
            <input class="check" type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me <br><br>            
            <input class="button" type="submit" value="Login" name="login">
        </form>
    </div>
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>