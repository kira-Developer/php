<?php
/*
User input
Cookies
Web Service
Server Variables
Database Query Rwsult 

*/

foreach (filter_list() as $filtr ) {

echo '<div>'. $filtr .'<br>' .'</div>';
	
}

?>


<form action="chk.php"  method="POST">
 ip:<input type="text" name="ip">
<br>
email:<input type="email" name="email">
<br>
<input type="submit" name="sub" value="send">
</form>