<?php
include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
?>

<!doctype html>
<html lang="nl">
<head>
		<title>Apotheek Schut</title>
		<meta charset="UTF-8">
		<meta name="description" content="dit is het appotheek van meneer schut">
		<meta name="keywords" content="schut, appotheek, medicijnen, Aalsmeer ">
		<meta name="viewport"content="width=device-witdth, initial-scale=1-0">
		<link rel="stylesheet" href="/Apotheek/bin/css/index.css">
    <link rel="stylesheet" href="/Apotheek/bin/css/style.css">
    <link rel="stylesheet" href="/Apotheek/bin/css/medicatie.css">
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
			<a href="index.php">Home</a>
			<a href="service.php">Service</a>
			<a href="medicatie.php">Medicijnen</a>
			<a class="active" href="voorlichting.php">Voorlichting</a>
			<a href="bestel.php">Bestel</a>
			<a class="disabled" href="#">Contact</a>
			<a style="float:right;margin-right:8%;" <?php if(!isset($_SESSION['username'])){echo"href='login.php'";}else{echo"href='logout.php'";}?>><?php if(!isset($_SESSION['username'])){echo"Log in / Registreer";}else{echo"Log uit";}?></a>
		</div>

      <!--||Main||-->
      <div class="main">
        <div class="mainTitle"><h1>Ziektes / Aandoeningen</h1></div>
      <div class="mainContent">

      <!--|| A ||-->
      <div class="List">
      <div class="ListTitle"><h2>A</h2></div>
        <div class="ListCollum">
          <ul>
            <li><a href="ziektes/astma.php">Astma</a></li>
          </ul>
      </div>
      </div>

      <!--|| B ||-->
      <div class="List">
      <div class="ListTitle"><h2>B</h2></div>
        <div class="ListCollum">
          <ul>
            <li><a href="ziektes/bloedarmoede.php">Bloedarmoede</a></li>
          </ul>
      </div>
      </div>

      <!--|| C ||-->
      <div class="List">
      <div class="ListTitle"><h2>C</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Chlamydia</li>
          </ul>
      </div>
      </div>

      <!--|| D ||-->
      <div class="List">
      <div class="ListTitle"><h2>D</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Dwangstoornis</li>
          </ul>
      </div>
      </div>

      <!--|| E ||-->
      <div class="List">
      <div class="ListTitle"><h2>E</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Extravasatie</li>
          </ul>
      </div>
      </div>

      <!--|| F ||-->
      <div class="List">
      <div class="ListTitle"><h2>F</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Fimose</li>
          </ul>
      </div>
      </div>

      <!--|| G ||-->
      <div class="List">
      <div class="ListTitle"><h2>G</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Gehoorgangontsteking</li>
          </ul>
      </div>
      </div>

      <!--|| H ||-->
      <div class="List">
      <div class="ListTitle"><h2>H</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Hoofdpijn</li>
          </ul>
      </div>
      </div>

      <!--|| J ||-->
      <div class="List">
      <div class="ListTitle"><h2>J</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Jeuk</li>
          </ul>
      </div>
      </div>

      <!--|| K ||-->
      <div class="List">
      <div class="ListTitle"><h2>K</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Kaalheid</li>
          </ul>
      </div>
      </div>

      <!--|| L ||-->
      <div class="List">
      <div class="ListTitle"><h2>L</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Lage bloeddruk</li>
          </ul>
      </div>
      </div>

      <!--|| M ||-->
      <div class="List">
      <div class="ListTitle"><h2>M</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Manie</li>
          </ul>
      </div>
      </div>

      <!--|| N ||-->
      <div class="List">
      <div class="ListTitle"><h2>N</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Narcolepsie</li>
          </ul>
      </div>
      </div>

      <!--|| O ||-->
      <div class="List">
      <div class="ListTitle"><h2>O</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Oorsuizen</li>
          </ul>
      </div>
      </div>

      <!--|| P ||-->
      <div class="List">
      <div class="ListTitle"><h2>P</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Pijn</li>
          </ul>
      </div>
      </div>

      <!--|| Q ||-->
      <div class="List">
      <div class="ListTitle"><h2>Q</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Q-koorts
</li>
          </ul>
      </div>
      </div>

      <!--|| R ||-->
      <div class="List">
      <div class="ListTitle"><h2>R</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Rookverslaving</li>
          </ul>
      </div>
      </div>

      <!--|| S ||-->
      <div class="List">
      <div class="ListTitle"><h2>S</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Schimmelnagels</li>
          </ul>
      </div>
      </div>

      <!--|| T ||-->
      <div class="List">
      <div class="ListTitle"><h2>T</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Tandbederf</li>
          </ul>
      </div>
      </div>

      <!--|| U ||-->
      <div class="List">
      <div class="ListTitle"><h2>U</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Urine-incontinentie</li>
          </ul>
      </div>
      </div>

      <!--|| V ||-->
      <div class="List">
      <div class="ListTitle"><h2>V</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Veteranenziekte</li>
          </ul>
      </div>
      </div>

      <!--|| W ||-->
      <div class="List">
      <div class="ListTitle"><h2>W</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Wratten</li>
          </ul>
      </div>
      </div>

      <!--|| Z ||-->
      <div class="List">
      <div class="ListTitle"><h2>Z</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Ziekte van Cushing</li>
          </ul>
      </div>
      </div>

  </div>
  </div>

  <!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>


</body>
</html>
