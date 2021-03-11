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
	<title>View Costumer Information </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="headers">
		<p>VIEW COSTUMER INFORMATION</p>

	</div>
	<div class="contents">
		<div class="bookbox">
		<h4 style="font-size: 25px; color: white; font-family: monospace; text-shadow: 1px 2px 1px blue; text-align: center;">COSTUMER INFORMATION</h4>
			<?php

				$search_text = $_GET['search_text'];
				
				$sql = "SELECT * FROM customer_info WHERE (custumer_id LIKE '%$search_text%')";

				$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) > 0){

						while($row = mysqli_fetch_assoc($result)){ ?>

						<div>
						<form>
						<br>&nbsp;&nbsp;&nbsp;<label class="labels">Customer Id:&nbsp;&nbsp;&nbsp;<?php echo$row['custumer_id']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label class="labels">Customer Name: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['customer_name']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						&nbsp;&nbsp;&nbsp;<label class="labels">Customer Number:&nbsp;&nbsp;&nbsp;<?php echo $row['customer_num']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label class="labels">Customer Address:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['customer_address']; ?></label><br><br>
					
						</form>
						</div>

						<?php }

			}else{

				echo "No Record Found!!";
			}

	?>
	<a href="view_info.php"><button>VIEW MORE</button>
	</div>
			<a href="menu.php"><button>HOME</button></a>
			
	</div>

<?php include('footer.php'); ?>	