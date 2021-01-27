<?php
/*
Sort : sort(Array, Sorting Type)
Rsort : rsort(Array , Sorting Type)

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
print_r($array);


sort($array);
print_r($array);


echo "</pre>";