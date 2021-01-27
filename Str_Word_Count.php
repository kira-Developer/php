<?php


/*


Str_Word_Count(String[Required] , Format[Optinoal] , Charlist[Optinoal])

*/

$str = "I love php So Much & Although JavaScript";


echo  $str . "<br />";

$count = str_word_count($str , 2 ,"&");

echo  "<pre>";
print_r  ($count);
echo "</pre>";