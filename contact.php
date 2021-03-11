<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<style >
		.contactbox{
			width: 90%;
			height: 550px;
			background: #a55540;
			color: #fff;
			top: 55%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			

		}
		
		.contactbox h1{
			margin-top: 10px;
			font-size: 50px;
			color: #9dc6a7;
			font-style: cursive;
			text-align: center;
			font-weight: bold;
		}
		h3{
			text-align: center;
			font-size: 30px;
		}
		.container1{
			height: 150px;
			width: 42%;
			background: #f1e3cb;
			margin-left: 60px;
			margin-top: 10px;
			display: inline-block;

		}
		.container2{
			height: 150px;
			width: 42%;
			background: #f1e3cb;
			margin-left: 60px;
			margin-top: 10px;
			display: inline-block;
		}
		.container3{
			height: 150px;
			width: 42%;
			background: #f1e3cb;
			margin-left: 60px;
			margin-top: 10px;
			display: inline-block;
		}
		.container4{
			height: 150px;
			width: 42%;
			background: #f1e3cb;
			margin-left: 60px;
			margin-top: 10px;
			display: inline-block;
		}
		img{
			margin-top: 20px;
			margin-left: 10px;
			height: 100px;
			width: 100px;
			float: left;
		}
		h4{
			float: left;
			font-size: 25px;
			color: black;
			margin-top: 60px;
			font-family: monospace;
			margin-left: 20px;
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
	<div class="contactbox">
			<h1>Contact Us</h1>
			<h3>For further inquiries or reservation kindly give us a ring at: </h3>

			<div class="container1">
				<img src="./pic/fb3.png">
				<i><h4>Haiyan Hotel and Resort</h4></i>
			</div>
			<div class="container2">
				<img src="./pic/email.png">
				<i><h4>haiyanpeak@gmail.com</h4></i>
			</div>
			<div class="container3">
				<img src="./pic/insta2.png">
				<i><h4>@haiyan_peak</h4></i>
			</div>
			<div class="container4">
				<img src="./pic/phone4.png">
				<i><h4>09107092031</h4></i>
			</div>
			
	</div>
</body>
</html>