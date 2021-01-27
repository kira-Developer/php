<?php

/*
exit(Message)
die(Message)
*/

$file = 'test.txt';


@fopen($file, 'r') or die('file is not found');


file_put_contents($file, 'php');
?>