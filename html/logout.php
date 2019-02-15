<!doctype html>
<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../bin/scripts/login.js"></script>

    <?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/db.php");
    ?>

    <body style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url('/Apotheek/assets/img/login.jpg');background-repeat:no-repeat;background-size: cover;">



    </body>
    <?php
    if(session_destroy()) {
      header("Location: login.php");
    }
    ?>
</html>