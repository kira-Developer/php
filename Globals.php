<?php



/*

Super Global


*/


$name = 'abdullh'.'<br>';


function test(){


$name = "kira";

echo  "function Local Name Is:" . $name ."<br>";

echo  "Global Name Is:" . $GLOBALS['name'];

}



test();