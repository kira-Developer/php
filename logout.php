	<?php

	//Resume The session

	session_start();

	//unset

	session_unset();

	//Destroy

	session_destroy();

	print_r($_SESSION);
	?>