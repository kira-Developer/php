<?php

include 'Contact.php';

@$name = $_POST['text'];
$sql = "SELECT * FROM user WHERE  user  = '$name'";
$result = mysqli_query($link, $sql);

echo "<table>



<tr>
<th>username<th>
<th>password</th>
</tr>







</table>";
while ($row = mysqli_fetch_array($result)) {

 $user = $row['user'];
 $password = $row['password'];
 $id = $row['id'];
 
  echo 
  "<table>
  <tr>

<td>$user<td>
<td>$password</td>
<td><a href='delete.php?id=$id'>a</a></td>
</tr>
</table>";

};

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title></title>
 <style>
  
  td,th{border:solid 1px; padding: 10px; margin: 10px; width: 20px;}

table{text-align: center; margin: 10px;}
 </style>
</head>
<body>



<form method="POST" action="">
 

<p></p>

 <input type="text" name="text">
 <br>
 <input type="submit" name="submit" value="send">



</form>
</body>
</html>