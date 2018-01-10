<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Inter-Pacific Study and Migration Consultancy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./css_2/bootstrap.min.css">
		<link rel="stylesheet" href="./css_2/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>

	</head>

	<body>
		<div class="container-fluid header">
			<div class="row">
				<div class="col-lg-1" id="image"><img src="img/logo.png" width="90" height="90"/></div>
				<div class="col-lg-11" id="label">
					<p><span id="desc">Inter-Pacific Study and Migration Consultancy</span><br/>
					Assist you in the preparation of the application that is to be submitted to the migration authorities.</p>
				</div>
			</div>
		</div>
		<div>
			
			<?php 
				if(isset($_REQUEST['error']) && $_REQUEST['error'] == "disabled"){
					echo "<span style='color:red;'>*Your account have been disabled by the admin. Please contact support for further details</span>";
				}
				else if(isset($_REQUEST['error']) && $_REQUEST['error'] == "wrongpass"){
					echo "<span style='color:red;'>*You enter a wrong username or password. Please login again.</span>";
				}
				else if(isset($_REQUEST['error']) && $_REQUEST['error'] == "regsuccess"){
					echo "<span style='color:green;'>*You have successfully created an account.</span>";
				}
				else if(isset($_REQUEST['error']) && $_REQUEST['error'] == "regduplicate"){
					echo "<span style='color:red;'>Username is already taken.</span>";
				}
			?>
			
		</div>
		<div class="container-fluid wrapper">
			<div class="row">
				 <div class="col-lg-6">
						<div class="card card-container">
						<div class="row">
                    			<h3 align="center">Register Here!</h3>
                    		</div>
                        	<img id="prof-img" class="profile-img-card" src="img/visa4.png"/>
                        	<p id="prof-name" class="profile-name-card"></p>
                        	<form class="form-signin" name="registerform" method="POST" action="userregistration.php">
                            	<span id="reauth-email" class="reauth-email"></span>
                            	<input type="text" id="inputText" name="name" class="form-control" placeholder="Full Name" required autofocus>
                            	<input type="text" id="inputText" name="username" class="form-control" placeholder="Username" required>
                            	<input type="text" id="inputText" name="email" class="form-control" placeholder="E-Mail" required>
                            	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            	<input type="text" id="inputText" name="usertype" class="form-control" placeholder="User Type (Admin or Client)" required>
                            	<input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" name="submit" value="Sign Up"/>	
                        	</form>
                    	</div>
				</div> 
				<div class="col-lg-6">
				
				
                    	<div class="card card-container">
                    		<div class="row">
                    			<h3 align="center">Login Here!</h3>
                    		</div>
                        	<img id="profile-img" class="profile-img-card" src="img/visa4.png"/>
                        	<p id="profile-name" class="profile-name-card"></p>
                        	<form class="form-signin" name="loginform" method="POST" action="check_login.php">
                            	<span id="reauth-email" class="reauth-email"></span>
                            	<input type="text" id="inputText" name="username" class="form-control" placeholder="Username" required autofocus>
                            	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            	<div id="remember" class="checkbox">
                                	<label>
                                    	<input type="checkbox" class="checkbox-control" value="remember-me"> Remember me
                                	</label>
                            	</div>
                            	<button class="btn btn-lg btn-primary btn-block btn-signin" name="login" type="submit">Log in</button>
								
                        	</form>
                		</div>

				</div>
			</div>	
		</div>

	</body>
</html>