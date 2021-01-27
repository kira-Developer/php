<?php

/*
Array Reverse : array_reverse(Array , Preserve)

Shuffle :
*/

$array=array(

"Html",
"Css",
"Css5",
"Html5",
"Js",
"Ruby",
"Python",


);


echo "<pre>";



print_r($array); // The Main Array


echo "</pre>";


//$reverse= array_reverse($array);


echo "<pre>";

shuffle($array);

print_r($array); //The Main array After Reverse


echo "</pre>";
