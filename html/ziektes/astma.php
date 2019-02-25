<!doctype html>
<html lang="nl">
	<head>
		<title>Appotheek Schut</title>
		<meta charset="UTF-8">
		<meta name="description" content="dit is het appotheek van meneer schut">
		<meta name="keywords" content="schut, appotheek, medicijnen, Aalsmeer ">
		<meta name="author" content="Jacob Ligthart">
		<meta name="viewport"content="width=device-witdth, initial-scale=1-0">
		<link rel="stylesheet" href="/Apotheek/bin/css/medicijnen.css">
		<link rel="stylesheet" href="/Apotheek/bin/css/index.css">
		<link rel="stylesheet" href="/Apotheek/bin/css/style.css">
		<link rel="stylesheet" href="/Apotheek/bin/css/footeroverride.css">
		<link rel="icon" type="image/png" href="/Apotheek/assets/img/MiniLogo.png">
	</head>

	<body>

		<!--||Header||-->
		<div class="header">
			<img src="/Apotheek/assets/img/logoApo.png"  alt="Logo Apotheek Schut" id="logo">
			<div class="user">
			<h1>Welkom <?php   if(!isset($_SESSION['username'])){}elseif(isset($_SESSION['username'])){if ($gend == "Man") {echo "Dhr. ";} elseif ($gend == "Vrouw") {echo "Mevr. ";} elseif ($gend == "Anders") {echo "Dhr/Mevr ";} else {echo "ERR";}echo $sname_session, " ", $name_session;}?></h1>
			</div>
		</div>

		<!--||Navigation||-->
		<div class="topnav">
			<a href="../index.php" >Home</a>
			<a href="../service.php">Service</a>
			<a href="../medicatie.php">Medicijnen</a>
			<a href="../voorlichting.php">Voorlichting</a>
			<a href="../bestel.php">Bestel</a>
			<a class="disabled" href="#">Contact</a>
			<a style="float:right;margin-right:8%;" <?php if(!isset($_SESSION['username'])){echo"href='login.php'";}else{echo"href='logout.php'";}?>><?php if(!isset($_SESSION['username'])){echo"Log in / Registreer";}else{echo"Log uit";}?></a>
		</div>

	<!--||Main||-->
  <div class="main">
    <div class="mainTitle"><h1>Astma<h1></div>
    <div class="mainContent">
    <div class="info"><p>
      Astma is een aandoening van de luchtwegen (buisjes in de longen).
       Normaal zijn de luchtwegen wijd genoeg om gemakkelijk in en uit
        te ademen. Bij astma zijn de luchtwegen van tijd tot tijd vernauwd.
      Er kan minder lucht doorheen, het ademen gaat moeilijker en u wordt benauwd.
      De vernauwing van de luchtwegen komt doordat ze overgevoelig
       zijn voor bepaalde prikkels. Als reactie op de prikkels trekken de
       spiertjes rond de luchtwegen samen. Het slijmvlies langs de binnenkant
        van de luchtwegen raakt ontstoken: het zwelt op en produceert meer
        slijm. Daardoor worden de luchtwegen nauwer.
      Astma begint meestal op de kinderleeftijd. Maar het kan ook
       pas voor het eerst beginnen bij mensen die ouder zijn dan 50 jaar.

  <p></div>
  </div>
  </div>

	<!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

</body>
</html>
