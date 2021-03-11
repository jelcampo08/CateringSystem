<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
            
        body {
            margin: 0;
            font-family: sans-serif;
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
    </body>
</html>