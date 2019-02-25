<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/db.php");
    if(isset($_SESSION['username'])){header("location:index.php");die();}
?>

<html>
    <head>
		<title>Apotheek Schut</title>
		<meta charset="UTF-8">
		<meta name="description" content="dit is het appotheek van meneer schut">
		<meta name="keywords" content="schut, appotheek, medicijnen, Aalsmeer ">
		<meta name="viewport"content="width=device-witdth, initial-scale=1-0">
		<link rel="stylesheet" href="/Apotheek/bin/css/index.css">
        <link rel="stylesheet" href="/Apotheek/bin/css/style.css">
        <link rel="stylesheet" href="/Apotheek/bin/css/footeroverride.css">
        <link rel="icon" type="image/png" href="/Apotheek/assets/img/MiniLogo.png">
        <script src="../bin/scripts/login.js"></script>
	</head>

    <body>
    <!--||Header||-->
        <div class="header">
			<img src="/Apotheek/assets/img/logoApo.png"  alt="Logo Apotheek Schut" id="logo">
			<div class="user"></div>
        </div>
    <!--||Navigation||-->
		<div class="topnav">
			<a href="index.php">Home</a>
			<a href="service.php">Service</a>
			<a href="medicatie.php">Medicijnen</a>
			<a href="voorlichting.php">Voorlichting</a>
			<a href="bestel.php">Bestel</a>
			<a class="disabled" href="#">Contact</a>
        </div>
        
    <div id="errform" class="errorformhead">
        <div class="errorformheader"></div>
        <div class="errorform">
        <div id="err1" class="errlabel"><label class="label">* Email mag niet blank zijn!</label></div>
        <!--<div id="err2" class="errlabel"><label class="label">* Email mag geen speciale tekens of spaties bevatten!</label></div>-->
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
        <form class="login" method="post" action="login.php">
        <div class="regwrap">
        <div id="LoginErr" <?php if ($showRegMailFlag===true){?>style="display:inline-block"<?php } ?> class="labelred">Email al in gebruik!</div>
            <div id="LoginErr" <?php if ($showDivFlag===true){?>style="display:inline-block"<?php } ?> class="labelred">Verkeerd email adress/Wachtwoord</div>
            <div id="LoginErr" <?php if ($showPassFlag===true){?>style="display:inline-block"<?php } ?> class="labelred">Geen wachtwoord ingevoerd</div>
            <div id="LoginErr" <?php if ($showEmFlag===true){?>style="display:inline-block"<?php } ?> class="labelred">Voer eerst uw gebruikersgegevens in voordat u inlogt!</div>
            <div class="label"><label class="label">Email</label></div>
            <input type="text" id="username" name="logemail">
            <div class="label"><label class="label">Wachtwoord</label></div>
            <input type="password" id="password" name="logpassword">
            <div class="label"><a class="small" href="forgot">Wachtwoord Vergeten</a></div>
            <div class="label3"></div>
        </div>
            <input type="submit" name="login_user" value="Login"/>
        </form>
        </div>
        <div id="registerform" class="registerform">
        
        <form class="login" method="post" action="login.php" onsubmit="return checkForm(this);">
        <div class="regwrap">
            <div class="label2"><label class="label">Email</label></div>
            <input class="reginput" type="text" id="username" name="regemail">
            <div class="label2"><label class="label">Wachtwoord</label></div>
            <input class="reginput" type="password" id="password" name="regpassword" maxlength="10">
            <div class="label2"><label class="label">Herhaal Wachtwoord</label></div>
            <input class="reginput" type="password" id="password2" name="regpassword2" maxlength="10">
            <div class="label2"></div>
        </div>
            <input type="submit" name="reg_user" value="Registreer"/>
        </form>
        </div> 
    </div>

    
		<!--||Footer||-->
		<footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

    </body>
</html>