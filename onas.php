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
				<h1><a href="index.php">Szybkie auta</a></h1>
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
    <h3 style="text-align:center;font-size:26px;margin:0;padding-top:26px" >Ogólnopolska wypożyczalnia samochodów Szybkie auta - Łukasz Dziadosz</h3>
	<div class="onas">
	<section class="onas-left" style="float:left;width:50%;padding-right:50px">
	<h4 style="padding-left:310px;font-size:20px">Nowi na polskim rynku</h4>
    <p style="text-align:justify;padding-left:310px;">Firma samochodów <strong>Szybkie auta - Łukasz Dziadosz</strong> buduje w Polsce największą sieć wypożyczalni samochodów. Obecnie wynająć auto można w 31 miastach, głównie w Rzeszowie ale także m.in.: Bydgoszcz, Częstochowa, Gdańsk, Gdynia, Kalisz, Katowice, Kielce, Koszalin, Kraków, Lubin, Olsztyn, Poznań, Szczecin, Toruń, Warszawa, Wrocław.</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<img src="img/Auto4.jpg" alt="auto4" style="width:100%;padding-left:310px">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<h4 style="padding-left:310px;font-size:20px">Profesjonalna obsługa</h4>
	<p style="text-align:justify;padding-left:310px">Dla pracowników firmy <strong>Szybkie auta - Łukasz Dziadosz</strong> najważniejszy jest Klient, dlatego też stale wychodzimy naprzeciw oczekiwaniom naszych Klientów. Wszystko to z myślą o owocnej i długoletniej współpracy. Mamy na uwadze aktualne trendy i potrzeby. Stajemy na wysokości zadania i oferujemy najnowsze modele samochodów dające użytkownikom gwarancję bezpieczeństwa i komfortu jazdy.</p>
	<p style="text-align:justify;padding-left:310px">Aby zapewnić jak najlepszą obsługę, zatrudniamy ponad 100 specjalistów, którzy zapewniają naszym Klientom profesjonalizm i wyjście nawet z nieoczekiwanych sytuacji. Ogólnopolska infolinia czynna 7 dni w tygodniu umożliwia Klientom stały kontakt z pracownikami firmy. Jesteśmy elastyczni zarówno pod względem zróżnicowanej floty jak i warunków wynajmów. </p>
	</section>
	<section class="onas-right" style="float:left;width:50%;padding-left:50px">
	<h4 style="font-size:20px">Najwyższa jakość</h4>
	<p style="text-align:justify;padding-right:310px">Wypożyczalnia samochodów <strong>Szybkie auta - Łukasz Dziadosz</strong> cechuje się wysoką jakością oferowanych samochodów. Wszystkie nasze pojazdy są nowe: najstarszy model ma 2 lata. Ze szczególną starannością dbamy o sprawność techniczną pojazdów, dlatego stale przeprowadzamy przeglądy techniczne w autoryzowanych serwisach.</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<h4 style="font-size:20px">Dlaczego my?</h4>
	<ul style="line-height:180%">
	<li>Posiadamy nowe samochody</li>
	<li>Zapewniamy atrakcyjne ceny</li>
	<li>Nasze samochody są bezpieczne</li>
	<li>Jesteśmy dostępni w całej Polsce</li>
	</ul>
	<p style="text-align:justify;padding-right:310px"><strong>Szybkie auta - Łukasz Dziadosz</strong> w swojej ofercie posiada ponad 2500 nowych samochodów osobowych oraz ponad 500 samochodów dostawczych. Flota samochodów jest serwisowana u autoryzowanych dealerów. Posiadamy marki premium takie jak: BMW, Mercedes, Audi, Lexus i Volvo, a także bardzo duży wybór samochodów osobowych takich jak Mazda, Seat, Ford, Peugeot, Suzuki, Toyota, Volkswagen, Kia, Renault, Nissan.</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<img src="img/Auto3.jpg" alt="auto4" style="width:100%;padding-right:310px">
	</setcion>
	</div>
	<p>&nbsp;</p>
	<?php
require "footer.php";
?>