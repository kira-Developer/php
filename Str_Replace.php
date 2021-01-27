<?php


/*

Str_Replace : str_replace (Search , Replace , String , Count)

*/


$str = "I love PHP Too Much Because PHP ls Good And Easy Language";
echo $str;
$str = explode(" ", $str);
echo "<pre>";
print_r($str);



$str =  str_replace("PHP", "Html", $str);





echo "<pre>";
print_r($str);


$str = implode(" ", $str);

echo $str;