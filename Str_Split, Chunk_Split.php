<?php

/*

str_split : str_split (String , Length)


*/


$str =  "Hello i love php"; 


echo $str . "<br>";


$arr =  str_split($str , 1);

echo "<pre>";


print_r ($arr);


echo "</pre>";




/*

chunk_split : chunk_split (String , Length, End)


*/



$str =  "Hello I love php"; 


echo $str . "<br>";


$arr =  chunk_split($str , 1 ,"   ");




echo $arr;


