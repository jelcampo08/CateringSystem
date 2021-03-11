<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_catering';
$errors = array();


//connect to the database
$conn = mysqli_connect($hostname,$username,$password,$database);
	if (!$conn) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}

	if (isset($_POST['update'])) {
		# code...
		$event_id          = $_POST['event_id'];
		$event_date        = date('Y-m-d');
		$event_location    = $_POST['event_location'];
		$event_motif       = $_POST['event_motif'];
		$event_type        = $_POST['event_type'];
		$no_guests         = $_POST['no_guests'];
		


		mysqli_query($conn,"UPDATE event_info SET event_date='$event_date', event_location='$event_location', event_motif='$event_motif' ,event_type='$event_type', 
					no_guests='$no_guests' WHERE event_id='$event_id'");
		header("Location:view_reserve.php");
}

		//Getting Id and showing result that have been updated
if (isset($_GET['event_id']) && is_numeric($_GET['event_id']) && $_GET['event_id'] > 0)
{

$id = $_GET['event_id'];
$result = mysqli_query($conn,"SELECT * FROM event_info WHERE event_id=".$_GET['event_id']);
$row = mysqli_fetch_array($result);

	if($row)
		{
			
			$event_id          = $row['event_id'];
			$event_date        = $row['event_date'];
			$event_location    = $row['event_location'];
			$event_motif       = $row['event_motif'];
			$event_type        = $row['event_type'];
			$no_guests         = $row['no_guests'];
		}

	else {
		echo "No results!";
		}

}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
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
		<img src="./pic/logo.png">
		<p>UPDATE EVENT INFORMATION</p>

	</div>
	<div class="contents">
		<div class="bookbox">
			<h4 style="font-size: 25px; color: white; font-family: monospace; text-shadow: 1px 2px 1px blue; text-align: center;">EDIT EVENT INFORMATION</h4> 
				<form method="POST" enctype="multipart/form-data" action="edit.php">
				<input type="hidden" name="id" value="<?php echo $event_id; ?>"/>
				<div>
					<label for="name" class="labelss" style="margin-left:380px;";>Enter Event Id.</label>
					<input type="text" class="input_box" name="event_id" value="<?php echo $event_id; ?>"> 
				</div>
				<div class="label_div">
					<label for="name" class="labels";>Event Type :</label>
					 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="input_box" name="event_type" value="<?php echo $event_type; ?>">
					<label for="name" class="labels">Event Date:</label>
					&nbsp;&nbsp; &nbsp; &nbsp;<input type="text" class="input_box" name="event_date" value="<?php echo $event_date; ?>">
					
				<div class="label_div">
					 <label for="name" class="labels";>Event Location :</label>
					&nbsp; &nbsp; &nbsp;<input type="text" class="input_box" name="event_location" value="<?php echo $event_location; ?>">
					<label for="name" class="labels";>Event Motif:</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="event_motif" value="<?php echo $event_motif; ?>"> 
				</div>
				</div>
				<div class="label_div">
					<label for="name" class="labels";>No of Guests :</label>
					&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_box" name="no_guests" value="<?php echo $no_guests; ?>">

				</div>

			<button type="submit" name="update">UPDATE</button>
		</form>
		</div>
			<a href="menu.php"><button>HOME</button></a>
	</div>

<?php include('footer.php'); ?>	