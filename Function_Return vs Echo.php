<?php



/*
[ 1 ] Function with Arguments
[ 2 ] Function Inside Function
[ 3 ] If, Else Condition
[ 4 ] Comparison Operators
[ 5 ] Concatenation
[ 6 ] String Operators
[ 7 ] Function Return

*/

function ticket($user,$age){


$ticket =rand(100000,10000000000);

if($age>=30){

$msg = "Hello " . $user . " Your Age is " .$age ."<br>";
$msg .= "You Are Qualified To Get A Ticket Congratz :)" ."<br>";
$msg .= "Your Ticket ID is [" ."<span>". $ticket ."</span>]";
}


else {
$msg .= "Hello " . $user . " Your Age Is " . $age ."<br>"; 
$msg .= "You Are Not Qualified To Get A Ticket Sorry :(";
}

return $msg;

}
$id = ticket("kira",30);

//echo $id;



function makefrime($element){

$frime ="<div class ='nice-frime'>";

$frime .= $element;


$frime .= "</div>";

return $frime;
}


//  echo makefrime($id);
echo"<br>";
echo makefrime($id);
?>



<!DOCTYPE html>
<html>
<head>   
	<meta charset="utf-8">
	<title>my function</title>
</head>
<body>

<style>


	.nice-frime span{


color: blue;


	}
	.nice-frime{
padding: 10px;

text-align: center;
width: 400px;
margin: 20px auto;
border-radius: 10px;
background-color: #EEE;
border: 1px solid #ccc;
font-family: tahoma,Arial;

	}

	

</style>


</body>
</html>


