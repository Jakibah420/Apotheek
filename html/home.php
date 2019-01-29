<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../bin/scripts/login.js"></script>
    <? include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php"); ?>
    <? require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php"); ?>
    <?php 
    include_once dirname(__DIR__).'/bin/php/handlers/dbh.php'; //DB HANDLER
    ?>

    
    <body>
    

        
    <h1><?php connect(); ?></h1>

    </body>

</html>