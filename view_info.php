<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_catering';

$conn = mysqli_connect($hostname,$username,$password,$database);

	if (!$conn) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Guest Information Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		img{
			margin-left: 5px;
			height: 110px;
			width: 110px;
			float: left;
		}
	</style>
</head>
<body>
	<div class="headers">
		<img src="./pic/arts1.png">
		<p>VIEW GUEST INFORMATION</p>

	</div>
	<div class="contents">
		<div class="bookbox">
		<h4 style="font-size: 25px; color: white; font-family: monospace; text-shadow: 1px 2px 1px blue; text-align: center;">COSTUMER INFORMATION</h4>
					<div>
						<form action="search.php" method="GET">
						<label for="name" class="labelss" style="margin-left:380px;";>Enter Event Id:</label>
						<input type="text" class="input_box" name="search_text">
						<a href="search.php"><input type="submit" name="search" value="GO" class="go_btn"></a>
						</form> 
					</div> 

		
	</div>
			<a href="menu.php"><button>HOME</button></a>
			
	</div>

<?php include('footer.php'); ?>	
						