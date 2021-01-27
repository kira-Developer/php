<?php

/*
setcookie(name , value , expire , path , domain , secure , httponly)
Name: Name Of The Cookie
Value: Content Of The Cookie
Expire: Expiration Date

*/

setcookie('kira', 'test' , time() + 3600 ,"/");


if(count($_COOKIE) > 0){

echo 'Good The Cookies Are Enabled For Website';

}else{

	echo 'sorry The Cookies Are Enabled Please Enable It For Best Browsing';
}
