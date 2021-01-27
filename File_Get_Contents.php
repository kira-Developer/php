<?php


/*

file_get_contents(path , include_path , context ,offset , max_length)


*/


$file = file_get_contents('name.txt', false ,NULL,34);




echo  $file;

$Transfer = file_put_contents('Read.txt', $file);
//var_dump($file);







