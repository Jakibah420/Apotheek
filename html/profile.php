<?php
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
?>

<!DOCTYPE HTML>

<html>

<head>
<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $pagetitle?></title>
		<div class="Session">
		<h1>Welkom <?php if ($gend == "Man") {echo "Dhr. ";} elseif ($gend == "Vrouw") {echo "Mevr. ";} elseif ($gend == "Anders") {echo "Dhr/Mevr ";} else {echo "ERR";}echo $sname_session, " ", $name_session; ?></h1>
		</div>
		<link rel="stylesheet" href="/Apotheek/bin/css/home.css">
</head>

<body>
    
    <div class="userData">
        <h2> Gebruikers gegevens </h2>
        <p>Naam: <?php echo $firstname . ' ' . $name_session?><p>
        <p>Email: <?php echo $user_check?><p> 
        <p>Geslacht: <?php echo $gend?><p>  
        <p>Telefoon nummer: <?php echo $phone?><p> 
        <p>Mobiel: 0<?php echo $mphone?><p>   
        <p>Adres: <?php echo $adres . ', ' . $postal?><p> 
        <p>Geboortedatum: <?php echo $birthdate?><p>
        <p>Lid sinds: <?php echo $activation?><p>
    </div>
    
    <div class="">
    
    </div>
    
</body>

</html>