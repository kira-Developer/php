<?php


/*

Array_push:		Array_push (Array, value1,value2,value3);
array_unshift:	array_unshift (Array, value1,value2,value3);
*/

$array=array(

"Html",
"Css",
"Css5",
"Html5",
"Js",
"Ruby",
"Python",
10,



);


echo "<pre>";	


print_r($array); // the mainn Array
echo "<pre>";


Array_push($array, "C", "C++" ,"Ajax");


print_r($array); // The Main Array After Adding My Elemants
array_unshift($array,"mySQL");



print_r($array);