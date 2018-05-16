<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment_01</title>
	<link rel="stylesheet"  href="/ass2/style/style.css">
  <link rel="stylesheet"  href="/ass1/style/css/bootstrap.min.css">
  <script src="/ass1/style/js/jquery-3.3.1.min.js"></script>
</head>
<body style="background-image: url('/ass2/back.JPG');color: white;">

	<div class="topnav">
		<a class="navbar-brand" href="index.php">Home</a>
	</div>

	<dir class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
                    <h2 style="font-size: 50px;">Cross-Site Request Forgery protection in web applications using Double Submit Cookie pattern </h2> 
     			</div>

	<form action='index.php' method='POST' enctype='multipart/form-data'>
 		<div class="container">
    		<label for="Email"><b>Email</b></label>
    			<input type="text" placeholder="Entere email" name="email" required>

    			<label for="psw"><b>Password</b></label>
   				 <input type="password" placeholder="Enter Password" name="password" required>

   			 	<button type="submit" id="submit" name="submit">Login</button>

   	</div>
   </form>

   <script src="/ass1/style/js/bootstrap.min.js"></script>
    <script src="/ass1/style/js/popper.min.js"></script>
</body>
</html>

<?php


 if(isset($_POST['submit'])) {
      user_login();
    }
  ?>

  <?php
    function user_login()
    {
      $user_email = 'user@gmail.com';
      $user_password = '12345678';

      $email_in = $_POST['email'];
      $password_in = $_POST['password'];

      if(($email_in == $user_email)&&($password_in == $user_password)) {
        session_set_cookie_params(300);
        session_start();
        session_regenerate_id();

        setcookie('session_cookie', session_id(), time() + 300, '/');

        $token = generate_token();

        setcookie('csrf_token', $token, time() + 300, '/', 'localhost',true);

        header("Location:profile.php");
        exit;
      }else{
        echo "<script> alert('Invalid Credentials, Please try again.') </script>";
      }
    }

    function generate_token(){
      return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
    }
  ?>