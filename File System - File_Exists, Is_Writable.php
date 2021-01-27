<?php


//echo dirname(__FILE__);


$file = "kira.txt";


if(file_exists($file)){

	echo  'The file [ '.$file.' ] is found';

	file_put_contents($file, 'Added With PHP File Put Contents');



}else{

echo  'Sorry The file ['.$file.'] Is not found But I created It with PHP';

file_put_contents($file, 'Created By PHP');

}

echo"<br>";


if (is_writable($file)) {

echo 'The file [ '.$file.' ] is writable';

//file_put_contents($file, "The file is writable");	
}else{


	echo 'The file '.$file.' is Not writable';
}