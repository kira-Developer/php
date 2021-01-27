<?php




$array=array(

"Html",
"Css",
"Css5",
"Html5",
"Js",
"Ruby",
"Python",
10,



);


/*

in_Array(Needle , Haystack , Type)


*/

/*


if(in_array("10",$array, true )){


echo  true;

}
*/

$langs = array_search("Css", $array);



echo  "Yes its index found "  . $langs ." And The Value is " . $array[$langs] ;


