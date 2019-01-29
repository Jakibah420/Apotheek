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
    <div class="loginregisterform">
        <button class="loginbutton" onclick="login(2)">login</button>
        <button class="registerbutton" onclick="login(1)">registreer</button>
        <div id="loginform" class="loginform">
        <form class="login">
            <div class="label"><label class="label">Email</label></div>
            <input type="text" id="username" name="username/email">
            <div class="label"><label class="label">Wachtwoord</label></div>
            <input type="password" id="password" name="password">
        </form>
        </div>
        <div id="registerform" class="registerform">
        <div class="regwrap">
        <form class="login">
            <div class="label2"><label class="label">Email</label></div>
            <input class="reginput" type="text" id="username" name="username/email">
            <div class="label2"><label class="label">Password</label></div>
            <input class="reginput" type="password" id="password" name="password">
            <div class="label2"><label class="label">Repeat Password</label></div>
            <input class="reginput" type="password" id="password" name="password">
        </form>
        </div>
        </div>
    </div>

        
    <h1><?php connect(); ?></h1>

    </body>

</html>