<!doctype html>
<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../bin/scripts/login.js"></script>

    <?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
    ?>
    	
    <body>
    <h1>Welcome <?php echo $login_session; ?></h1> 

    </body>

</html>