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
<<<<<<< HEAD
			<a href="index.php">Home</a>
			<a href="service.php">Service</a>
			<a class="active" href="medicatie.php">Medicijnen</a>
			<a href="voorlichting.php">Voorlichting</a>
			<a class="disabled" href="#">Bestel</a>
			<a class="disabled" href="#">Contact</a>
			<a style="float:right;margin-right:8%;" <?php if(!isset($_SESSION['username'])){echo"href='login.php'";}else{echo"href='logout.php'";}?>><?php if(!isset($_SESSION['username'])){echo"Log in / Registreer";}else{echo"Log uit";}?></a>
=======
			<a href="/Apotheek/html/index.php">Home</a>
			<a href="/Apotheek/html/service.php">Service</a>
			<a class="active">Medicijnen</a>
      <a href="/Apotheek/html/voorlichting.php">Voorlichting</a>
			<a href="/Apotheek/html/bestel.php">Bestel</a>
			<a href="/Apotheek/html/login.php">Log in</a>
>>>>>>> 9e8a4c025f150ff5e92afb98aec7703f5f856945
		</div>

      <!--||Main||-->
      <div class="main">
        <div class="mainTitle"><h1>Medicijnen</h1></div>
      <div class="mainContent">

      <!--||Medicijnen Lijst 1||-->
      <div class="List">
      <div class="ListTitle"><h2>A</h2></div>
        <div class="ListCollum">
          <ul>
            <li><a href="medicijnen/asprine.php">Asprine</a></li>
      			<li><a href="#">Abciximab</a></li>
      			<li><a href="medicijnen/acarbose.php">Acarbose</a></li>
      			<li><a href="medicijnen/acamprosaat.php">Acamprosaat</a></li>
      			<li><a href="#">Abacavir</a></li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 2||-->
      <div class="List">
      <div class="ListTitle"><h2>B</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Bromocriptine</li>
            <li>Bromperidol</li>
            <li>Broomhexine</li>
            <li>Brotizolam</li>
            <li>Broxil</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 3||-->
      <div class="List">
      <div class="ListTitle"><h2>C</h2></div>
        <div class="ListCollum">
          <ul>
            <li>cabazitaxel</li>
            <li>cabergoline</li>
            <li>cannabis</li>
            <li>Caprelsa</li>
            <li>captopril</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 4||-->
      <div class="List">
      <div class="ListTitle"><h2>D</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Dacogen</li>
            <li>danazol</li>
            <li>Daktacort</li>
            <li>dasabuvir</li>
            <li>De Tuinen Valeriaan</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 5||-->
      <div class="List">
      <div class="ListTitle"><h2>E</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Efient</li>
            <li>Elmiron</li>
            <li>Emla</li>
            <li>enalapril</li>
            <li>Enalaprilmaleaat</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 6||-->
      <div class="List">
      <div class="ListTitle"><h2>F</h2></div>
        <div class="ListCollum">
          <ul>
            <li>febuxostat</li>
            <li>fentolamine</li>
            <li>Ferinject</li>
            <li>finasteride</li>
            <li>ferrosulfaat</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 7||-->
      <div class="List">
      <div class="ListTitle"><h2>G</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Glepark</li>
            <li>Grinterol</li>
            <li>Gynomyk</li>
            <li>guselkumab</li>
            <li>Glucobay</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 8||-->
      <div class="List">
      <div class="ListTitle"><h2>H</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Haldol</li>
            <li>heparine</li>
            <li>Hibicet</li>
            <li>Hulio</li>
            <li>Hycamtin</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 9||-->
      <div class="List">
      <div class="ListTitle"><h2>I</h2></div>
        <div class="ListCollum">
          <ul>
            <li>idelalisib</li>
            <li>icatibant</li>
            <li>Iberogast</li>
            <li>Imodium</li>
            <li>Inegy</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 10||-->
      <div class="List">
      <div class="ListTitle"><h2>J</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Jext</li>
            <li>Juluca</li>
            <li>Jorveza</li>
            <li>Javlor</li>
            <li>Jinarc</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 11||-->
      <div class="List">
      <div class="ListTitle"><h2>K</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Keppra</li>
            <li>Kefzol</li>
            <li>Kanjinti</li>
            <li>kinidine</li>
            <li>Klyx</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 12||-->
      <div class="List">
      <div class="ListTitle"><h2>L</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Lanoxin</li>
            <li>Lendormin</li>
            <li>Leustatin</li>
            <li>Lerdip</li>
            <li>Lendormin</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 13||-->
      <div class="List">
      <div class="ListTitle"><h2>M</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Matever</li>
            <li>Marinol</li>
            <li>megestrol</li>
            <li>megestrol</li>
            <li>mecasermine</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 14||-->
      <div class="List">
      <div class="ListTitle"><h2>N</h2></div>
        <div class="ListCollum">
          <ul>
            <li>naltrexon</li>
            <li>naproxen</li>
            <li>naratriptan</li>
            <li>Natpar</li>
            <li>Nasacort</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 15||-->
      <div class="List">
      <div class="ListTitle"><h2>O</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Olumiant</li>
            <li>omeprazol</li>
            <li>Onivyde</li>
            <li>Orencia</li>
            <li>Opsumit</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 16||-->
      <div class="List">
      <div class="ListTitle"><h2>P</h2></div>
        <div class="ListCollum">
          <ul>
            <li>pantoprazol</li>
            <li>Parlodel</li>
            <li><a href="medicijnen/paracetamol.php">paracetamol</a></li>
            <li>pentamidine</li>
            <li>perindopril</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 17||-->
      <div class="List">
      <div class="ListTitle"><h2>Q</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Qlaira</li>
            <li>quinapril</li>
            <li>Qvar</li>
            <li>Qutenza</li>
            <li>quinagolide</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 18||-->
      <div class="List">
      <div class="ListTitle"><h2>R</h2></div>
        <div class="ListCollum">
          <ul>
            <li>ramipril</li>
            <li>Rasilez</li>
            <li>Refusal</li>
            <li>Remeron</li>
            <li>Renvela</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 19||-->
      <div class="List">
      <div class="ListTitle"><h2>S</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Salfuler</li>
            <li>Salagen</li>
            <li>Savene</li>
            <li>Sebivo</li>
            <li>Selsun</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 20||-->
      <div class="List">
      <div class="ListTitle"><h2>T</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Tafinlar</li>
            <li>Tadim</li>
            <li>tedizolid</li>
            <li>Tasmar</li>
            <li>Targretin</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 21||-->
      <div class="List">
      <div class="ListTitle"><h2>U</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Uptravi</li>
            <li>Ultralan</li>
            <li>Ucedane</li>
            <li>Ubretid</li>
            <li>Utrogestan</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 22||-->
      <div class="List">
      <div class="ListTitle"><h2>V</h2></div>
        <div class="ListCollum">
          <ul>
            <li>valsartan</li>
            <li>valeriaan</li>
            <li>Vemlidy</li>
            <li>verapamil</li>
            <li>Vfend</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 23||-->
      <div class="List">
      <div class="ListTitle"><h2>W</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Wellvone</li>
            <li>Wormkuur</li>
            <li>Wartec</li>
            <li>Wellbutrin</li>
            <li>Wakix</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 24||-->
      <div class="List">
      <div class="ListTitle"><h2>X</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Xanax</li>
            <li>Xagrid</li>
            <li>Xifaxan</li>
            <li>Xultophy</li>
            <li>Xyzal</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 25||-->
      <div class="List">
      <div class="ListTitle"><h2>Y</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Yondelis</li>
            <li>Yomesan</li>
            <li>Yervoy</li>
            <li>Yellox</li>
            <li>Yaz</li>
          </ul>
      </div>
      </div>

      <!--||Medijnen Lijst 26||-->
      <div class="List">
      <div class="ListTitle"><h2>Z</h2></div>
        <div class="ListCollum">
          <ul>
            <li>Zaldiar</li>
            <li>Zeffix</li>
            <li>zidovudine</li>
            <li>Zoely</li>
            <li>Zoloft</li>
          </ul>
      </div>
      </div>

  </div>
  </div>

  <!--||Footer||-->
  <footer><p>Appotheek schut || Oosteinderweg 180 || 1432 AR || Aalsmeer</p></footer>


</body>
</html>
