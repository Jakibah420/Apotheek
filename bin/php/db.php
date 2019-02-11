<?php

session_start();

$email    = "";
$showEmFlag=false;
$showPassFlag=false;
$showDivFlag=false;
$errors = array();
$host = "127.0.0.1:3306";
$username = "root";
$password = "";
$db = "db";

$serverLink = mysqli_connect($host, $username, $password, $db);

if (isset($_POST['reg_user'])) {
  $email = mysqli_real_escape_string($serverLink, $_POST['regemail']);
  $password_1 = mysqli_real_escape_string($serverLink, $_POST['regpassword']);
  $password_2 = mysqli_real_escape_string($serverLink, $_POST['regpassword2']);

  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($serverLink, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$regepassword = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (email, pass) 
  			  VALUES('$email', '$regepassword')";
  	mysqli_query($serverLink, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: #reguserint '); //NAAR USER INTERFACE!
   }
}

//login
if (isset($_POST['login_user'])) {
	$logemail = mysqli_real_escape_string($serverLink, $_POST['logemail']);
	$logpassword = mysqli_real_escape_string($serverLink, $_POST['logpassword']);
  

	if (empty($logpassword) && !empty($logemail)) {
		array_push($errors, "nonPass");
		$showPassFlag=true;
	}
  	if (empty($logemail)) {
		array_push($errors, "nonEmail");
		$showEmFlag=true;
	}
	if (count($errors) == 0) {
		$legpassword = md5($logpassword);
		$session = "SELECT * FROM users WHERE email = '$logemail' and pass = '$legpassword'";
		$result = mysqli_query($serverLink, $session);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		if ($count == 1) {
		  $_SESSION['username'] = $logemail;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: loginsucces.php');
		}else {
			$showDivFlag=true;
		}
	}
  }
?>