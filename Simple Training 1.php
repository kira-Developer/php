<?php 



/*
[1] Check If The Directory Is Exists Or No 
[2] Make The Directory 
[3] Assign This Directory To Variable 
[4] Create A File Inside This Directory
[5] Assing This File To Variable 
[6] Change Mode Of This is file To Be Read Only
[7] Check If This File Is Writable
[8] Change Mode Of This file And Make It Writable 
[9] Include This File 
*/

if ( file_exists(__dir__ ."/PHP")){


	echo  "sorry This is Directory Is Exists" ."<br />";
}else{

mkdir(__DIR__ ."/PHP");

}

$Directory = __DIR__ .'/PHP/';
file_put_contents($Directory . "text.php", 'Hello' );


$file = $Directory . 'text.php';


 chmod($file,0444);





if (is_writable($file)){

file_put_contents($file, "hi");
}else{


chmod($file, 0755);
file_put_contents($file, "<?php echo 'i\'m kira'; ");

}

include $file;

