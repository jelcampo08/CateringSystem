<?php
//connecting to database
	$conn = mysqli_connect('localhost', 'root', '', 'db_catering');
	if (mysqli_connect_errno())
	    {
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	    }
	?>
	<?php

//getting selected product id
	if (isset($_GET['event_id']))
	{

//deleting selected product id from database
	$result = mysqli_query($conn,"DELETE FROM event_info WHERE event_id=".$_GET['event_id']);
	if($result==true)

	header("Location:check_out.php");
	array_push($errors, "Item Sucessfully Deleted");
	}

?>