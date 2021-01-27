<?php


$indexedArray = Array(

"kira",
"rkmj",
"Moody.19",
"kokoboko",
"hack.19",



);
$indexedArray[] = "amgd";


echo"<pre>";


print_r($indexedArray);  echo $indexedArray[0];

echo "<br>";

echo "</pre>" . "[". $indexedArray[1] . "]". "<br>"; 


echo "<ul>";
foreach ($indexedArray as $var) {


	echo "<li type = 1>". $var . "</li>". "<br>";
}

echo "</ul>";




$AssociativeArray =Array(

    "sgrx"		=> "kira",
"mooodyy.19"	=> "m7amd",
"amgad8902019"	=> "amgad",
"kokoboko" 		=> "518",







);

echo"<ul>";
echo "<pre>";
foreach ($AssociativeArray as $Nickname => $Real_Name) {
  	echo "<span>". "<li type = 1>". $Nickname . "=>" . $Real_Name ."</li>"."</span>"."<br>";
  }  


echo "</pre>";
echo "</ul>";



echo "<h1>" . "Remainder  Methods" ."</h1>";

?>





<style type="text/css">
	

span{


	color: red;


	font-size: 15px;
	text-align: center;
}
ul{


	color: blue;

	border: solid 1px;

	text-align: center;
}
h1{

text-align: center;

border: dotted 3px;

border-color:  red;
background-color: blue ;


}

</style>
