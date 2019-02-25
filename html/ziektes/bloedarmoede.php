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
    <div class="mainTitle"><h1>Bloedarmoede<h1></div>
    <div class="mainContent">
    <div class="info"><p>
      Bloedarmoede betekent dat er te weinig rode bloedcellen
      in het bloed zitten of dat de rode bloedcellen niet goed werken.
       Daardoor kan het bloed minder zuurstof vervoeren en kunt u
       verschillende klachten krijgen.
      In de rode bloedcel zit hemoglobine (Hb).
      Hemoglobine is nodig om zuurstof te vervoeren vanuit
      uw longen naar alle delen van het lichaam.
      Om te bepalen of u bloedarmoede heeft,
       wordt gekeken naar de waarde van het Hb in het bloed.
      Mannen hebben bloedarmoede als het Hb lager
      is dan 8,5 mmol/l.Vrouwen hebben bloedarmoede als
      het Hb lager is dan 7,5 mmol/l. Voor zwangeren en kinderen
      gelden andere waarden.
      De medische term voor bloedarmoede is anemie.
  <p></div>
  </div>
  </div>

	<!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

</body>
</html>
