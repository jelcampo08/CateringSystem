<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_haiyan';
	
	$conn = mysqli_connect($hostname,$username,$password,$database);
	if (!$conn) {
		echo mysqli_connect_error();
	}
	if (isset($_POST['submit'])) {
		
		if($_FILES['review_pic']['size'] > 0){
			$uploadFolder = 'uploads/';
			$filename = $_FILES['review_pic']['name'];

		$uploadStatus =	move_uploaded_file($_FILES['review_pic']['tmp_name'],$uploadFolder.$filename);
		if ($uploadStatus) {
			$username = $_POST['username'];
			$content = $_POST['content'];
			$review_pic = $filename;
			$reviewdate = date('Y-m-d');

			$sql = "INSERT INTO tbl_reviews(username,review_pic,content,review_date)
			values ('$username','$review_pic','$content','$reviewdate');";

			$result = mysqli_query($conn,$sql);
				if($result){
					echo "Successfully Posted your Review!!!";
				}else{
					echo "Error Posting your Review! ";
				}
			
		}

		}else{
			echo "Choose a picture to upload!!!";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Review Page</title>
	<style >
		.reviewbox{
			width: 60%;
			height: 1300px;
			background: #a55540;
			color: #fff;
			top: 112%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;

		}
		
		.reviewbox h4{
			margin-top: 10px;
			font-size: 40px;
			color: #9dc6a7;
			font-style: cursive;
			text-align: center;
			font-weight: bold;
		}
		.reviewcont{
			height: 250px;
			width: 90%;
			background: #f1e3cb;
			display: inline-block;
			margin-left: 45px;
		}
		
		p{
			float: left;
			color: black;
			font-weight: bolder;
			font-size: 20px;
			font-family: monospace; 
			margin-left: 5px;
			margin-top: 5px;
		}
		h2{
			margin-left: 10px;
		}
		h3{
			margin-left: 10px;
		}
		img{
			margin-left: 10px;
		}
		body {
            margin: 0;
            background: url('pic/bg12.jpg') no-repeat;
            background-size: cover;
            background-position: center center; 
            background-attachment: fixed;
        }


        header {
            display: inline-block;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            line-height: 60px;
            background-color: #f9b384;
            opacity: .7;
            text-align: right;

        }

        header * {
            display: inline;
            height: 60px;
        }

        header ul {

            padding: 0;
        }

        header li {
            margin-right: 30px;
            text-align: right;

        }
        header a {
        	font-family: sans-serif;
            font-weight: bold;
            text-decoration: none;
            color:#6f0000;
            font-size: 22px;
        }
        ul li a:hover {
            color: #004c4c;
        }
	
	</style>
</head>
<body>
	<header>
            <nav>
                <ul>
                    <li><a href="about.php" >ABOUT</a></li>
                    <li><a href="contact.php" >CONTACT</a></li>
                    <li><a href="reviews.php" >REVIEWS</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
               
            </nav>
        </header>
	<div class="reviewbox">
			<h4>Write a Review</h4>
			<div class="reviewcont">
				<form method="POST" enctype="multipart/form-data">
					<p>Username: <input type="text" name="username" placeholder="Enter username..."></p>
					<p>Add a Pic: <input type="file" name="review_pic"></p>
					<p>Content: <textarea name="content" cols="50" rows="10" placeholder="Your message..."></textarea></p><br><br><br><br><br><br><br><br><br><br>
					<p><input type="submit" name="submit" value="Add Review"></p>	
				</form>
			</div>
			<hr>
				<h4>Reviews</h4>

	<?php
		$sql = "SELECT *FROM tbl_reviews order by review_id DESC;";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){ ?>

			<div class="blog">
					<h2>From: <?php echo $row['username'];?></h2>
					<h3>Date: <?php echo $row['review_date'];?></h3>
					<img height="230" width="300" src="uploads/<?php echo $row['review_pic'];?>">
					<h3>Message: <?php echo $row['content']; ?></h3>
					

				</div>
				

		<?php } } ?>	
	
			</div>
</body>
</html>