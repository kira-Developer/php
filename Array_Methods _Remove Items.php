<?php

/*

Array_Pop : array_pop(Array)

Array_Shift : array_shift(Array)


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




echo  "<pre>";



 print_r($array);

echo "<pre>"; 


$langs = array_pop($array). "<br>"; 

print_r($array);


echo $langs;

$langs .= array_shift($array) ;

print_r($array);
echo $langs;