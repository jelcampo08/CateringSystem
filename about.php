<!DOCTYPE html>
<html>
<head>
	<title>About Page</title>
	<style >
		.aboutbox{
			width: 90%;
			height: 550px;
			background: #a55540;
			color: #fff;
			top: 55%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;

		}
		
		.aboutbox p{
			margin-top: 10px;
			font-size: 50px;
			color: #9dc6a7;
			font-style: cursive;
			margin-left: 500px;
			font-weight: bold;
			position: absolute;
		}
		.aboutcont{
			height: 220px;
			width: 90%;
			background: #f6edce;
			display: inline-block;
			margin-left: 55px;
			margin-top: 90px;
		}
		.aboutcon{
			height: 190px;
			width: 90%;
			background: #f1e3cb;
			display: inline-block;
			margin-left: 55px;
			margin-top: 5px;
		}
		button{
			margin-left: 935px;
			background-color: #64ccda;
			height: 70px;
			width: 14%;
			border-radius: 20px;
			display: inline-block;
			position: absolute;
			margin-top: 60px;
		}
		h3{
			font-weight: bolder;
			font-size: 20px;
			font-family: monospace;
			color: #000;
		}
		h2{
			font-weight: bolder;
			font-size: 20px;
			font-family: monospace;
			color: #000;
			text-align: center;
		}
		h4{
			
			margin-top: 5px;
			color: #004c4c;
		}
		h5{
			font-size: 15px;
			color: #000;
			
		}
		.aboutcont h3{
			font-size: 17px;
			font-family: monospace;
			color: #7d5a5a;
			text-align: justify;
			margin-left: 5px;
			margin-right: 3px;
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
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="reviews.php">REVIEWS</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
               
            </nav>
        </header>
	<div class="aboutbox">
			<p>About Us</p>
			<div class="aboutcont">
				<h3>&nbsp;&nbsp;Right at the heart of the Bislig, Tanaunan in Leyte, Haiyan Hotel offers the best service boasting of outdoor swimming pool, several dining options, and free Wifi throughout the property. Fully furnished rooms available for all types of occasion and family size, fitted with a flat-screen TV with cable channels, and air conditioning. Every room is equipped with a private bathroom with shower or bath facilities, slippers and free toiletries.<br> 

				&nbsp;&nbsp;At the hotel, guest can experience the taste of delicious International and Philippine cuisine right at their table. Indulge on the variety of seafood and meat dishes on buffet style or enjoy the night having drinks with friends and family on retrobar.<br>

				&nbsp;&nbsp;Celebrate special occasion in one of Haiyan Hotel’s conference room. It is perfect for birthdays, receptions, debut, retirement parties, baby showers, and team buildings.<br>  

				&nbsp;&nbsp;Relax and enjoy your day with Haiyan Hotels best service. We’ll be waiting for you!</h3>
			</div>
			<div class="aboutcon">
			<h2>ROOM RATE</h2>
			<center><h4>ROOM CATEGORY &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   PRICE &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; ROOM CATEGORY  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  PRICE &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; POOL SIDE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PRICE</h4>
			<h5>&nbsp;&nbsp;Standard Rooms&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Php 1800 &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kings Room &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Php 2500&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;PS1 - PS2 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Php 3500</h5>
			<h5>&nbsp;&nbsp;Queens Room&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Php 3000&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Elite Rooms&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Php 5000&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;PS3 - PS4 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Php 4000</h5></center>

			</div>
			
	</div>

</body>
</html>