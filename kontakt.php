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
				<li><a href="#">Wynajmij</a></li>
                <li><a href="onas.php">O nas</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <form action="includes/logout.inc.php" method="post">
		        <button type="submit" name="logout-submit">Wyloguj</button>
                </form>
            </ul>
            </form>
		</div>
	</div>
    <h4 style="text-align:center;font-size:26px;margin:0;padding-top:26px">Skontaktuj się z nami!</h4>
    <section class="kontakt-left" style="float:left;width:47%;">
    <h4 style="padding-left:310px">Dane firmy</h4>
    <p style="padding-left:310px">Łukasz Dziadosz - szybkie auta Sp.z.o.o.
    <br>
    35-310 Rzeszów
    <br>
    aleja Tadeusza Rejtana 16C</p>
    <p style="padding-left:310px"><strong>Adres do korenspondencji</strong>
    <br>
    aleja Tadeusza Rejtana 16C, 35-310 Rzeszów
    <br>
    e-mail: <a href="mailto:lukaszdziadosz550@gmail.com">lukaszdziadosz550@gmail.com</a></p>
    </section>
    <section class="kontakt-right" style="float:right;width:28%">
    <h4 style="margin-bottom:0">Dział Obsługi Klienta</h4>
    <p>telefon: <a href="tel:123456789">+48 123 456 789</a>
    <br>
    e-mail: <a href="mailto:lukaszdziadosz550@gmail.com">lukaszdziadosz550@gmail.com</a></p>
    <h4 style="margin-bottom:0">Rezerwacje</h4>
    <p>telefon: <a href="tel:123456789">+48 123 456 789</a>
    <br>
    e-mail: <a href="mailto:lukaszdziadosz550@gmail.com">lukaszdziadosz550@gmail.com</a></p>
    <h4 style="margin-bottom:0">Dział reklamacji</h4>
    <p>telefon: <a href="tel:123456789">+48 123 456 789</a>
    <br>
    e-mail: <a href="mailto:lukaszdziadosz550@gmail.com">lukaszdziadosz550@gmail.com</a></p>
    <h4 style="margin-bottom:0">Serwis mechaniczny</h4>
    <p>telefon: <a href="tel:123456789">+48 123 456 789</a>
    <br>
    e-mail: <a href="mailto:lukaszdziadosz550@gmail.com">lukaszdziadosz550@gmail.com</a></p>
    </section>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h4 style="text-align:center;font-size:26px;margin:0;padding-top:26px">Znajdź nas tutaj:</h4>
    <p>&nbsp;</p>
<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.9885259316393!2d22.013391215884763!3d50.03031082542907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfaf83c5a9833%3A0x432f7dd9b86f7a01!2sUniwersytet%20Rzeszowski!5e0!3m2!1spl!2spl!4v1589833467475!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
    <p>&nbsp;</p>
    <?php
require "footer.php";
?>