<?php
     require "header.php";
	 ?>
	 
	 <main>

		 <div class="page1">
		<img src="glowna1.jpg" alt="auto" style="width:100%;filter: blur(8px);">
		<div class="centered">
		<h3 style="font-size:35px">Zarejestruj się</h3>
		<div id="panel">
 <form action="includes/signup.inc.php" method="post">
		 <p><input id="username" type="text" name="uid" placeholder="Username"></p>
		 <p><input id="username" type="text" name="mail" placeholder="E-mail"></p>
		 <p><input id="username" type="password" name="pwd" placeholder="Password"></o>
		 <p><input id="username" type="password" name="pwd-repeat" placeholder="Repeat password"></p>
		 <div id="lower">
		 <button id="login" type="submit" name="signup-submit">Zarejestruj</button>
		 </form>
	   </div>
	  </div>
	  				 <?php
		 if (isset($_GET['error'])) {
			 if ($_GET['error'] == "emptyfields") {
				 echo '<p style="font-size:20px">Wypełnij wszystkie pola</p>';
			 }
			 else if ($_GET['error'] == "invaliduidmail") {
				 echo '<p>Niewłaściwa nazwa i mail</p>';
			 }
			 else if ($_GET['error'] == "invaliduid") {
				 echo '<p>Niewłaściwa nazwa</p>';
			 }
			 else if ($_GET['error'] == "invalidmail") {
				 echo '<p>Niewłaściwy mail</p>';
			 }
			 else if ($_GET['error'] == "passwordcheck") {
				 echo '<p>Twoje hasła nie pasują</p>';
			 }
			 else if ($_GET['error'] == "usertaken") {
				 echo '<p>Nazwa jest zajęta</p>';
			 }
		 }
		 if (isset($_GET['signup'])){
		   if ($_GET['signup'] == "success") {
			 echo '<p>Zalogowany</p>';
		 }
		 }
		 ?>
	  </div>
		</div>
	 <?phprequire "footer.php";
	 ?>