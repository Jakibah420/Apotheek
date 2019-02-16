<?php
include('dbh.php');
   session_start();

   $serverLink = mysqli_connect($host, $username, $password, $db);
   $user_check = $_SESSION['username'];
   $ses_sql = mysqli_query($serverLink, "SELECT email FROM users WHERE email = '$user_check' ");
   $set_sql = mysqli_query($serverLink, "SELECT email FROM userInfo WHERE email = '$user_check' ");
   $nam = mysqli_query($serverLink, "SELECT ename FROM userInfo");$srnam = mysqli_query($serverLink, "SELECT surname FROM userInfo");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $rowt = mysqli_fetch_array($set_sql,MYSQLI_ASSOC);
   $namt = mysqli_fetch_array($nam,MYSQLI_ASSOC);$srnamt = mysqli_fetch_array($srnam,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   $name_session = $srnamt['surname'];
   $sname_session = $namt['ename'];

   
   if(!isset($_SESSION['username'])){
      header("location:login.php");
      die();
   } if(isset($_SESSION['username']) && !isset($rowt['email'])){
      header("location:setup.php");
      die();
   }
?>