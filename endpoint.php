<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment_01</title>
	<link rel="stylesheet"  href="/ass2/style/style.css">
	<link rel="stylesheet"  href="/ass1/style/css/bootstrap.min.css">
	<script src="/ass1/style/css/js/jquery-3.3.1.min.js"></script>
</head>
<body style="background-image: url('/ass2/back.JPG');color: white;">

	<div class="topnav">
		<a class="navbar-brand" href="index.php">Home</a>
	</div>


									<?php

                						if(isset($_COOKIE['session_cookie']))
                						{
                							session_start();
                						      //check whether the token in the post ethod equals to the token in the session
                                        	if ($_POST['csrf_Token'] == $_COOKIE['csrf_token']) 
                							{
                								$fname=$_POST['name'];
                								$university=$_POST['university'];
                								$degree=$_POST['degree'];
                								$year=$_POST['year'];

                								echo "<div class='alert alert-primary' role='alert'>".$fname."</div>";
                								echo "<div class='alert alert-secondary' role='alert'>".$university."</div>";
                								echo "<div class='alert alert-success' role='alert'>".$degree."</div>";
                								echo "<div class='alert alert-info' role='alert'>".$year."</div>";	
                							}
                							else
                							{
                								echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
                							}
                						}
            						?>

     					<script src="/ass1/style/js/bootstrap.min.js"></script>
        				<script src="/ass1/style/js/popper.min.js"></script>
            					</body>
            					</html>