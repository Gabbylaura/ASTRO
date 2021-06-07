<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- links used in styling-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		body{
			background-image: url(images/ksenia-makagonova-229007.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.main{
			padding-top: 80px;
		}
		.mayhem {
			width: 40%;
			margin: 125px auto;
			-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			padding-top: 50px;
		}
		.halo {
			padding: 12px 15px;
			border-bottom:2px solid red;
			border-right: 2px solid red;
			background: #fff;
		}
		.halo input[type="text"], .halo input[type="password"] {
			outline: none;
			font-size: .9em;
			border: none;
			background: transparent;
			width: 50%;
			color: #000;
			font-family: "Times New Roman", Times, Serif;
			letter-spacing: 1px;
		}
		.reset{
			color: white;
			font-family:  "Times New Roman", Times, Serif;
		}
	</style>
</head>

<body>
	<div class="main">
		<div class="mayhem">
			<div class="heading text-center">
				<h2>Log-in Here</h2>
			</div>
			<br><br><br>
			<!-- Log in form-->
			<form method="POST" action="get.php">
				<div class="halo">
					<input type="text" name="username" placeholder="Enter Your Username" required><br>
				</div>
				<br>
				<br>
				<div class="halo">
					<input type="password" name="password" placeholder="Enter Your Password" required><br>
				</div>
				<br>
				<div class="text-center reset">
					<h4><u><a href="forgot.php">Forgot Password?</a></u></h4>
				</div>
				<br>
				<div class="text-center submit">
					<input type="submit" name="submit" value="Login">
				</div>
				<br><br>
			</form>
		</div>
	</div>
</body>
</html>