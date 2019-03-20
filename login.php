<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		.div1{
	    	width: 300px;
			height:350px;
			background-color:black;
			padding:20px;
			margin-left:500px;
			float:left;
			}
		img { 
			width: 7%; 
			height: 15%;
			}
	</style>
</head>
<!--<img src="C:\Users\dell\Desktop\download.png" alt="HTML5 Icon" > -->
<body style="background-color:#5DADE2;opacity:0.8;background-repeat:no-repeat;background-size:cover;" background="C:\Users\dell\Desktop\track3.jpg">
<br>
<br>
<p style="text-align: center;letter-spacing:1px;font-size:25px;color:#82232D"><b><u>Login To Your Account</u><b></p>
<?php include('errors.php');   ?>
<div class="div1">
<br>
<a style="color:white;text-decoration:none;border:2px " href="https://www.irctc.co.in/nget/train-search" target="_blank"><button style="border-radius:6px;margin-left:14%;border:none;background-color:#8B0000;color:white;padding:8px;cursor:pointer;"  >Login with IRCTC</button></a>
<br>
<br>
<hr style="margin-right:20%">
<br>


	<form method="post" action="login.php" style="color:white;">
		<!-- display validation errors here -->
		<div class="input-group">
			<input type="text" placeholder="Enter Username" name="username" style="border-radius:6px;margin-left:11%;border:none;padding:8px;">
		</div>
		<br>
		<br>
		<br>
		<div class="input-group">
			<input type="password" placeholder="Enter Password" name="password" style="border-radius:6px;margin-left:11%;border:none;padding:8px;">
		</div>
		<br>
<br>

		<div class="input-group">
			<button type="submit" name="login" class="btn" style="margin-left:11%;border:none;background-color:green;padding:10px;cursor:pointer;color:white;width:100px;border-radius:6px">Login</button>
		</div>
		<p style="margin-left:11%;">
		Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>	
	    