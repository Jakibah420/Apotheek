<?php
include 'handlers/dbh.php';

session_start();
$serverLink = mysqli_connect($host, $username, $password, $db);

if (isset($_POST['reg_user'])) {
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
		  header('location: home.php'); //NAAR USER INTERFACE!
		}else {
			$showDivFlag=true;
		}
	}
	}
	
	//SETUP CODE
	$serverLink = mysqli_connect($host, $username, $password, $db);
	$user_check = $_SESSION['username'];
	$ses_sql = mysqli_query($serverLink, "SELECT email FROM users WHERE email = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['email'];
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