<?php  session_start(); 

  echo "welcome mr " . $_SESSION["username"] . " Your favorite color is " .  $_SESSION["fivcolor"];

  echo '<br/>';

	echo '<a href="logout.php">Exit</a>';
	?>