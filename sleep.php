<?php
/*
sleep(seconds);
usleep(Microseconds);
time_sleep_until(time() + 5);

*/

 function chackfile()
{
	if (file_exists('kira.txt')) {


		echo'good file is found';
	}else{

		sleep(5);
		chackfile();
	}
}

echo chackfile();

?>