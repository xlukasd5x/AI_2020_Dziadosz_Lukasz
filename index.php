<?php
require "header.php";
?>
		<div class="page1">
		<img src="glowna1.jpg" alt="auto" style="width:100%;filter: blur(8px);">
		<div class="centered">
		<h2>Jeździj z nami, gdzie chcesz</h2>
		<div class="przycisk">
  <a href="login.php" class="przycisk1">Sprawdź nas</a>
</div>
		</div>
		</div>
		<?php
	  if (isset($_SESSION['userId'])) {
	    echo ' <form action="includes/logout.inc.php" method="post">
		 <button type="submit" name="logout-submit">Logout</button>
	  </form>';
	 }
	 else {
		 echo '<form action="includes/login.inc.php" method="post">
	     <input type="text" name="mailuid" placeholder="Username/E-mail">
		 <input type="password" name="pwd" placeholder="Password">
		 <button type="submit" name="login-submit">Login</button>
	  </form>
	  <a href="signup.php">Signup</a> ';
	 }
	 ?>
		</body>