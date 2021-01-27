<?php

$maincolor = '#FFF';


if ($_SERVER{'REQUEST_METHOD'} =='POST') {
	

	$maincolor =   $_POST['color'];

		setcookie('test' ,$maincolor  , time() + 40000 , '/' );


		
}

if (isset($_COOKIE['test'])) {

			$body = $_COOKIE['test'];
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: <?php echo $body?>">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	
<input type="color" name="color">
<input type="submit" value="choose">

</form>

</body>
</html>