<?php



/*
[ 2 ] Associative Array

Syntax Array(

Kry1 => Value1,
Kry2 => Value2,
Kry3 => Value3, 
); 

*/

$langs = array(


"Html" 	=> "%60",
"Css"	=> "%40",
"Css3"	=> "%0",
"Js"	=> "%0",
"Html5"	=> "%0",


);
$langs['mySQL']= "%70";


echo "<ul>";
foreach ($langs as $lang =>$key){
	echo "<li>".'=>'. $key. $lang ."</li>";


	
}

echo "</ul>";