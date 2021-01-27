<?php

/*


Explode: explode ( Seprator , Staring , Limit);


*/



$starng = "a-b-c-k-x-q";



$arr = explode("-", $starng);

echo $starng;
echo "<pre>";


print_r($arr);

echo "</pre>";


for ($i = 0 ; $i < count($arr); $i++){



echo "<span class = 'kira'>" . $arr[$i] . "</span>"; 

}

?>


<style type="text/css">
	


.kira{


color:red;

}



</style>