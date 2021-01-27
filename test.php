<?php
include 'Contact.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>تسجيل دخول</title>
    <style type="text/css">
         .submit{}
    </style>
</head>
<body>
 <form action="" method="POST">
     
<input type="username" name="user" placeholder="username">
<br>
<input type="password" name="pass" placeholder="password">
<br>
<input type="submit" value="send" name="submit" class="submit">

 </form>
</body>
</html>
<?php
$user = $_POST['user'];
$password = $_POST['pass'];

$sql = "INSERT INTO user (user , password) VALUES ('$user' , '$password')";


$query = mysqli_query($link , $sql);


?>