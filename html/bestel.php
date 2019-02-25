<!doctype html>
<html lang="nl">
	<head>
		<title>Appotheek Schut</title>
		<meta charset="UTF-8">
		<meta name="description" content="dit is het appotheek van meneer schut">
		<meta name="keywords" content="schut, appotheek, medicijnen, Aalsmeer ">
		<meta name="author" content="Jacob Ligthart">
		<meta name="viewport"content="width=device-witdth, initial-scale=1-0">
		<link rel="stylesheet" href="/Apotheek/bin/css/bestel.css">
		<link rel="icon" type="image/png" href="/Apotheek/assets/img/MiniLogo.png">
	</head>

	<body>

    <!--||Header||-->
		<div class="header">
			<img src="/Apotheek/assets/img/logoApo.png" alt="Logo Apotheek Schut" id="logo">
			<div class="user">
				<h1>Welcome <?php// echo $sname_session, " ", $name_session; ?></h1>
			</div>
		</div>

    <!--||Navigation||-->
		<div class="topnav">
			<a href="/Apotheek/html/index.php">Home</a>
      <a href="/Apotheek/html/#">Service</a>
			<a href="/Apotheek/html/medicatie.php">Medicijnen</a>
			<a href="/Apotheek/html/voorlichting.php">Voorlichting</a>
			<a class="active">Bestel</a>
			<a href="/Apotheek/html/login.php">Log in</a>
		</div>
      <!--||Main||-->
      <div class="main">
        <div class="mainTitle"><h1>Bestel</h1></div>
      <div class="mainContent">
        <div class="formulier">
          <div class="voornaam">
          <p>Voornaam:</p>
          <input class="Vnaam" type="text"></input>
          </div>
          <div class="achternaam">
          <p>Achternaam:</p>
          <input class="Anaam" type="text"></input>
          </div>
          <div class="email">
          <p>E-mail:</p>
          <input class="mail" type="text"></input>
          </div>
          <div class="infoText">
          <p>Medicijnen:<small>「Zet hier u medicijnen in een rijtje onder elkaar.」</small></p>
          <textarea class="medText" rows="10" ></textarea>
      </div>
      <button id="btnSend"><p>Verstuur</p></button>
      </div>
      </div>
    </div>

      <!--||Footer||-->
      <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

</body>
</html>
