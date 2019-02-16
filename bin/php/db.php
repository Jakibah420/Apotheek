<?php
include 'handlers/dbh.php';

session_start();
$serverLink = mysqli_connect($host, $username, $password, $db);

if (isset($_POST['reg_user'])) {
  $email = mysqli_real_escape_string($serverLink, $_POST['regemail']);
  $password_1 = mysqli_real_escape_string($serverLink, $_POST['regpassword']);
  $password_2 = mysqli_real_escape_string($serverLink, $_POST['regpassword2']);
  $password_1e = substr($password_1,0,10);

  $select = mysqli_query($serverLink, "SELECT * FROM users WHERE email = '$email'") or exit(mysqli_error($serverLink));
	if(mysqli_num_rows($select) == 1) {
		array_push($errors, "EmExists");
		$showRegMailFlag=true;
	}

  if (count($errors) == 0) {
  	$regepassword = md5($password_1e);//encrypt the password before saving in the database

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
	$lagpassword = substr($logpassword,0,10);
  

	if (empty($logpassword) && !empty($logemail)) {
		array_push($errors, "nonPass");
		$showPassFlag=true;
	}
  	if (empty($logemail)) {
		array_push($errors, "nonEmail");
		$showEmFlag=true;
	}
	if (count($errors) == 0) {
		$legpassword = md5($lagpassword);
		$session = "SELECT * FROM users WHERE email = '$logemail' and pass = '$legpassword'";
		$result = mysqli_query($serverLink, $session);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		if ($count == 1) {
		  $_SESSION['username'] = $logemail;
		  $set_sql = mysqli_query($serverLink, "SELECT email FROM userInfo WHERE email = '$user_check' ");
		  $rowt = mysqli_fetch_array($set_sql,MYSQLI_ASSOC);
			if(isset($_SESSION['username']) && !isset($rowt['email'])){
				header("location:setup.php");
				die();
		 	} else {
				header('location: home.php'); //NAAR USER INTERFACE!
			 }
		}	else {
			$showDivFlag=true;
		}
	}
}
//SETUP CODE
if (isset($_POST['setup_user'])) {
	
		//setup config
		$email = $_SESSION['username'];
		$name = mysqli_real_escape_string($serverLink, $_POST['name']);if (empty($name)){array_push($errors, "name");}
		$ename = mysqli_real_escape_string($serverLink, $_POST['ename']);
		$srname = mysqli_real_escape_string($serverLink, $_POST['srname']);if (empty($srname)){array_push($errors, "srname");}
		$birth = mysqli_real_escape_string($serverLink, $_POST['birth']);if (empty($birth)){array_push($errors, "birth");}
		$bsn = mysqli_real_escape_string($serverLink, $_POST['bsn']);if (empty($bsn)){array_push($errors, "bsn");}
		$gender = mysqli_real_escape_string($serverLink, $_POST['gender']);if (empty($gender)){array_push($errors, "gender");}
		$mobilephone = mysqli_real_escape_string($serverLink, $_POST['mobilephone']);if (empty($mobilephone)){array_push($errors, "mobilephone");}
		$phone = mysqli_real_escape_string($serverLink, $_POST['phone']);if (empty($phone)){array_push($errors, "phone");}
		$adres = mysqli_real_escape_string($serverLink, $_POST['adres']);if (empty($adres)){array_push($errors, "adres");}
		$postal = mysqli_real_escape_string($serverLink, $_POST['postal']);if (empty($postal)){array_push($errors, "postal");}

		

		if (count($errors) == 0) {
			$query = "INSERT INTO userInfo (email, nam, ename, surname, bsn, gender, mobilephone, phone, adres, postal, birthdate) 
					  VALUES('$email', '$name', '$ename', '$srname', '$bsn', '$gender', '$mobilephone', '$phone', '$adres', '$postal', '$birth')";
			mysqli_query($serverLink, $query);
			if(isset($_SESSION['username']) && !isset($rowt['email'])){
				header("location:gebruiker.php");
		 	}
		} else {
			$showDivFlag=true;
		  }
}

?>