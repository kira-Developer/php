<?php

@$file = mkdir("kira");

$file = 'kira/kira';
 
$txt = 'kira/kira/kira.txt';

if( is_file($file)){


echo  "file is not found";


}else{


@mkdir($file);

@file_exists($txt);
@file_put_contents($txt, 'hi');
 echo "The file is found";	

}