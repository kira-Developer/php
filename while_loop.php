<?php



/*

Syntax:


while ( Expression ) {
	
//Statement To Execute

}

*/

$i = 1;



while ( $i <= 20) {
	echo $i. "<br>";
	$i++;
}


?>

<?php


$a = 1;



while ( $a <= 20) :
	echo $a. "<br>";
	$a++;
	
endwhile;