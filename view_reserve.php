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

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Reservations Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		img{
			margin-left:5px;
			height: 110px;
			width: 110px;
			float: left;
		}
	</style>
	
</head>
<body>
	<div class="headers">
		<img src="./pic/arts1.png">
		<p>DISPLAY ALL RESERVATIONS</p>

	</div>
	<div class="contents">
		<div class="bookbox">
		<h4 style="font-size: 25px; color: white; font-family: monospace; text-shadow: 1px 2px 1px blue; text-align: center;">ALL EVENT RESERVED</h4> 

		<table>
			<tr>
				<th>EVENT ID.</th>
				<th>EVENT DATE</th>
				<th>EVENT TYPE</th>
				<th>EVENT LOCATION</th>
				<th>NO OF GUESTS</th>

				<th>ACTION</th>
			</tr>
			<?php
				$sql = "SELECT * from event_info;";
				$result = mysqli_query($conn,$sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>

						<tr>
							<td><?php echo $row['event_id']; ?></td>
							<td><?php echo $row['event_date']; ?></td>
							<td><?php echo $row['event_type']; ?></td>
							<td><?php echo $row['event_location']; ?></td>
							<td><?php echo $row['no_guests']; ?></td>
							<td>
							<a href="edit.php?event_id=<?php echo $row['event_id'] ?>" class="edit_btn" >EDIT</a>
							</td>

						</tr>

				<?php	}}else{

					echo "<tr><td colspan='7'><center>No Records Found!!! </center></td></tr>";
				}?>

		</table>

	</div>
			<a href="menu.php"><button>HOME</button></a>
			
	</div>

<?php include('footer.php'); ?>	