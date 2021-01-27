<?php


/*

Arrays

[ 1 ] indexed Array

syntax array (Element1,Element2,Element3)



*/




$langs = array("Html","Html5","Css","Css3","Js","PHP");

$langs[]  = "Ruby";


echo "<ul>";



for ($lang = 0 ; $lang < count($langs) ; $lang++) {

echo "<li>" . $langs[$lang] . "</li>";


}


echo "</ul>";