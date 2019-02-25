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
			<a class="disabled" href="#">Bestel</a>
			<a class="disabled" href="#">Contact</a>
			<a style="float:right;margin-right:8%;" <?php if(!isset($_SESSION['username'])){echo"href='login.php'";}else{echo"href='logout.php'";}?>><?php if(!isset($_SESSION['username'])){echo"Log in / Registreer";}else{echo"Log uit";}?></a>
		</div>


	<!--||Main||-->
  <div class="main">
    <div class="mainTitle"><h1>Acamprosaat<h1></div>
    <div class="mainContent">
    <div class="info"><p>
      Acamprosaat vermindert de behoefte aan alcohol.
      Hulpmiddel bij ontwenningskuur om van de alcohol af te komen.
      Na 4 weken weet u of dit medicijn bij u werkt. Als het werkt, moet u het meestal een jaar gebruiken.
      Ga door met het gebruik van acamprosaat, ook al drinkt u toch een keer alcohol.
      Bijwerkingen: maagdarmklachten, zoals diarree, buikpijn en misselijkheid.
      Neem het middel in met wat voedsel. Dan heeft u minder last van maagdarmklachten.
  <p></div>
  </div>
  </div>

	<!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

</body>
</html>
