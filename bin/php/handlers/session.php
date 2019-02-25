<?php
   include('dbh.php');
   if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
   }
   
   if(isset($_SESSION['username'])){
   $serverLink = mysqli_connect($host, $username, $password, $db);
   $user_check = $_SESSION['username'];
   $ses_sql = mysqli_query($serverLink, "SELECT email FROM users WHERE email = '$user_check' ");
   $set_sql = mysqli_query($serverLink, "SELECT * FROM userInfo WHERE email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $rowt = mysqli_fetch_array($set_sql,MYSQLI_ASSOC);
   
   $login_session = $rowt['email'];
   $name_session = $rowt['surname'];
   $sname_session = $rowt['ename'];
   $gend = $rowt['gender'];
   $firstname = $rowt['nam'];
   $phone = $rowt['phone'];
   $mphone = $rowt['mobilephone'];
   $adres = $rowt['adres'];
   $postal = $rowt['postal'];
   $birthdate = $rowt['birthdate'];
   $activation = $rowt['activation_date'];
   }
   
   if(isset($_SESSION['username']) && !isset($rowt['email'])){
      header("location:setup.php");
      die();
   }
?>