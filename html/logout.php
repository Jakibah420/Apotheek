<?php 
  include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
  include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/db.php");
  if(session_destroy()) {
    header("Location: login.php");
  }
?>
<title>Login</title>