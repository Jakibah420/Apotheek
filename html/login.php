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
    <div id="errform" class="errorformhead">
        <div class="errorformheader"></div>
        <div class="errorform">
        <div id="err1" class="errlabel"><label class="label">* Email mag niet blank zijn!</label></div>
        <div id="err2" class="errlabel"><label class="label">* Email mag geen speciale tekens of spaties bevatten!</label></div>
        <div id="err3" class="errlabel"><label class="label">* Wachtwoord moet minimaal 6 karakters bevatten!</label></div>
        <div id="err4" class="errlabel"><label class="label">* Email mag NIET hetzelfde zijn als het wachtwoord!</label></div>
        <div id="err5" class="errlabel"><label class="label">* Wachtwoorden zijn niet hetzelfde!</label></div>
        <div id="err6" class="errlabel"><label class="label">* Wachtwoord moet minstens 1 nummer bevatten (0-9)</label></div>
        <div id="err7" class="errlabel"><label class="label">* Wachtwoord moet minimaal 1 kleine letter bevatten (a-z)</label></div>
        <div id="err8" class="errlabel"><label class="label">* Wachtwoord moet minimaal 1 hoofd letter bevatten (A-Z)</label></div>
        <div id="err9" class="errlabel"><label class="label">* Wachtwoorden zijn niet hetzelfde!</label></div>
        <div id="err10" class="errlabel"><label class="label">* Email is ongeldig!</label></div>
        </div>
    </div>
    <div class="loginregisterform">
        <button class="loginbutton" onclick="login(2)">login</button>
        <button class="registerbutton" onclick="login(1)">registreer</button>
        <div id="loginform" class="loginform">
        <form class="login">
        <div class="regwrap">
            <div id="LoginErr" class="labelred">Wrong Username/Password</div>
            <div class="label"><label class="label">Email</label></div>
            <input type="text" id="username" name="username/email">
            <div class="label"><label class="label">Wachtwoord</label></div>
            <input type="password" id="password" name="password">
            <div class="label"><a class="small" href="forgot">Wachtwoord Vergeten</a></div>
            <div class="label3"></div>
        </div>
            <input type="submit" value="Login"/>
        </form>
        </div>
        <div id="registerform" class="registerform">
        
        <form class="login" onsubmit="return checkForm(this);">
        <div class="regwrap">
            <div class="label2"><label class="label">Email</label></div>
            <input class="reginput" type="text" id="username" name="username/email">
            <div class="label2"><label class="label">Wachtwoord</label></div>
            <input class="reginput" type="password" id="password" name="password">
            <div class="label2"><label class="label">Herhaal Wachtwoord</label></div>
            <input class="reginput" type="password" id="password2" name="password2">
            <div class="label2"></div>
        </div>
            <input type="submit" value="Registreer"/>
        </form>
        </div> 
    </div>
    

        
    <h1><?php connect(); ?></h1>

    </body>

</html>