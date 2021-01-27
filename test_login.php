<?php
include 'Contact.php';
?>
<?php
@$user = $_POST['user'];
@$password = $_POST['pass'];
@$submit = $_POST['submit'];
if($submit){
 $sql = "INSERT INTO user (user , password) VALUES ('$user' , '$password')";


$query = mysqli_query($link , $sql);

}
else{echo "ادخل قيمة"; 
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>تسجيل دخول</title>
    <style type="text/css">
         .submit{height: 2%;

width:  3%;



         }

         form{border:solid ; text-align: center; padding: 10px;}
    </style>
</head>
<body>

 <form action="test_login.php" method="POST"> 
     
<input type="username" name="user" placeholder="username">
<br>
<input type="password" name="pass" placeholder="password">
<br>
<input type="submit" value="send" name="submit" class="submit">

 </form>
</body>
</html>