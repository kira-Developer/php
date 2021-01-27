<?php


if ($_SERVER['REQUEST_METHOD']=='POST') {


	$admins = array('kira','moody');

	$username = $_POST['username'];

	if (in_array($username, $admins)) {

		echo "welcome " .$username . " To Control Panel For Admin";
	}else{

		echo "Sorry This Username Is Not Exist Our Client Area";
	}
}else{
	echo"sorry You Cant Browse This Page Directly";
}