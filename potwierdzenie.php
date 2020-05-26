<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Apka</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="glowna.php">Szybkie auta</a></h1>
				<p>Design by Łukasz Dziadosz</a></p>
	  </div>
	  <div id="social">
				<ul class="contact" style="list-style:none;">
					<li style="float:left"><a href="#" class="icon icon-twitter"><img src="img/twitter.png" style="width:100px;"></a></li>
					<li style="float:left"><a href="#" class="icon icon-facebook"><img src="img/facebook.png" style="width:100px;"></a></li>
					<li style="float:left"><a href="#" class="icon icon-dribbble"><img src="img/Google.png" style="width:100px;"></a></li>
					<li style="float:left"><a href="#" class="icon icon-tumblr"><img src="img/Ig.png" style="width:100px;"></a></li>
				</ul>
			</div>
    </div>
		<div id="menu" class="container">
        <form action="includes/logout.inc.php" method="post">
			<ul>
				<li><a href="glowna.php">Strona główna</a></li>
				<li><a href="wynajmij.php">Wynajmij</a></li>
                <li><a href="onas.php">O nas</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <form action="includes/logout.inc.php" method="post">
		        <button type="submit" name="logout-submit">Wyloguj</button>
                </form>
            </ul>
            </form>
		</div>
	</div>
</div>
<?php
$id_auta = $_POST['id_auta'];
echo $id_auta;
$img = $_POST['img'];
echo "<img src=$img >";
$Marka = $_POST['Marka'];
echo $Marka;
$Model = $_POST['Model'];
echo $Model;
$Cena = $_POST['Cena'];
echo $Cena;
echo $imie = "";
echo $adres = '';
echo $telefon = '';
echo "<form action=pdf.php method=post>";
echo "<input type=hidden name=Marka value=$Marka>";
echo "<input type=hidden name=Model value=$Model>";
echo "<input type=hidden name=Cena value=$Cena>";
echo "<p><input type=text name=imie  placeholder=Imie placeholder=Imie value=$imie></p>";
echo "<p><input type=text name=adres placeholder=Adres value=$adres></p>";
echo "<p><input type=number name=telefon placeholder=Telefon value=$telefon></p>";
echo "<button>Zapłać</button> </form>";
?>