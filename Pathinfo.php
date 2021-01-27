<?php


/*

pathinfo(path,options)

*/


$links = pathinfo(__file__);


echo "<pre>";
print_r($links);
echo  "</pre>";

echo $links['dirname'].'<br>';
echo $links['basename'].'<br>';
echo $links['extension'].'<br>';
echo $links['filename'].'<br>';