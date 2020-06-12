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
			<ul>
				<li><a href="glowna.php">Strona główna</a></li>
				<li><a href="wynajmij.php">Wynajmij</a></li>
                <li><a href="onas.php">O nas</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
		        <li><a href="includes/logout.inc.php">Wyloguj</a></li> 
            </ul>
		</div>
	</div>
</div>
<h5 style="text-align:center;font-size:25px">Znajdź swoje auto</h5>

<?php
$polaczenie = new mysqli('localhost', 'root', '', 'apka');
if (!$polaczenie) {
    die('Could not connect: ' . mysql_error());
}
$wynik = mysqli_query($polaczenie, "SELECT * FROM auta WHERE 1");
while ($row = mysqli_fetch_array($wynik)) {
	echo "<div class=wynajmij style=text-align:center><form action=potwierdzenie.php method=post>";
	echo "<img class=zdjecie src=". $row['img'] ." >";
	echo "<a class=tekst>Samochód: ". $row['Marka'] ." ";
	echo "" . $row['Model'] . " <br><br> "; 	
	echo "Przebieg samochodu: " . $row['Przebieg'] . "km<br><br> "; 
	echo "Cena: " . $row['Cena'] . "zł <br><br>"; 
	echo "<input type=hidden name=id_auta value=$row[id_auta]>";
	echo "<input type=hidden name=img value=$row[img]>";
	echo "<input type=hidden name=Marka value=$row[Marka]>";
	echo "<input type=hidden name=Model value=$row[Model]>";
	echo "<input type=hidden name=Przebieg value=$row[Przebieg]>";
	echo "<input type=hidden name=Cena value=$row[Cena]>";
	echo "<button class=dodaj value=cos type=submit><span>Wypożycz</span></button></form></a></div><br>";
}
?>
    <?php
require "footer.php";
?>
<style>
.wynajmij{
	margin-top: 30px;
	margin-bottom: 30px;
	width: 78%;
}
.zdjecie{
	
}
.tekst{
	font-size:20px;
	position: absolute;
	font-family:'Roboto';
}

</style>