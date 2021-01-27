<?php



function back($org){

$backup = __file__;
	return copy($backup, $backup . "." . $org);
}

back('back');



echo __file__;