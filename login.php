<?php
  session_start();
    if(isset($_SESSION['login']))
    {
      header('Location:'.$_SESSION['login'].".php");
    }
    elseif(isset($_SESSION['message']))
    { 
      echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
      header('Refresh:0');
      session_destroy();
    }
    elseif(isset($_SESSION['error']))
    {
      echo '<script type="text/javascript">alert("'.$_SESSION['error'].'");</script>';
      header('Refresh:0');
      session_destroy();
    }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
    function validateform(){
      var username = document.myform.username.value;
      var password = document.myform.password.value;
      if(username == "admin123" && password=="admin"){
        alert("Admin Login Success!");
      }
      else if (username==null || username==""){  
        alert('Username is required!');
      }else if (password.length<5){
        alert('Password must be at least 5 characters long.');
      }
      else{
        alert("Invalid Credentials !");
      }


    }
  </script>	
</head>
<body>
<div class="headers">
<p>CATERING SERVICE MANAGEMENT SYSTEM</p>
	</div>
		<form method="POST" action="check_admin.php" name="myform">
		<div class="loginbox">
		<img src="./pic/icon2.jpg" class="contact">
				<h1>ADMIN LOG IN</h1>
				<form>
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username" required>
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password" required>
					<input type="submit" name="login" value="Login" onclick="validateform()"><br><br>
					<a href="#">Lost your password?</a><br>
					
				</form>
			
		</div>
</body>
</html>