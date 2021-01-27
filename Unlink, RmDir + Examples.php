<?php



/*
unlink(filename , context)
rmdir(directory)
*/


$file = 'kira.txt';


if(file_exists($file)&& is_writable($file)){


	unlink($file);
}else{

	if (file_exists($file)){

		echo 'sorry The file is Not writable';

		chmod($file, 0755);
	}
}
