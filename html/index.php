<?php
//include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
?>

<!doctype html>
<html lang="nl">
	<head>
		<title>Appotheek Schut</title>
		<meta charset="UTF-8">
		<meta name="description" content="dit is het appotheek van meneer schut">
		<meta name="keywords" content="schut, appotheek, medicijnen, Aalsmeer ">
		<meta name="author" content="Casey Kruijer">
		<meta name="viewport"content="width=device-witdth, initial-scale=1-0">
		<link rel="stylesheet" href="/Apotheek/bin/css/index.css">
		<link rel="icon" type="image/png" href="/Apotheek/assets/img/MiniLogo.png">
	</head>

	<body>

		<!--||Header||-->
		<div class="header">
			<img src="/Apotheek/assets/img/logo2.png"  alt="Logo Apotheek Schut" id="logo">
			<div class="user">
				<h1>Welcome <?php// echo $sname_session, " ", $name_session; ?></h1>
			</div>
		</div>

		<!--||Navigation||-->
		<div class="topnav">
			<a href="/Apotheek/html/index.php">Home</a>
			<a href="/Apotheek/html/service.php">Service</a>
			<a href="/Apotheek/html/medicatie.php">Medicijnen</a>
			<a href="/Apotheek/html/#">Bestel</a>
			<a href="/Apotheek/html/#">Contact</a>
			<a href="/Apotheek/html/login.php">Log in</a>
		</div>

		<!--||Main||-->
		<div class="content">

		<!--||Left Content||-->
		<div class="leftContent">
			<div class="news">
				<div class="newsTitle"><h1>Nieuws</h1></div>
				<div class="newsContent">
						<div class="newsSlider">
						<p>Hier Moet Nog Een Image Slider
							komen Met Nieuws</P></div>
				</div>
			</div>

		<!--||Openings Tijden||-->
			<div class="opening">
				<div class="opTitle"><h1>Openings Tijden</h1></div>

				<div class="opContent">

				<div class="opTijdenLeft">
				<table class="opTijden">
					<tr>
						<td>Maandag:</td>
						<td>9:00 tot 17:00</td>
					</tr>
					<tr>
						<td>Dinsdag:</td>
						<td>9:00 tot 17:00</td>
					</tr>
					<tr>
						<td>Woensdag:</td>
						<td>9:00 tot 17:00</td>
					</tr>
					<tr>
						<td>Donderdag:</td>
						<td>9:00 tot 19:00</td>
					</tr>
				</table>
				</div>

				<div class="opTijdenRight">
				<table id="openingstijden">
					<tr>
						<td>Vrijdag:</td>
						<td>9:00 tot 17:00</td>
					</tr>
					<tr>
						<td>Zaterdag:</td>
						<td>11:00 tot 17:00</td>
					</tr>
					<tr>
						<td>Zondag:</td>
						<td>11:00 tot 17:00</td>
					</tr>
				</table>
				</div>

				</div>
		</div>
		</div>

		<!--||Right Content||-->
		<div class="rightSection">
		<div class="titleRight">
			<h1>Contact</h1>
		</div>
		<div class="rightContent">
		<div class="contact">

			<div class="infoLeft">
			<ul>
				<li>Adres:</li>
				<li>Telefoonnummer:</li>
				<li>E-mail:</li>
				<li>Postcode:</li>
			</ul>
			</div>

			<div class="infoRight">
				<ul>
					<li>Oosteinderweg 180</li>
					<li>1234 12345678</li>
					<li>ApotheekSchut@mail.com</li>
					<li>1432 AR Aalsmeer</li>
				</ul>
			</div>

		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d7113.126349423197!2d4.771230837696514!3d52.28345505288039!2m2!1f159.7880357833916!2f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x47c5e09730634c59%3A0x3a474eaad0680ecb!2sOosteinderweg+180%2C+1432+AR+Aalsmeer!5e1!3m2!1snl!2snl!4v1548847177965" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		</div>

		</div>
		</div>

		<!--||Footer||-->
		<footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>

	</body>
</html>
