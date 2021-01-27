<?php



/*

Trim : trim(String , Charlist)
\ 0 Null
\t tab
\n New Line
\r Carriage Return 
\x0B Vertical Tab
" " Space
*/

$str = "i love php ";

$trim = trim($str , "i lov ph");


echo  $trim;