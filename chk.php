<?php

$input =  $_POST['ip'];

$filter_input = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);

$opt = array(



'options' => array(



),

'flags' => FILTER_FLAG_IPV4


);

	

if (filter_var($input, FILTER_VALIDATE_IP, $opt)	!== false){


echo  'Good The ' . $input . ' is IP Version 4 ';



}else {echo  ' The  ' . $input . ' Is Not IP Version 4 ';}

?>