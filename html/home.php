<?php 
	include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
	$pagetitle = ucwords(basename(__FILE__, '.php'));
	$News1 = "Tijdelijk grotere flesjes ibuprofen nu 500 ml inplaats van flesjes van 250 ml.";
	$News2 = "Deze maand iberogast de 2de fles voor de helft van de prijs.";
	$News3 = "Griep heerst in het noorden, Let goed op uw gezondheid!";
?>

<html>
	<head>
		<meta charset="utf-8">    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $pagetitle?></title>
		<div class="Session">
		<h1>Welkom <?php if ($gend == "Man") {echo "Dhr. ";} elseif ($gend == "Vrouw") {echo "Mevr. ";} elseif ($gend == "Anders") {echo "Dhr/Mevr ";} else {echo "ERR";}echo $sname_session, " ", $name_session; ?></h1>
		</div>
	</head>
	
	<body>
		
		<div class="topnav">
			<a class="active" href="#home">Home</a>
			<a href="">Service</a>
			<a href="">Medicijn</a>
			<a href="">Bestel</a>
			<a href="">Contact</a>
			<a href="logout.php">Log uit</a>
		</div>	
		
		<div class="googlewrap shadow">
			<div class="content1">
				<p><b>Onze apotheek is gevesticht in Oostereinderweg 180, in Aalsmeer 1432AR</b></p>
			</div>
			<div class="google">
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d7113.126349423197!2d4.771230837696514!3d52.28345505288039!2m2!1f159.7880357833916!2f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x47c5e09730634c59%3A0x3a474eaad0680ecb!2sOosteinderweg+180%2C+1432+AR+Aalsmeer!5e1!3m2!1snl!2snl!4v1548847177965" width="300px" height="188px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="content2 shadow">
				<p><b>Openingstijden:</b><br>
				Maandag: 9:00 tot 17:00<br>
				Dinsdag: 9:00 tot 17:00<br>
				Woensdag: 9:00 tot 17:00<br>
				Donderdag: 9:00 tot 19:00<br>
				Vrijdag: 9:00 tot 17:00<br>
				Zaterdag: 11:00 tot 17:00<br>
				Zondag: 11:00 tot 17:00<p>
		</div>
		
		<div class="contentupperf">
			<b>Nieuws.</b><br>
			1. <?php echo $News1?><br>
			2. <?php echo $News2?><br>
			3. <?php echo $News3?><br>
		</div>
		
		<footer class="footer">
		
		</footer>
	</body>
</html>