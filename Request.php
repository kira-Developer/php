<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="username">
<input type="submit" value="send">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	echo $_POST['username'];
}else{


	echo "you cant browse this page";
}
?>