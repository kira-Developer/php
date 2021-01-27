<?php



/*

scandir(dir, sort , context);

*/


$link = __dir__ ;

$files = scandir($link);


echo"<pre>";

print_r($files);
echo"</pre>";