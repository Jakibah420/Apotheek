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
    <div class="mainTitle"><h1>Aspirine<h1></div>
    <div class="mainContent">
    <div class="info"><p>
      Aspirine wordt voorgeschreven
      bij de behandeling van verschillende
      klachten en aandoeningen. De dosering
      en het gebruik verschillen sterk per
      aandoening. Daarom zijn er verschillende
      teksten voor acetylsalicylzuur gemaakt.
  <p></div>
  </div>
  </div>

	<!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

</body>
</html>
