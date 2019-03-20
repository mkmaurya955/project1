<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	  <style>
		.div2{
		    width: 350px;
			height:525px;
			background-color:black;
			padding:20px;
			margin-left:475px;
			color:white;
			}
		img { 
		  width: 7%; 
		  height: 15%;
		}
	</style>
</head>

	<!--	<img src="C:\Users\dell\Desktop\download.png" alt="HTML5 Icon" > -->
	<body style="background-color:#5DADE2;opacity:0.8;background-repeat:no-repeat;background-size:cover;" background="C:\Users\dell\Desktop\track3.jpg">
	<br>
	<br>
	<p style="letter-spacing:1px;font-size:25px;color:#82232D;text-align: center;"><b><u>Register For New User</u> <b></p>

	<!-- display validation errors here -->
	<?php include('errors.php');   ?>
	<div class="div2" >
		<br>
	    <form method="post" action="register.php">
			<div class="input-group">
				<label style="margin-left:14px">Username</label>
				<br>
				<br>
				<input class='col-xs-8' type="text" placeholder="Enter Username" style="border-radius:6px;margin-left:14px;;border:none;padding:8px;" name="username" value="<?php echo $username; ?>">
			</div>
			<br>
			<br>
			<div class="input-group">
				<a style="margin-left:14px">Email</a>
				<br>
				<br>
				<input type="email" placeholder="Enter Emailid" name="email" style="border-radius:6px;margin-left:14px;;border:none;padding:8px;" value="<?php echo $email; ?>">
			</div>
			<br>
			<br>
			<div class="input-group">
				<label style="margin-left:14px">Password</label>
				<br>
				<br>
				<input type="password" placeholder="Enter Password" style="border-radius:6px;margin-left:14px;;border:none;padding:8px;" name="password_1">
			</div>
			<br>
			<br>
			<div class="input-group">
				<label style="margin-left:14px">Confirm Password</label>
				<br>
				<br>
				<input type="password" placeholder="Enter Confirm_Password" name="password_2" style="border-radius:6px;margin-left:14px;;border:none;padding:8px;">
			</div>
			<br>
			<br>
			<div class="input-group">
				<button type="submit" name="register" class="btn" style="border:none;background-color:green;padding:10px;cursor:pointer;color:white;width:100px;border-radius:6px;margin-left:30px">Register</button>
			</div>
			<p>
			Already a member?<a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</body>
</html>