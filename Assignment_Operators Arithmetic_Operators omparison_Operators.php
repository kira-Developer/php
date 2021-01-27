<!--  --><?php




/*
---------------------------------
---------------------------------
  
     Arithmetic Operators


[  +  ] Addition
[  -  ] Subtraction
[  *  ] Multiplication
[  /  ] Division
[  %  ] Modulus

---------------------------------
---------------------------------
*/  
//variable

$var1 = 100; 
$var2 = 200;

#-----------------example-------------#
#-------------------------------------#

echo $var1 + $var2 ."<br>"; // 100 + 200

echo $var1 - $var2 ."<br>"; // 100 - 200

echo $var1 * $var2 ."<br>"; // 100 * 200

echo $var1 / $var2 ."<br>"; // 100 / 200

echo $var1 % $var2 ."<br>"; // 100 / 200 = 100

 


?>


<?php




/*


Assignment Operators

*/


$var3 = 100;

$var3 += 200; // $var3 = $var3 + 200 = 300
/*

$var3 += 200; // $var3 = $var3 + 200 = 300

$var3 -= 200; // $var3 = $var3 - 200 = -100

$var3 *= 200; // $var3 = $var3 * 200 = 2000

$var3 /= 200; // $var3 = $var3 / 200 = 0.5

*/
$var4 = 200;

//$var3 += $var4; // $var3 = $var3 + $var4 (100 + 300)
 
echo $var3 . "<br>";

$name  = "abdullh"." ";

$name .= "bandr"." ";

$name .= "Al-Otaibi" ;

// $name = "abdullh" . "bandr" . "Al-Otaibi";

echo $name  . "<br>" ;
?>


<?php


/*

Comparison Operators


[ ==  ] Equals
[ === ] Identical
[ !=  ] not Equals
[ !== ] not Identical
[ <>  ] Not Equals
[  <  ] Less Than
[ <=  ] Less Than Or Equals
[  >  ] Larger Than
[ >=  ] Larger Than Or Equals
*/


$a = 100; //integer

$b = 100; //integer



//echo   $a == $b ;  

/*
$a = "100"; //string


$b = 100; //integer

if($a===$b){
	
echo "true";



} else{
	
	echo"false"


}
----------------------------------------
==========Will print "false"============
----------------------------------------
*/

/*
------------------------------------------
--------------------example---------------
------------------------------------------



if ($a==$b){


echo "true";



}
else {


echo "false";
,
if ($a===$b){


echo "true";



}
else {


echo "false";
,
if ($a!=$b){


echo "true";



}
else {


echo "false";
,
if ($a!==$b){


echo "true";



}
else {


echo "false";
,
if ($a < $b){


echo "true";



}
else {
echo "false";
,
if ($a <= $b){


echo "true";



}

else {
,
echo "false";
,
if ($a > $b){


echo "true";



}
else {


echo "false";
,
echo "false";
,
if ($a >= $b){


echo "true";



}
else {
*/

echo gettype($a)."<br>" . gettype($b) . "<br>";

if ($a===$b){


echo "true";



}
else {


echo "false";

}
?>
