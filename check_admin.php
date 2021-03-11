<?php
  session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];

		if ($username == "admin123" && $password == "admin") {
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['login']=$login;
			header('Location:menu.php');
			exit();
		}
		else {
			header('Location:login.php');
			exit();
		}

	
?>