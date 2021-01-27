<?php
/*
ASort : asort(Array, Sorting Type)
ARsort : arsort(Array , Sorting Type)
KSort : asort(Array, Sorting Type)
KRsort : arsort(Array , Sorting Type)


*/


$array=array(

"Html" => 10, 
"Css" => 20,
"Css5" =>30,
"Html5" => 40,
"Js" => 50,
"Ruby" =>60,
"Python" =>70,


);



echo "<pre>";

print_r($array);

echo "<pre>";


ksort($array);

print_r($array);