<?php

$browser = "firefox";


switch ($browser) {
	case "Firefox":
	echo "Your Favourite Browse Is firefox";
		break;
	case "Google Chrome":
	case "Google":
	case "Chrome":
	echo "Your Favourite Browse Is Google Chrome";
	
	break;
	case "Opera":
	echo "Your Favourite Browse Is Opera";

	break;

	default;
	echo "Your Favourite Browse Is Not Here";
	
		break;
}