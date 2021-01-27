<?php




/*
Syntax [1] For Indexed Arrays

foreach ($array as $value) {
	

	// Code To Be Executed
}



syntax [2] For Associative Arrays

foreach ( $array as $key => $value) {

 // Code To Be Executed 

	}
 */
$countries = array(


"Eg" => "Egypt",
"Sa" => "Saudi",
"QA" => "Qatar",
"BA" => "Bahrain",
"SY" => "Syria" ,
"SU" => "Sudan",
"PA" => "Palestine",

);

foreach ($countries as $key => $value) {
	echo $value ."=>".$key. "<br>";
}