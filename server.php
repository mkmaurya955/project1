<?php
	session_start();

	$username="";
	$email="";
	$url="";
	$errors=array();

	// Connect to the database
	$db=mysqli_connect("localhost","root","","project1") or die($db);

	// if the register button are clicked

	if (isset($_POST['register'])) {
		$username=mysqli_real_escape_string($db, $_POST['username']);
		$email=mysqli_real_escape_string($db, $_POST['email']);
		$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2=mysqli_real_escape_string($db, $_POST['password_2']);

		//ensure that the form fields are  filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");  
		}
		if (empty($email)) {
			array_push($errors, "Email is required");  
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");  
		}
		if ($password_1 != $password_2) {
			array_push($errors, "Password does not matched");
		}

		// if there are no errors,save users to the database
		if (count($errors)==0) {
			$password=md5($password_1); // encrypt password before storing into database(security) 
			$sql="INSERT INTO users (username, email, password) 
							VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="Your registration is successful.";
			header('location: reg.php'); // redirect to the home page
		}
	}

	// log user in form login page
	if (isset($_POST['login'])){
		$username=mysqli_real_escape_string($db, $_POST['username']);
		$password=mysqli_real_escape_string($db, $_POST['password']);

		//ensure that the form fields are  filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");  
		}  
		if (empty($password)) {
			array_push($errors, "Password is required");  
		}
		if (count($errors)==0) {
			$password=md5($password); // encrpt password before comparing with that from database
			$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db, $query);
			if (mysqli_num_rows($result)==1) {
				// log user in
				$_SESSION['username']=$username;
				$_SESSION['success']="You are now logged in";
				// redirect to for different user for different url.
			//	$result = mysqli_fetch_array($result);  get the result set from the query

    		//		$redirect = trim($result['url']); // get the redirect column's value

    		//		if ($redirect == '') {
        	//			echo "No redirect value was set!";
    		//		} 
    		//		else {
        	//			header('Location: ' . $redirect);
        	//		exit;
        	//		}
    			}
				 header('location: dashboard.php'); // redirect to the home page
			}else{
				array_push($errors, "Wrong username and password");
			}
		}
	

	// logout
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:login.php');
	}


	//login
	if (isset($_GET['login'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:login.php');
	}



?>

