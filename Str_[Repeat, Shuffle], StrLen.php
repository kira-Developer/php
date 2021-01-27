<?php



/*

Str_Repeat  : str_repeat (String[Required] , Repeat[Required])
Str_Shuffle : str_shuffle (String)
Strlen : strlen (string)
*/


$str = "kira" . "<br>";

$Repeat = str_repeat($str, 12);


echo $Repeat;



$str2 = "korabka" ;

$Shuffle = str_shuffle($str2);
echo $Shuffle ."<br>";


$str3 = "hi";

$Strlen = strlen($str3);


echo  $Strlen;