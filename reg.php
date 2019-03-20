<?php include('server.php');
	
	// if user is not logged in, they can not access this page
	if (empty($_SESSION['username'])) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registered user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <meta charset="utf-8">
</head>
<body>

	
	<h1 style="color:green;text-align:center;">You are Registered Successfully</h1>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class=" error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['username'])): ?>
			<p style="text-align:center;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p style="text-align:center;"><a href="reg.php?login='1'" style="color: green;">Login here</a></p>
		<?php endif ?>	
	</div>
</body>
</html>