<?php



/*

Array_unique (Array , sorting Type)


*/


$array = array("kira" , "kira" , 1 , 1 , "m7md" , "m7md" , 10 , 11 , 11);
echo "<pre>";

print_r($array); 

echo "<pre>";
$unique = array_unique($array);


print_r($unique);