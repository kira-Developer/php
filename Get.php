<?php
$username = $_GET['username'];
$admin =   array( 'kira','moody' );


if(in_array($username, $admin)){

echo "welcome " . $username ." To Control Panel For Admin";



}else{

	echo "the username is not found";
}