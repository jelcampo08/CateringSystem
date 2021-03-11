<?php
	session_start();
	require('connect_db.php');

	if (isset($_POST['add_customer'])) {
		$custumer_id=mysqli_real_escape_string($connectivity,$_POST['custumer_id']);
		$customer_name=mysqli_real_escape_string($connectivity,$_POST['customer_name']);
		$customer_num=mysqli_real_escape_string($connectivity,$_POST['customer_num']);
		$customer_address=mysqli_real_escape_string($connectivity,$_POST['customer_address']);
		$event_id=mysqli_real_escape_string($connectivity,$_POST['event_id']);
		$event_date=mysqli_real_escape_string($connectivity,$_POST['event_date']);
		$event_location=mysqli_real_escape_string($connectivity,$_POST['event_location']);
		$event_motif=mysqli_real_escape_string($connectivity,$_POST['event_motif']);
		$event_type=mysqli_real_escape_string($connectivity,$_POST['event_type']);
		$no_guests=mysqli_real_escape_string($connectivity,$_POST['no_guests']);

				$Database="INSERT INTO customer_info(customer_name,customer_num,customer_address)VALUES('$customer_name','$customer_num','$customer_address')";
				if(mysqli_query($connectivity,$Database)){	
					$Database="INSERT INTO event_info(event_date,event_location,event_motif,event_type,no_guests)VALUES('$event_date','$event_location','$event_motif','$event_type','$no_guests')";
					if(mysqli_query($connectivity,$Database)){
						echo '<script type="text/javascript">alert("Event Succesfully Reserved!");</script>';	
					}
					else{
						echo '<script type="text/javascript">alert("!! Failed To Reserved");</script>'; 
					}

				}
				else{
					echo '<script type="text/javascript">alert("!! Failed To Reserved");</script>';
				}
			}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add A Reservation Page</title>
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
		<p>ADD A RESERVATION</p>

	</div>
	<div class="contents">
		<div class="bookbox">
			<h3 style="font-size: 25px; color: white; font-family: monospace; text-shadow: 1px 2px 1px blue; text-align: center;">ADD CUSTOMER INFORMATION</h3> 
				<form method="POST" action="" enctype="multipart/form-data">
				<div class="label_div">
					<label for="name" class="labels">Add Customer Id:</label>
					<input type="text" class="input_box" name="custumer_id"> 
					<label for="name" class="labels";>Customer Name :</label>
					 &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="customer_name">
				</div>
				<div class="label_div">
					<label for="name" class="labels">Customer Number:</label>
					<input type="text" class="input_box" name="customer_num">
					 <label for="name" class="labels";>Customer Address :</label>
					<input type="text" class="input_box" name="customer_address">
					
				<div class="label_div">	
					<label for="name" class="labels";>Event Date:</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="event_date"> 
					<label for="name" class="labels";>Event Id :</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="event_id">
				</div>
				</div>
				<div class="label_div">
					<label for="name" class="labels";>Event Location:</label>
					&nbsp;&nbsp;<input type="text" class="input_box" name="event_location"> 
					<label for="name" class="labels";>Event Motif :</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="event_motif">
				</div>
				<div class="label_div">
					<label for="name" class="labels";>Event Type :</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="event_type">
					<label for="name" class="labels";>No of Guests:</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="no_guests"> 
				</div>

			<button type="submit" name="add_customer">RESERVED</button>
		</form>
		</div>
			<a href="menu.php"><button>HOME</button></a>
			
	</div>

<?php include('footer.php'); ?>	