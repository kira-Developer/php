<?php
/*
Syntax

Function Identifier ($arg1, $arg2,$arg3){

     //Function Body

      return;

     }
*/






function age ($start, $and){

echo "<select name='year'>";
for ($age=$start; $age<=$and ; $age++) { 
	


echo "<option valuse= '$age'>". $age . "</option>";



}
echo "</select>";


}

age("1","30");
age("1","12");
age("1990","2018");

?>
<br>

<?php


function hi(){


return "kira". "<br>";


}

echo hi();



?>

