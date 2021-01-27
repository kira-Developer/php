
<?php
/*

date(format , timestamp)
strtotime(date , now )

*/

$time = strtotime('now');
  date_default_timezone_set('Asia/Riyadh');

echo  '<br>';
 echo 'The date after six months from today is: ' . date('Y-m-d',time () + (6 * 30 * 24 * 60 * 60));


 ?>




 <br>

 <?php
echo  date('Y-m-d h:i:s' , $time );

 ?>


