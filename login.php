<?php
require "header.php"
?>
<div class="page1">
		<img src="glowna1.jpg" alt="auto" style="width:100%;filter: blur(8px);">
		<div class="centered">
		<h3 style="font-size:35px">Zaloguj się</h3>
		<div id="panel">
<form action="includes/login.inc.php" method="post">
	     <p><input id="username" type="text" name="mailuid" placeholder="Username/E-mail"></p>
		 <p><input id="username" type="password" name="pwd" placeholder="Password"></p>
		 <div id="lower">
		 <p><button id="login" type="submit" name="login-submit">Zaloguj</button></p>
	  </form>
	  </div>
	  </div>
	  <?php
		 if (isset($_GET['error'])) {
			 if ($_GET['error'] == "emptyfields") {
				 echo '<p style="font-size:20px">Wypełnij wszystkie pola</p>';
			 }
			 if ($_GET['error'] == "nouser") {
				echo '<p style="font-size:20px">Brak takiego użytkownika</p>';
			}
			if ($_GET['error'] == "wrongpwd") {
				echo '<p style="font-size:20px">Złe hasło</p>';
			}
		}
			 ?>
	  </div>
	  </div>