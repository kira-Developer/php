<?php




/*

parse_str(String , Array)
 Nl2br(String ,xhtml)

*/
$link = "  name=kira \n &age=28 \n &year=2015 \n &skill=2 "; 


parse_str($link);

 $str =   "name is : ". $name  ." age is : ".  $age ." year is : ".  $year. " skill is : ". $skill;




echo nl2br ($str);