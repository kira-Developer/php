<?php

include 'Contact.php';

 $id = $_GET['id'];


 $sql = "DELETE FROM user WHERE id= '$id'";

$result = mysqli_query($link, $sql);
if ($result){

	echo'Deleted successfully';

	sleep(5);
	echo"<META HTTP-EQUIV='Refresh' CONTENT='3;URL=Enquiry.php'>";

}else{


	echo  "can't Deleted";
}

?>