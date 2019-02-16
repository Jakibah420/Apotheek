<?php
include 'handlers/dbh.php';

//SETUP CODE
	$serverLink = mysqli_connect($host, $username, $password, $db);


	if(!isset($_SESSION['username'])){
		 header("location:login.php");
		 die();
	}
	if (isset($_POST['setup_user'])) {
		$email = mysqli_real_escape_string($serverLink, $_POST['regemail']);
		$password_1 = mysqli_real_escape_string($serverLink, $_POST['regpassword']);
		$password_2 = mysqli_real_escape_string($serverLink, $_POST['regpassword2']);
	
		$select = mysqli_query($serverLink, "SELECT * FROM users WHERE email = '$email'") or exit(mysqli_error($serverLink));
		if(mysqli_num_rows($select) == 1) {
			array_push($errors, "EmExists");
			$showRegMailFlag=true;
		}
	
		if (count($errors) == 0) {
			$regepassword = md5($password_1);//encrypt the password before saving in the database
	
			$query = "INSERT INTO users (email, pass) 
						VALUES('$email', '$regepassword')";
			mysqli_query($serverLink, $query);
			$_SESSION['username'] = $email;
			header('location: setup.php '); //NAAR USER INTERFACE!
		 }
		else {
			$showRegMailFlag=true;
		}
    }
    
?>