<?php
   include('dbh.php');
   if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
   

   $serverLink = mysqli_connect($host, $username, $password, $db);
   $user_check = $_SESSION['username'];
   $ses_sql = mysqli_query($serverLink, "SELECT email FROM users WHERE email = '$user_check' ");
   $set_sql = mysqli_query($serverLink, "SELECT email FROM userInfo WHERE email = '$user_check' ");
   $sqlquery = mysqli_query($serverLink, "SELECT * FROM userInfo WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $rowt = mysqli_fetch_array($set_sql,MYSQLI_ASSOC);
   //$namt = mysqli_fetch_array($nam,MYSQLI_ASSOC);
   //$srnamt = mysqli_fetch_array($srnam,MYSQLI_ASSOC);
   //$gendt = mysqli_fetch_array($srgendt,MYSQLI_ASSOC);
   $fetched =  mysqli_fetch_array($sqlquery,MYSQLI_ASSOC);
   
   $login_session = $fetched['email'];
   $name_session = $fetched['surname'];
   $sname_session = $fetched['ename'];
   $gend = $fetched['gender'];
   $firstname = $fetched['nam'];
   $phone = $fetched['phone'];
   $mphone = $fetched['mobilephone'];
   $adres = $fetched['adres'];
   $postal = $fetched['postal'];
   $birthdate = $fetched['birthdate'];
   $activation = $fetched['activation_date'];
    
   
   if(!isset($_SESSION['username'])){
      header("location:login.php");
      die();
   } if(isset($_SESSION['username']) && !isset($rowt['email'])){
      header("location:setup.php");
      die();
   }
?>