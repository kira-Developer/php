<?php



/*

addslashes : addslashes (String)
stripslashes : stripslashes (String)
strip_tags (String , Allow)
*/


$str = "I love 'php'"; 

  $skipped = addslashes($str);

  echo $skipped ."<br>";

  $clran = stripcslashes($str);


  echo  $clran ."<br>";

  $str1 = "<a href = 'www.google.com'>google</a>";


  echo $str1 . "<br>";




   $stop_tag = strip_tags($str1);

  echo $stop_tag;


