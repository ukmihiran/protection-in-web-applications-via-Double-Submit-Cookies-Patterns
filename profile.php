<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment_01</title>
	<link rel="stylesheet"  href="/ass2/style/style.css">
	<link rel="stylesheet"  href="/ass1/style/css/bootstrap.min.css">
</head>
<body style="background-image: url('/ass2/back.JPG');color: white;">

	<div class="topnav">
		<a class="navbar-brand" href="index.php">Home</a>
	</div>

	<div class="container">   
   		<div class="row" align="center" style="padding-top: 50px;">
                <div class="col-12">
                    <h5 style="font-size: 50px;">User Profile</h5> 

                     <script>
                                        //this function will retrive the CSRF token from the CSRF cookie
                                        function getCookie(cname) 
                                        {
                                            var name = cname + "=";
                                            var decodedCookie = decodeURIComponent(document.cookie);
                                            var ca = decodedCookie.split(';');
                                            for(var i = 0; i <ca.length; i++) 
                                            {
                                                var c = ca[i];
                                                while (c.charAt(0) == ' ') 
                                                {
                                                    c = c.substring(1);
                                                }
                                                if (c.indexOf(name) == 0) 
                                                {
                                                    return c.substring(name.length, c.length);
                                                }
                                            }
                                            return "";
                                        }
                                        //this function set hidden CSRF input's value in the form 
                                        function submitForm(oFormElement)
                                        {
                                            document.getElementById("csrf_Token").value=getCookie("csrf_token");

                                        }
                                    </script>

                                			<form action='endpoint.php' method='POST' enctype='multipart/form-data'>
                                				<input type='hidden' name='csrf_Token' id='csrf_Token' value="">
                                				<div class='form-group row'>
                                					<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
                                				<div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                                                </div>
                                				</div>
                                				<div class='form-group row'>
                                                    <label for='university' class='col-sm-2 col-form-label'>University</label>
                                                <div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='university' name='university' placeholder='University' required>
                                                </div>
                                              	</div>
                    							
                    							<div class='form-group row'>
                                                    <label for='degree' class='col-sm-2 col-form-label'>Degree</label>
                                                <div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='degree' name='degree' placeholder='Degree' required>
                                                </div>
                                              	</div>

                                              	<div class='form-group row'>
                                                    <label for='year' class='col-sm-2 col-form-label'>Year</label>
                                                <div class='col-sm-10'>
                                                    <input type='number' class='form-control' id='year' name='year' placeholder='Year' required>
                                                </div>
                                              	</div>
                                                <button type='submit' class='btn btn-primary' id='submit' name='submit'>Submit</button>
                                			</form>
                                		</div>
                                	</div>
                                </div>
                                <script src="/ass1/style/js/bootstrap.min.js"></script>
                                <script src="/ass1/style/js/popper.min.js"></script>
                            </body>
                            </html>