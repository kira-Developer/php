<?php



session_start();

$_SESSION['username'] = 'kira';


$_SESSION['fivcolor'] = 'blue';

$file = 'page.php';
 file_exists($file);

file_put_contents($file, '<?php  session_start(); 

  echo "welcome mr " . $_SESSION["username"] . " Your favorite color is " .  $_SESSION["fivcolor"];


	?>' );


//file_put_contents($file, "")
?>


<a href="<?php echo $file ?>">
	

<button>go to next page</button>

</a>