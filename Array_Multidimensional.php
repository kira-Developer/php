<?php




/*

Arrays


[ 3 ] Multidimensional Array

Array(
Array(Element,Element,Element),
Array(Element,Element,Element),
Array(Element,Element,Element),

)

*/
/*
$diet = Array(


Array("Apple", "Banana" , "Milk"),
Array("Meat", "Apple","Egg"),
Array("Rice", "Apple"),
Array("Fish","Apple"),
Array("Bread","Apple","Banana"),
Array(

Array(1,2,3,"kira")



)




);
*/

/*Array(

"key" =>"Value"

) 
*/


$diet = Array(

"one day" 	=> Array("Apple", "Banana" , "Milk"),
"two day" 	=> Array("Meat", "Apple","Egg"),
"three day"	=> Array("Rice", "Apple",
	Array(


		"Apple" => "%50",
		"Rice"  => "%50",

	))


);




echo "<pre>";

print_r($diet);

echo "</pre>";



echo $diet["two day"][1];