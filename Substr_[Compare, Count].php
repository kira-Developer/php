<?php



/*

substr_count(String , Substring , Start , Length);
substr_compare(String , String2 , Start Position , Length , Case)
*/
$str = "I Love PHP So Much Because PHP Is Cool And Easy Thats Why PHP Is The Best";

$str1= "abdullh";
$str2 = "babdullh";
echo substr_compare($str1, $str2,5) . "<br />";


echo substr_count($str, "PHP",0);