<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/log_reg.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="icon" type="image/ico" href="images/Blood_icon.png" />
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="images/bg1.png">
		</div>
		<div class="login-content">
			<form action="loginvalid.php" method="POST">
				<img src="images/avatar1.png">
				<h2 class="title">Welcome</h2>
					<div class="vv">
						<div class="select-box">
							<select name="user" required>
								<option value="1">Hospitals</option>
								<option value="2">Receiver</option>
							</select>
						</div>
					</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="hospemail" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="hosppass" class="input" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<input type="submit" class="btn" value="Login">
				<button class="btn">
					<a class="reg" href="registration.php">Register</a>
				</button>
				<button class="btn">
					<a class="reg" href="index.php">Home</a>
				</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
